    </select><br>
    <label for=""> nombre y apellido  </label>
    <input type="text" name="nombreAp" id="nombreAp"><br>
    <label for="">carnet</label>
    <input type="text" name="carnet" id="carnet" onchange="autocompletarUsuarioContraseña()"><br>
    <label for="">usuario</label>
    <input type="text" name="usuario" id="usuario" ><br>
    <label for="">contraseña</label>
    <input type="password" name="contraseña" id="contraseña"><br>

    <input type="submit" value="registrar usuario">
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




    