<?php
$usuariob = 	'localhost';
$senhab = '';
$bancodedados = 'login';
$user = 'root'; 
$con=mysqli_connect($usuariob, $user, $senhab, $bancodedados);
$usuario=$_POST['texto'];
$senha=$_POST['senha'];
$sql = "SELECT usuario, senha FROM `login` WHERE usuario = ('$usuario') and senha = ('$senha');";
$consulta = mysqli_query($con, $sql);
if (mysqli_num_rows($consulta) != 0){
    
}else{
    
}


// echo mysqli_num_rows($consulta);



// if ($con->connect_error){
//     echo('[ERROR]. Tente novamente.');
// }
// else{
//     echo('Funcionou!');
// }

