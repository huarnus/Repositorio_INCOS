 
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

  