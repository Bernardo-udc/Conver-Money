<?php
 
if (isset($_POST['envio'])) {
	if ($_POST['dato'] > 0  && $_POST['dato'] <=7) {
 
		echo '<table align="center"><tr><td><b>';
 
		switch ($_POST['dato']) {
			case 1:
				echo CopDll($_POST['valor']);
				break;
			case 2:
				echo CopEU($_POST['valor']);
				break;
			case 3:
				echo DllCop($_POST['valor']);
				break;
			case 4:
				echo DllEU($_POST['valor']);
				break;
			case 5:
				echo EuDll($_POST['valor']);
				break;
			case 6:
				echo EuCop($_POST['valor']);
				break;
			case 7:
				die('Salio del conversor de unidades');
		}
 
		echo '</b></td></tr></table>';
 
	} else {
		echo 'el valor tiene que ser positivo y menor que 7';
	}
}
 
function CopDll($numero) {
	return $numero*0.00025;
}
function CopEU($numero) {
	return $numero*0.00022;
}
function DllCop($numero) {
	return $numero*3974.32;
}
function DllEU($numero) {
	return $numero*0.89;
}
function EuDll($numero) {
	return $numero*1.12;
}
function EuCop ($numero) {
	return $numero*22330.61;
}
?>