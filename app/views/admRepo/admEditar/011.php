           </select>
           <br>
    <h5 class="text-danger card-title"><b>NOMBRE:</b></h5> 
    <input type="text" name="nombre"  class="form-control" value="<?=$adm['nombreCompleto']?>"><br>
    <h5 class="text-danger card-title"><b>CARNET:</b></h5> 
    <input type="text" name="carnet"  class="form-control" value="<?=$adm['carnet']?>"><br>
    <!-- <h5 class="text-danger card-title"><b>Cantidad:</b></h5> 
    <input type="text" name="cantidad"  class="form-control" value="<?=$producto['cantidad']?>"><br> -->
    <h5 class="text-danger card-title"><b>CORREO:</b></h5> 
    <div class="input-group mb-3">
    <input type="text" name="correo" class="form-control" value="<?=$adm['correo']?>"><br>
    
    </div>
    <!-- <br>
    <h5 class="text-danger card-title"><b>Seleccione foto de producto: </b></h5> 
    
  <input type="file" name="foto" class="form-control" ><br>
<br> -->
    <button type = "sutmit" class="btn btn-outline-warning btn-block btn-rounded">MODIFICAR</button>
</form>
