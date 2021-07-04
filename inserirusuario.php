<?php 
    include 'conexao.php';


    $nome = $_POST['txtnome'];
    $sobrenome = $_POST['txtsobrenome'];
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
    $end = $_POST['txtendereco'];
    $cidade = $_POST['txtcidade'];
    $cep = $_POST['txtcep'];

    //Textando variaveis
   // echo $nome .'<br>';
   // echo $sobrenome .'<br>';
   // echo $email.'<br>';
   // echo $senha.'<br>';
   // echo $end.'<br>';
   // echo $cidade.'<br>';
   // echo $cep.'<br>';

   $consulta = $cn->query("select ds_email from db_usuario where ds_email='$email'");
   $exibe = $consulta ->fetch(PDO::FETCH_ASSOC);

   if($consulta->rowCount()==1) {
        // echo 'email ja cadastrado!';
        header('location:erro1.php');
   }
   else{
        // echo 'usuario pode ser cadastrado';
        $incluir = $cn->query("
        insert into db_usuario(nm_usuario, ds_email, ds_senha, ds_status, ds_endereco, ds_cidade, no_cep)
        values('$nome','$email','$senha','0', '$end','$cidade','$cep')");
        header('location:ok.php');
       
   }
?>