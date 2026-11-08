 
</div>

</div>
</div>
</div>
</div>
</div>
</li>
<!--abajo trabajo dirigido -->
                    
                  </ul>
                  
                </div>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
   <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Descripción Completa del Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se mostrará la descripción completa del proyecto -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
// modal para la descripcion
    document.addEventListener("DOMContentLoaded", function() {
        var verMasLinks = document.querySelectorAll('.ver-mas');
        var modalBody = document.querySelector('.modal-body');

        verMasLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var descripcion = event.target.getAttribute('data-descripcion');
                modalBody.textContent = descripcion;
            });
        });
    });
</script>


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

  