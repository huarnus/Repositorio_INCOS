/* Adaptación de transporte: conserva el HTML, CSS, menús y formularios existentes. */
(() => {
'use strict';
const script=document.currentScript, endpoint=new URL(script.dataset.api,location.origin), base=script.dataset.base;
const nativeFetch=window.fetch.bind(window);let csrfPromise;
function url(path,query={}){const u=new URL(endpoint);u.searchParams.set('route','/v1'+path);for(const [k,v] of Object.entries(query))u.searchParams.set(k,v);return u;}
async function csrf(){if(!csrfPromise)csrfPromise=nativeFetch(url('/auth/csrf'),{credentials:'same-origin'}).then(r=>r.json()).then(j=>j.data.csrf_token);return csrfPromise;}
async function request(path,method='GET',data,query={}){
 const headers={Accept:'application/json'};if(method!=='GET')headers['X-CSRF-Token']=await csrf();
 let body;if(data instanceof FormData)body=data;else if(data!==undefined){headers['Content-Type']='application/json';body=JSON.stringify(data);}
 const response=await nativeFetch(url(path,query),{method,headers,body,credentials:'same-origin'});
 let json;try{json=await response.json();}catch{throw new Error('La API no devolvió JSON. Revisa Apache y PHP.');}
 if(!response.ok){const details=json.error?.details;throw new Error((json.error?.message||'No se pudo completar la operación.')+(details? '\n'+Object.entries(details).map(([k,v])=>k+': '+v).join('\n'):''));}return json;
}
window.IncosAPI={request,url,csrf};
const forms={
 'carreraGrabar.php':['/carreras','POST','carreraListar.php'], 'carreraActualizar.php':['/carreras','PATCH','carreraListar.php'],
 'modalidadGrabar.php':['/modalidades','POST','modalidadListar.php'],'modalidadActualizar.php':['/modalidades','PATCH','modalidadListar.php'],
 'cargoGrabar.php':['/cargos','POST','cargoLista.php'],'cargoActualizar.php':['/cargos','PATCH','cargoLista.php'],
 'liceGrabar.php':['/tutores','POST','liceLista.php'],'liceUpdate.php':['/tutores','PATCH','liceLista.php'],
 'estudiantesActualizar.php':['/estudiantes','PATCH','estudiantesListaActivos.php'],
 'usuariograbar.php':['/usuarios','POST','usuarios.php'],'usuarioActualizar.php':['/usuarios','PATCH','usuarios.php'],
 'admGrabar.php':['/administrativos/alta','POST','admLista.php'],
 'proyectoGrabar.php':['/proyectos','POST','inicio.php'],
 'archivosGrabar.php':['/archivos','POST','proyectoFormulario.php','multipart'],
 'proyec2022Grabar.php':['/repositorio-2022/documentos','POST','proyectoLista2022.php','multipart'],
 'estudiantesgrabar.php':['/inscripciones','POST',base+'/registroEstudiantes.php?sw=3000'],
 'login.php':['/auth/login','POST',null]
};
function jsonForm(fd){const data={};for(const[k,v]of fd.entries())if(!(v instanceof File)&&!k.endsWith('[]'))data[k]=v;return data;}
function normalize(action,data){
 if(action==='estudiantesActualizar.php'){data.nombreCompleto=data.nombreAp;delete data.nombreAp;}
 if(action==='usuariograbar.php'){data.nombre=data.nombreAp;delete data.nombreAp;delete data.carnet;}
 if(action==='usuarioActualizar.php'){if(data.nombreAp){data.nombre=data.nombreAp;delete data.nombreAp;}delete data.carnet;}
 if(action==='login.php')delete data.recordar;
 if(action==='proyectoGrabar.php'&&data.fecha_entrega){const m=data.fecha_entrega.match(/^(\d{2})-(\d{2})-(\d{4})$/);if(m)data.fecha_entrega=`${m[3]}-${m[2]}-${m[1]}`;}
 return data;
}
document.addEventListener('submit',async event=>{
 const form=event.target;if(!(form instanceof HTMLFormElement))return;
 const actionURL=new URL(form.action||location.href,location.href);if(actionURL.origin!==location.origin)return;
 const action=actionURL.pathname.split('/').pop(),def=forms[action];if(!def)return;
 event.preventDefault();if(form.dataset.apiBusy)return;form.dataset.apiBusy='1';
 const buttons=[...form.querySelectorAll('button[type="submit"],input[type="submit"]')];buttons.forEach(b=>b.disabled=true);
 try{const fd=new FormData(form);let data=def[3]==='multipart'?fd:normalize(action,jsonForm(fd)),path=def[0];
 if(def[1]==='PATCH'){const id=data.id||data.cod;if(!id)throw new Error('Falta el identificador del registro.');path+='/'+encodeURIComponent(id);delete data.id;delete data.cod;}
 const result=await request(path,def[1],data);
 if(action==='login.php'){csrfPromise=Promise.resolve(result.data.csrf_token);location.assign(base+'/admRepo/'+result.data.next);}
 else location.assign(def[2]);
 }catch(error){alert(error.message);}finally{delete form.dataset.apiBusy;buttons.forEach(b=>b.disabled=false);}
},true);
const deletes={'carreraEliminar.php':'carreras','modalidadEliminar.php':'modalidades','cargoEliminar.php':'cargos','liceEliminar.php':'tutores','estudiantesEliminar.php':'estudiantes','estudiantesEliminar2.php':'estudiantes','usuarioEliminar.php':'usuarios','proyectoEliminar.php':'proyectos','admEliminar.php':'administrativos'};
// El listener en document se ejecuta después de la confirmación onclick original.
document.addEventListener('click',async event=>{
 const a=event.target.closest('a[href]');if(!a||event.defaultPrevented)return;
 const u=new URL(a.href,location.href);if(u.origin!==location.origin)return;
 const name=u.pathname.split('/').pop();let resource=deletes[name];
 if(name==='salir.php'){event.preventDefault();try{await request('/auth/logout','POST',{});location.assign(base+'/admRepo/index.php');}catch(e){alert(e.message);}return;}
 const disable={'estudiantesdesactivar.php':'estudiantes','usuariodesactivar.php':'usuarios'};
 if(!resource&&!disable[name])return;event.preventDefault();const id=u.searchParams.get('id')||u.searchParams.get('cod');
 try{await request('/'+(resource||disable[name])+'/'+encodeURIComponent(id),resource?'DELETE':'PATCH',resource?undefined:{estado:0});location.reload();}catch(error){alert(error.message);}
});
// Interruptores existentes: adapta únicamente sus llamadas fetch conocidas.
const toggles={'proyectoRepoActivar2023.php':'repositorio','proyectoRepoactivar2022.php':'repositorio-2022','usuarioActivar.php':'usuarios','estudiantesactivar.php':'estudiantes'};
window.fetch=async(input,options={})=>{
 const u=new URL(input instanceof Request?input.url:String(input),location.href),resource=toggles[u.pathname.split('/').pop()];
 if(u.origin!==location.origin||!resource)return nativeFetch(input,options);
 const data=JSON.parse(options.body||'{}');
 try{const r=await request('/'+resource+'/'+encodeURIComponent(data.id),'PATCH',{estado:data.estado});localStorage.removeItem('estado-'+data.id);return new Response(JSON.stringify({success:true,estado:r.data.estado}),{status:200,headers:{'Content-Type':'application/json'}});}
 catch(e){localStorage.removeItem('estado-'+data.id);alert(e.message);throw e;}
};
// Reutiliza las funciones invocadas por los selectores y botones del proyecto.
window.cambiarInstancia=async id=>{const select=document.querySelector('#fila-'+id+' select');try{await request('/proyectos/'+id,'PATCH',{etapas_instancia_id:Number(select.value)});location.reload();}catch(e){alert(e.message);}};
window.enviarAProyectoRepositorio=async id=>{if(!confirm("¿Desea enviar este proyecto al 'REPOSITORIO'?"))return;try{await request('/proyectos/'+id+'/publicacion','POST',{});location.reload();}catch(e){alert(e.message);}};
// Confirmar defensa cambia la etapa; conserva los documentos del estudiante.
window.eliminarRegistroDefensa=async(estudianteId,idProyecto)=>{if(!confirm('¿Desea confirmar la etapa Defensa del proyecto seleccionado?'))return;try{const stages=await request('/etapas');const stage=stages.data.find(x=>x.instancia==='Defensa');if(!stage)throw new Error('No está configurada la etapa Defensa.');await request('/proyectos/'+idProyecto,'PATCH',{etapas_instancia_id:Number(stage.id)});location.reload();}catch(e){alert(e.message);}};
// Paginación de tutores: mismos elementos, clases y enlaces; datos desde GET JSON.
window.cargarPagina=async page=>{const container=document.getElementById('table-container');if(!container)return;
 try{const [result,careers]=await Promise.all([request('/tutores','GET',undefined,{page,per_page:10}),request('/carreras','GET',undefined,{per_page:100})]);const names=new Map(careers.data.map(c=>[String(c.id),c.nombre_carrera]));
 const table=document.createElement('table');table.className='table table-bordered table-hover table-success';
 const header=table.insertRow();for(const text of ['NOMBRE COMPLETO','CARRERA']){const cell=header.insertCell();const center=document.createElement('center'),h=document.createElement('h4');h.textContent=text;center.append(h);cell.append(center);}
 for(const row of result.data){const tr=table.insertRow();tr.insertCell().textContent=row.nombre_lice;tr.insertCell().textContent=names.get(String(row.carrrera_id))||row.carrrera_id;const actions=tr.insertCell();for(const [file,label,style]of [['liceEditar.php','editar','secondary'],['liceEliminar.php','eliminar','primary']]){const a=document.createElement('a');a.href=file+'?id='+row.id;a.className='btn btn-sm btn-rounded btn-outline-'+style;a.textContent=label;if(label==='eliminar')a.onclick=()=>confirm('esta seguro de borrar este registro');actions.append(a,document.createTextNode(' '));}}
 container.replaceChildren(table);const nav=document.createElement('div');for(let i=1;i<=result.meta.last_page;i++){const a=document.createElement('a');a.href='#';a.textContent=String(i);a.className='btn btn-sm btn-outline-success';a.onclick=e=>{e.preventDefault();window.cargarPagina(i);};nav.append(a);}container.append(nav);
 }catch(e){alert(e.message);}
};
// Selector dependiente: evita el endpoint PHP que devolvía JSON sin protección.
document.addEventListener('change',async event=>{const select=event.target;if(select.name!=='carrrera_id')return;const target=document.querySelector('select[name="licenciados_id"]');if(!target)return;event.stopImmediatePropagation();
 try{const result=await request('/tutores','GET',undefined,{carrrera_id:select.value,per_page:100});target.replaceChildren(new Option('Seleccione un tutor',''));for(const row of result.data)target.add(new Option(row.nombre_lice,row.id));}catch(e){alert(e.message);}
},true);
})();
