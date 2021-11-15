<!DOCTYPE html>
<html>
<head>
	<title>Alta de pedido</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de pedido</h1>
    	<input type="text" name="nombre" placeholder="Nombre cliente">
    	<input type="text" name="ipedido" placeholder="Ingresa pedido">
		<input type="text" name="direccion" placeholder="Ingresa direccion">
    	<input type="text" name="pago" placeholder="Ingresa metodo pago">
		<input type="text" name="propina" placeholder="Ingresa propina">
    	<input type="submit" name="Pedir">
    </form>
        <?php 
        include("pedido.php");
        ?>
</body>
</html>