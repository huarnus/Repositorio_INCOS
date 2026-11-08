 class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Recordar Contraseña
                    </label>
                  </div>
                </div> -->

                <div class="mt-3">
                  <button type="submit" class="btn btn-outline-primary btn-user btn-block">INGRESAR</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  
  <script>
function mostrarContrasena() {
  var campoContrasena = document.getElementById("contraseña");
  var botonMostrar = document.getElementById("mostrar-contraseña");
  var iconoOjo = document.getElementById("icono-ojo");

  if (campoContrasena.type === "password") {
    campoContrasena.type = "text";
    iconoOjo.classList.remove("fa-eye");
    iconoOjo.classList.add("fa-eye-slash");
  } else {
    campoContrasena.type = "password";
    iconoOjo.classList.remove("fa-eye-slash");
    iconoOjo.classList.add("fa-eye");
  }
}
</script>

</body>
</html>
