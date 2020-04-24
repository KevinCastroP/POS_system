<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/categories.controlador.php";
require_once "controladores/customers.controlador.php";
require_once "controladores/users.controlador.php";
require_once "controladores/sales.controlador.php";
require_once "controladores/products.controlador.php";

require_once "modelos/categories.modelo.php";
require_once "modelos/customers.modelo.php";
require_once "modelos/users.modelo.php";
require_once "modelos/sales.modelo.php";
require_once "modelos/products.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
