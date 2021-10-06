<?php


$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassoword = '';
$dbName ='formulario';

$conexao = new mysqli($dbHost,$dbUserName,$dbPassoword,$dbName);

 // if($conexao->connect_error)
 //        {
 //         die("Connection failed: " . $conn->connect_error);
 //        }
    
 //        echo "funcionoiu";

// $result = mysqli_query($conexao, "SELECT * FROM  funcionarios");

// print_r($result);


 ?>