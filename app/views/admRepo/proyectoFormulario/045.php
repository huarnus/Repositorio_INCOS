      
        <h5 class="text-primary card-title"><b>Fecha Actual:</b></h5>
        <input class="form-control" type="text" name="fecha_entrega" id="fecha_entrega"  value="<?php echo date('d-m-Y'); ?>" placeholder="Fecha actual" readonly required><br>

        <input hidden class="form-control" placeholder="GESTION" 
       type="number" name="gestion" id="gestion" placeholder="año de egreso (formato: YYYY)" required pattern="\d{4}" title="Ingrese un año válido(formato: YYYY)" maxlength="4" readonly oninput="this.value = this.value.slice(0, 4)"><br>
        <button type="submit"  class="btn btn-success btn-block btn-rounded">REGISTRAR</button>
    </form>

