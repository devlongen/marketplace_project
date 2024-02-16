<?php
include_once('conn_db.php');

$nome_user = $_POST['name_nuser'];
$senha_user = $_POST['senha_nuser'];
$email_user = $_POST['email_nuser'];
$telefone_user = $_POST['telefone_nuser'];
$escolha_user = $_POST['escolha_user'];
   
if ($escolha_user == "A") {
       $sql = mysqli_query($conn, "INSERT INTO empresa_marketplace (nome_empresa,senha_empresa,telefone_empresa,email_empresa) values ('$nome_user','$senha_user','$telefone_user','$email_user')");
       header("Location: ../pag_html/index_empresa.php");
       exit();
} elseif ($escolha_user == "C") {
       $sql = mysqli_query($conn, "INSERT INTO cliente_marketplace (nome_cliente,senha_cliente,telefone_cliente,email_cliente) values ('$nome_user','$senha_user','$telefone_user','$email_user')");
       header("Location: ../pag_html/index_cliente.php");
       exit();
} else {
       echo "Ocorreu algum erro de inserção";
   }
$conn->close();

?>
