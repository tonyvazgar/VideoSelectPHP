<?php 
require_once "../Model/DB.php";
require_once "../Model/Sneaker.php";

$ModelSneaker = new Sneaker();
$Db = new DB();
$id_modelo=$_POST['id_modelo'];

$modelos = $ModelSneaker->getColorway($id_modelo);

$cadena="<label>ColorWay</label> 
			<select id='colorWay' name='colorWay'  class='form-control'>";
            $cadena.='<option value='.'>Selecciona un colorway</option>';

foreach($modelos as $cw){
    $cadena.='<option value='.$cw['id_sneaker'].'>'.$cw['nombre'].'</option>';

}
	echo  $cadena."</select>";
	

?>