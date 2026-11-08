           </select>
           <br>
        nombre: <input type="text" name="nombre" value="<?=$dato['nombre']?>"><br>
        <!-- carnet: <input type="text" name="carnet" value="<?=$dato['carnet']?>" onchange="autocompletarUsuarioContraseña()"><br> -->
        usuario: <input type="text" name="usuario" value="<?=$dato['usuario']?>"><br>
        contraseña: <input type="text" name="contraseña" value="<?=$dato['contraseña']?>"><br>
    <button type="submit">MODIFICAR</button>
    </form>

    <!-- para completar el usuario y contraseña con carnet -->
<script>
    function autocompletarUsuarioContraseña() {
        var carnet = document.getElementById("carnet").value;
        var usuario = document.getElementById("usuario");
        var contraseña = document.getElementById("contraseña");

        // Asignar el valor del carnet al usuario y contraseña
        usuario.value = carnet;
        contraseña.value = carnet;
    }
</script>

    