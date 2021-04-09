<?php 
require_once "../Model/DB.php";
require_once "../Model/Sneaker.php";

$ModelSneaker = new Sneaker();
$Db = new DB();
$id_sneaker=$_POST['id_sneaker'];

$modelos = $ModelSneaker->getPriceColorWay($id_sneaker);

$cadena="<label>Price</label>";
foreach($modelos as $cw){
    $cadena.="<input type='text' value='".$cw['precio']."'  class='form-control'></input>";
}
echo $cadena;

?>