@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Test Laravel. Favor de registrarse para iniciar</div>

                <div class="panel-body">
                    ISC JOSE RAMON CRUZ SANCHEZ. <br>9212235731 jrjesser2@gmail.com

                    <style>
	.tabla {
		width:80%;
	}
</style>
<table class="tabla">
	
	<thead>
	<tr>
		<th><br>Funciones<br></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>		<td>-Formulario de registro con los datos básicos del usuario (Nombre, Apellido, Edad, Correo, Teléfono), validado para no permitir un registro sin Nombre ni Correo.</td>
		<td><br></td>
    <tr>
        <td>
		<td>-Perfil de Usuario para poder registrar sus actividades (+bajas)</td>
    </tr>
    <tr>
		<td><br></td>
		<td>-Inicio de sesión que redirige al formulario de edición de perfil únicamente.</td>
	</tr>
    	<td><br></td>
		<td>-Migraciones de la Base de Datos.<br><br></td></td>
	</tr>
	</tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
