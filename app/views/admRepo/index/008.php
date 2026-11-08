
              <form class="user" method="POST" action="login.php">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="usuario" 
                  aria-describedby="emailHelp" placeholder="USUARIO..." value="<?=$recordar_usuario?>">
                </div>

                <div class="form-group">
                <div class="input-group">
                <input type="password" class="form-control form-control-user" name="contraseña" id="contraseña" placeholder="CONTRASEÑA..." value="<?=$recordar_contraseña?>">
                <div class="input-group-append">
                <button type="button" id="mostrar-contraseña" class="btn btn-outline-success" onclick="mostrarContrasena()">
                <i class="fas fa-eye" id="icono-ojo"></i>
      
      
</button>
    </div>
  </div>
</div>

                <!-- <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" name="recordar" value="1" 