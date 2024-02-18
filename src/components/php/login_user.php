<?php
require_once('conn_db.php');

$nome_user = $_POST['name_nuser'];
$senha_user = $_POST['senha_nuser'];
$email_user = $_POST['email_nuser'];
$telefone_user = $_POST['telefone_nuser'];
$escolha_user = $_POST['escolha_user'];


if ($escolha_user == "A") {
    $sql = "SELECT nome_empresa, senha_empresa from empresa_marketplace where nome_empresa = '$nome_user' && senha_empresa = '$senha_user'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) { // caso o login seja sucedido, redirecione
        header ("Location: ../pag_html/php_html/index_empresa.php ");
      } else {
        echo "Ocorreu alguma coisa no caminho!";
      }
} elseif ($escolha_user == "C") {
    $sql = "SELECT nome_cliente, senha_cliente from cliente_marketplace where nome_cliente = '$nome_user' && senha_cliente = '$senha_user'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) { // caso o login seja sucedido, redirecione
        header ("Location: ../pag_html/php_html/index.cliente.php ");
      } else {
        echo "Ocorreu alguma coisa no caminho!";
      }
}
$conn->close();
?>