</div></center>
<br><br><br><br><br>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Registrate con tus datos</h6>
            <h2>todos los datos tienen q ser correctos</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-15">
          <div class="">
            <div class="row">
              <div class="col-lg-6">
                <div id="map">
                 <iframe src="GUIA DE PROYECTOS2022-II.pdf" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
               
                </div>
                
              </div>
              <div class="col-lg-6 align-self-center">
                <!-- formulario para agregar todo los datos  -->
                
              <form id="contact" action="admRepo/estudiantesgrabar.php" class="was-validated" method="POST">
                  <div class="row">
                    <div class="col-lg-4">
                      <fieldset>
                        <input class="form-control" type="text" name="paterno" id="paterno" placeholder="PATERNO"  required>
                      </fieldset>
                    </div>
                    <div class=" col-lg-4">
                      <fieldset>
                        <input  class="form-control" type="text" name="materno" id="materno" placeholder="MATERNO" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-4">
                      <fieldset>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="NOMBRES" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <input class="form-control" type="number" name="carnet" id="carnet" placeholder="Cedula de identidad" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <select class="form-control" name="extencion" id="extencion" required>
                          <option value="" disabled selected>extencion CI</option>
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
                    </div>

                    <div class="col-lg-6">
                      <fieldset>
                      <!-- <h5 class="text-primary card-title"><b>ingrese la carrera:</b></h5> -->
                        <select name="carrrera_id" id="carrrera_id" class="form-control" required>
                        <option value="" disabled selected > ingrese la carrera:</option>
                        