<?php
$db = new mysqli("localhost", "root", "", "crud");

function getNomes(){
    global $db;
    $sql = "SELECT * FROM nomes";
    $results = $db ->query($sql);
    $nomes = [];
    while($row = $results->fetch_assoc()) {
        $nomes[] = $row;
    }
    return $nomes;
}

function adicionarNome($nome) {
    global $db;
    $sql = "INSERT INTO nomes(nome) VALUES ('$nome')";
    $db ->query($sql);
}

function editarNome($id, $nome){
    global $db;
    $sql = "UPDATE nomes SET nome = '$nome' WHERE  id = $id";
    $db->query($sql);
}

function excluirNome($id){
    global $db;
    $sql = "DELETE FROM nomes where id = $id";
    $db->query($sql);
}

$acao = isset($_GET["acao"]) ? $_GET["acao"] : null;
$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$nome = isset($_GET["nome"]) ? $_GET["nome"] : '';

if($acao === 'adicionar'){
    adicionarNome($nome);
    header('Location: crud.php');
    exit();
} elseif ($acao === 'editar'){
    $id = intval($_GET["id"]);
    $nomeoriginal = ($_GET["nome"]);
    $nome = $_POST["nome"];
    editarNome($id, $nome);
    header('Location: editar.php?id=' . $id . 'nome=' .$nomeoriginal);
    exit();
}  elseif ($acao === 'excluir') {
    excluirNome($id);
    header('Location: crud.php');
    exit();
}

$nomes = getNomes();
?>

<h1>Lista de nomes</h1> 