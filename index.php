<?php include './controller/RouterCtrl.php';
?>
<?php $router = new RouterCtrl();
?>
<?php include 'view/header.php';
?>
<?php
if (isset($_GET['pagina'])){
	//q	ui inserire logica di presentazione, esempio con il parametro GET pagina
	    include $router->cambia($_GET['pagina']);
}
else {
    //qui inserire logica di presentazione, esempio senza parametri
        include $router->route;
}
?>
<?php include 'view/footer.php';
?>