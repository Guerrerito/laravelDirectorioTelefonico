@if(isset($mensajeGlobal))
	<div style="color: {{{$color}}}"> {{$mensajeGlobal}} </div>
@endif
<center>
<h1>Iniciar Sesion</h1>

<form action="/laravelDirectorioTelefonico/public/usuario/login" method="post">
	<label for="txtUsuario">Usuario:</label><br>
	<input type="text" name="txtUsuario" id="txtUsuario"><br>

	<label for="txtContrasenia">Contraseña:</label><br>
	<input type="password" id="txtContrasenia" name="txtContrasenia"><br><br>

	<input type="submit" value="Entrar">
	<a href="/laravelDirectorioTelefonico/public/usuario/insertar">Registrate !</a>
</form>
</center>



