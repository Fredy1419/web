<?php
 require 'connect.php';
  
 $correo = $_POST['correo'];
 $clave = $_POST['clave'];
 $nombre = $_POST['nombre'];


   
   


$insertar = "INSERT INTO user VALUES ('$id','$correo','$clave','$nombre')";

$query = mysqli_query($conn , $insertar);

if($query){

   echo "<script> alert('Registrado...');
    location.href = 'TRANS_LINEA.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '.html';
    </script>";
}






?>