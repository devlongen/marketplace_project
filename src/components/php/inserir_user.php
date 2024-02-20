<?php
include_once('conn_db.php');

$nome_user = $_POST['name_nuser'];
$senha_user = $_POST['senha_nuser'];
$email_user = $_POST['email_nuser'];
$telefone_user = $_POST['telefone_nuser'];
$escolha_user = $_POST['escolha_user'];
if ($escolha_user == "A") {
       $sql = "INSERT INTO empresa_marketplace (nome_empresa, senha_empresa, telefone_empresa, email_empresa) VALUES ('$nome_user', '$senha_user', '$telefone_user', '$email_user')";
       if (mysqli_query($conn, $sql)) {
           header("Location: ../pag_html/index_empresa.php");
           exit();
       } else {
           echo "Erro ao inserir dados na tabela empresa_marketplace: " . mysqli_error($conn);
       }
   } elseif ($escolha_user == "C") {
       $sql = "INSERT INTO cliente_marketplace (nome_cliente, senha_cliente, telefone_cliente, email_cliente) VALUES ('$nome_user', '$senha_user', '$telefone_user', '$email_user')";
       if (mysqli_query($conn, $sql)) {
           header("Location: ../pag_html/index_cliente.php");
           exit();
       } else {
           echo "Erro ao inserir dados na tabela cliente_marketplace: " . mysqli_error($conn);
       }
   } else {
       echo "Opção de escolha inválida";
   }
$conn->close();

?>
