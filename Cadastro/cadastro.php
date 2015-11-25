<?php
require_once 'dbconfig.php';
/*
 * verifica se o botão cadastrar foi pressionado1
 */
if(isset($_POST['btn'])){
    

 /*
  * conexão com o banco de dados
  */
try {//criação do objeto $conn - conexão 
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // echo "Conectado ao banco $dbname at $host com sucesso.";
} catch (PDOException $pe) {
    die("Não foi possivel se conectar ao banco $dbname :" . $pe->getMessage());
}
/*
 * final conexão com o banco de dados
 */
echo "<h1>$_POST[email]</h1>";
//fecha conexão com o banco
$conn = null;
}else{
    //botão cadastrar não foi pressionado
    //redireciona para a página inicial
    header('Location: index.php');
}