<?php
require('RTF.php');
$f = new ToRtf();
$f->fichero = 'plantilla_new.rtf';
$f->fsalida = 'nuevo.rtf';
$f->dirsalida = '';
$f->retorno = 'fichero';
$f->prefijo = 'pre_';
$f->valores = array(
	'#*NOMBRE*#' => "Miguel Hernández Ramos",
	'#*DIRECCION*#' => "Blvd Valsequillo",
	'#*CIUDAD*#' => "Puebla",
	'#*EDAD*#' => "26 años",
	'#*FECHA*#' => date('d/m/Y')
	);
$f->rtf();
?>
