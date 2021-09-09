<?php

/* requiere una vez el controlador plantilla que esta en la carpeta controladores */
require_once "controladores/plantilla.controlador.php";

/* se crea un objeto llamado plantilla el cual almacenara todos los metodos que tenga la clase ControladorPlantilla */
$plantilla = new ControladorPlantilla();

/* se llama el metodo ctrPlantilla el cual traera la vista  */
$plantilla -> ctrPlantilla();