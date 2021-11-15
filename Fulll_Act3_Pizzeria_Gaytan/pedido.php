<?php 

include("con_db.php");

if (isset($_POST['Pedir'])) {
    if (strlen($_POST['nombre']) >= 1 
	&& strlen($_POST['ipedido']) >= 1
	&& strlen($_POST['direccion']) >= 1
	&& strlen($_POST['pago']) >= 1 
	&& strlen($_POST['propina']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $ipedido = trim($_POST['ipedido']);
	    $direccion = trim($_POST['direccion']);
	    $pago = trim($_POST['pago']);
		$propina = trim($_POST['propina']);
	    $consulta = "INSERT INTO pedido(NombreCliente, IngresaPedido, Direccion, MetodoPago, Propina)
		 VALUES '$nombre','$ipedido','$direccion','$pago','$propina')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Tu pedido llegara pronto!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>