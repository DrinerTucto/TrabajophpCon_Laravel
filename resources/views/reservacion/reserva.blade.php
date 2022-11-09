
formulario
<form action="{{ url('/reservacion') }}" method="POST" enctype="multipart/form-data">

@csrf
<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>


<label for="Apellidos"> Apellidos</label>
<input type="text" name="Apellidos"val id="Apellido">
<br>

<label for="Dni"> Dni</label>
<input type="text" name="Dni" id="Dni">
<br>
<label for="Numero"> Numero</label>
<input type="text" name="Numero" id="Numero">
<br>
<label for="Correo"> Correo</label>
<input type="text" name="Correo" id="Correo">
<br>
<label for="Foto"> Foto</label>
<input type="file" name= "Foto" id= "Foto">
<br>
<input type="submit" onclick="return confirm('Verifica los datos xfavor xq una ves enviado no podra modificarlos ni eleminarlos...!!solo el programador podra hacerlo atm:Driner!!')" value="enviar">
  
</form>