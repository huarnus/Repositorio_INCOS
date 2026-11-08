
    <style>
  /* Estilo adicional para ajustar los videos uno al lado del otro */
  .video-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Espacio entre los videos */
  }

  .image-tile {
    flex: 0 0 calc(50% - 10px); /* Ajusta el ancho según tus necesidades, teniendo en cuenta el espacio entre ellos */
    box-sizing: border-box;
    overflow: hidden; /* Evitar que la imagen se extienda más allá del contenedor */
    position: relative; /* Para posicionar el botón de reproducción */
  }

  .image-tile video {
    width: 80%;
    height: auto;
  }

  .demo-gallery-poster {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>

<div class="row">  
  <div class="col-lg-12">
    <div class="card px-3"> 
      <div class="card-body">
        <div id="video-gallery" class="lightGallery video-container">
          <div class="image-tile">
            <h3>PREDEFENSA</h3>
            <a href="videos/vista.mp4">
              <video controls>
                <source src="videos/vista.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video.
              </video>
            </a>
          </div>
          <div class="image-tile">
            <h3>DEFENSA</h3>
            <a href="videos/vista.mp4">
              <video controls>
                <source src="videos/vista.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video.
              </video>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><br>
<H1>FORMULARIO DE REGISTRO</H1>

    <!-- Mostrar el id y el titulo del archivo insta si se encontraron resultados en la consulta -->
    