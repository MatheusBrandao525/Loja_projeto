<?php 
    include "conexao.php";

    session_start();

    $Vemail= $_POST['txtemail']; 
    $Vsenha= $_POST['txtsenha'];

   // echo $Vemail.'<br>';
   // echo $Vsenha.'<br>';

    $consulta = $cn->query("select cd_usuario, nm_usuario, ds_email, ds_senha,ds_status from db_usuario where ds_email = '$Vemail' and ds_senha = '$Vsenha'");

    if($consulta->rowCount()==1) {
        //echo 'usuario esta cadastrado!';
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
       
        if($exibeUsuario['ds_status'] == 0) {
            $_SESSION['ID'] = $exibeUsuario['cd_usuario'];
            $_SESSION['Status'] = 0;
            header('location:index.php');  
        }
        else{
            $_SESSION['ID'] = $exibeUsuario['cd_usuario'];
            $_SESSION['Status'] = 1;
            header('location:index.php');   
        }
    }
    else{
        //echo 'usuario não cadastrado.';
        header('location:erro.php'); 
    }
    
?>