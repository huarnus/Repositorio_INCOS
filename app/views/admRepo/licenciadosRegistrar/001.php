


        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="text-success card-title">Formulario de Registro Licenciados</h1>
        </div>
    <form action="liceGrabar.php" method="POST"  enctype="multipart/form-data"> 
      <h5 class="text-primary card-title"><b>Apellidos y Nombres:</b></h5> 
        <input type="text" name="nombre_lice" required class="form-control" ><br>
        
           <select name="carrrera_id" id="carrrera_id" class="form-control" required>
            <option value="" disabled selected>Seleccione la Carrera:</option>
            