<?php
include('../function.php');
if(empty($_POST['IDcard'])){
    echo "3";
}else{
$sql="select * from regis where IDcard = ".$_POST['IDcard'];
$IDcard = isset($_POST['IDcard']) ? trim($_POST['IDcard']) : "";
$checkrows = mysqli_query($con,$sql);
$Rows = mysqli_num_rows($checkrows);
if($Rows == 1){
    echo "1";
}else{
    echo "0";
}
}


?>