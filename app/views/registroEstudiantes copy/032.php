                            
                        </select>
                        <!-- <input type="text" name="carrera_id" id="carrera_id" placeholder="ingrese la carrera" required=""> -->
                      </fieldset>
                    </div><br><br><br>
                    <div class="col-lg-12">
                      <fieldset>
                        <input class="form-control" type="text" name="celular" id="celular"  placeholder="numero de celualr" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input class="form-control" type="text" name="año_egreso" id="año_egreso" placeholder="año de egreso" required pattern="\d{4}" title="Ingrese un año válido (formato: YYYY)">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input class="form-control" type="text" name="correo" id="correo" pattern="[^ @]*@[^ @]*"  placeholder="ingrese su correo electronico" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <!-- <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required=""> -->
                        <input class="form-control" type="text" name="fecha" id="fecha" value="<?php echo date('d-m-Y'); ?>" placeholder="Fecha actual" readonly required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane"></i> Send Message</button>
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



  
  