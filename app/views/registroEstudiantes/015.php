                            
        </select>
    </fieldset>


</div><br><br><br>

                    <div class="col-lg-12">
                      <fieldset>
                        <input class="form-control" type="number" name="celular" id="celular"  placeholder="Numero De Celular" required maxlength="8" oninput="this.value = this.value.slice(0, 8)">
                      </fieldset>
                    </div>
                    
                    <div class="col-lg-12">
                      <fieldset>
                        <input class="form-control" type="number" name="año_egreso" id="año_egreso" placeholder="año de egreso (formato: YYYY)" required pattern="\d{4}" title="Ingrese un año válido(formato: YYYY)" maxlength="4" oninput="this.value = this.value.slice(0, 4)">
                      </fieldset>
                    </div>

                    
                    <div class="col-lg-12">
                      <fieldset>
                        <input class="form-control" type="text" name="correo" id="correo" pattern="[^ @]*@[^ @]*"  placeholder="Ingrese su Correo Institucional" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                      <h6 class="text-dark card-title"><b>Usuario asignado por la inicial de los Apellidos y  Nombres:</b></h6> 
                        <input  type="text" name="usuario" id="usuario" placeholder="Tendra su usuario segun sus Apellidos y Nombres" readonly>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                      <h6 class="text-dark card-title"><b>Contraseña asignado por su Cedula de Identidad:</b></h6> 
                        <input  type="number" name="contraseña" id="contraseña"  placeholder="Tendra una Contraseña segun su Carnet" readonly >
                      </fieldset>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LdgBhMpAAAAAEeZ2WiVxIBhI8k_TvGuTllUKRl5"></div>

                    <p>Por favor, antes de registrarse, tenga en cuenta el nombre de usuario y la contraseña. Con esta información, podrá acceder al registro de su proyecto. Gracias.
                    </p><br><br><br><br><br>

                   
                    <div class="col-lg-12">
                      <fieldset>                        
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane"></i>Registrarse</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  </body>

     <!-- <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> -->
  