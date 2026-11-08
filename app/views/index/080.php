

<script>
document.addEventListener("DOMContentLoaded", function () {
    var verMasBotones = document.querySelectorAll('.ver-mas');

    verMasBotones.forEach(function (boton) {
        boton.addEventListener('click', function (event) {
            var descripcionCompleta = event.target.getAttribute('data-descripcion');
            var descripcionElement = event.target.parentElement.querySelector('.descripcion');
            
            if (descripcionElement.innerHTML !== descripcionCompleta) {
                descripcionElement.innerHTML = descripcionCompleta;
                event.target.textContent = 'Ver Menos';
            } else {
                var descripcionCorta = descripcionCompleta.substring(0, 100) + '...';
                descripcionElement.innerHTML = descripcionCorta;
                event.target.textContent = 'Ver Más';
            }
        });
    });
});
</script>



    <div class="recent-listing">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">

        

          <div class="card">
        <h1>Bienvenido al Instituto Técnico Comercial Superior</h1>
        <h2>Misión:</h2>
        <p>La misión del Instituto Técnico Comercial Superior es brindar educación de calidad, formando profesionales técnicos altamente capacitados en áreas comerciales y empresariales, con sólidos valores éticos y compromiso social.</p>
        <h2>Visión:</h2>
        <p>Nuestra visión es ser reconocidos como una institución líder en la formación técnica y profesional en el ámbito comercial, contribuyendo al desarrollo socioeconómico del país mediante la formación de profesionales competentes y comprometidos con el éxito empresarial.</p>
    </div>



          <!-- <div111 class="owl-carousel owl-listing">
            
          </div111> -->
 

        <!-- ---- -->
      </div>
    </div>
  </div>
   </div>
  </div>
