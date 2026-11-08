</div></center>



  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-15">
          <div class="">
            <div class="row">
              <div class="col-lg-6">
                <div id="map">
                  <h1>Guía de proyectos</h1>
                 <iframe src="GUIA DE PROYECTOS2022-II.pdf" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
               
                </div>
                
              </div>
              <div class="col-lg-6 align-self-center">
                <!-- formulario para agregar todo los datos  -->
                <h2>Ingrese sus datos para el registro</h2><br>
              <form id="contact" action="admRepo/estudiantesgrabar.php" class="was-validated" method="POST">
                  <div class="row">
                    <div class="col-lg-4">
                      <fieldset>
                        <input class="form-control" type="text" name="paterno" id="paterno" placeholder="PATERNO"  required onkeyup="generarUsuario()">
                      </fieldset>
                    </div>
                    <div class=" col-lg-4">
                      <fieldset>
                        <input  class="form-control" type="text" name="materno" id="materno" placeholder="MATERNO" onkeyup="generarUsuario()" >
                      </fieldset>
                    </div>
                    <div class="col-lg-4">
                      <fieldset>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="NOMBRES" required onkeyup="generarUsuario()">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <input class="form-control" type="number" name="carnet" id="carnet" placeholder="Cedula de Identidad" onchange="autocompletarUsuarioContraseña()" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <select class="form-control" name="extencion" id="extencion" required>
                          <option value="" disabled selected>Extencion Del CI</option>
                          <option value="La Paz">La Paz</option>
                          <option value="Cochabamba">Cochabamba</option>
                          <option value="Santa Cruz">Santa Cruz</option>
                          <option value="Oruro">Oruro</option>
                          <option value="Potosí">Potosí</option>
                          <option value="Tarija">Tarija</option>
                          <option value="Chuquisaca">Chuquisaca</option>
                          <option value="Beni">Beni</option>
                          <option value="Pando">Pando</option>
                        </select>
                      </fieldset>
                    </div>  <br><br>                 
                    
                    <div class="col-lg-6">
          <fieldset>
        <select name="cargo_id" id="cargo_id" class="form-control" required>
            <option value="" disabled selected>Estado Académico:</option>
            