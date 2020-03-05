<html>

<head>
	<title>Nuevo Presupuesto</title>
</head>

<body>
	<p>Has recibido un nuevo e-mail, estos son los datos:</p>
	<ul>
		<li>
			<strong>Nombre: </strong>
			{{ $nombre }}
		</li>
		<li>
			<strong>Correo: </strong>
			{{ $correo }}
		</li>
		<li>
			<strong>Teléfono: </strong>
			{{ $telefono }}
		</li>
		<li>
			<strong>Nombre Proyecto: </strong>
			{{ $nombreProyecto }}
		</li>
		<li>
			<strong>Ubicación del Proyecto: </strong>
			{{ $ubicacionProyecto }}
		</li>
		<li>
			<strong>Tipo de estructura: </strong>
			{{ $tipoEstructura }}
		</li>
		<li>
			<strong>Otra: </strong>
			{{ $otra }}
		</li>
		<li>
			<strong>Servicio Requerido: </strong>
			{{ $servicioRequerido }}
		</li>
		<li>
			<strong>m2 del proyecto: </strong>
			{{ $m2Proyecto }}
		</li>
		<li>
			<strong>Mensaje: </strong>
			{{ $mensaje }}
		</li>
		<li>
			<strong>Adjuntar: </strong>
			{{ $adjuntar }}
		</li>
		


	</ul>
</body>

</html>