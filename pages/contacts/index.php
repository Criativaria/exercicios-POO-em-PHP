<?php

include 'GerenciadorDeContatos.php';

$gerenciador = new GerenciadorDeContatos();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $gerenciador->adicionarContato($nome, $email, $telefone);
}

    if(isset($_GET["deletar"])){
        $indice = $_GET["deletar"];
        $gerenciador->deletarContato($indice);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador De Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="navbar">
        <div class="group">
            <p><a href="../../index.html">home</a></p>
        </div>

        <div class="group">
            <p><a href="../geometry/cylinder/cylinder-form.php">cilindro</a></p>
            <p><a href="../geometry/cone/cone-form.php">cone</a></p>
            <p><a href="../geometry/sphere/sphere-form.php">esfera</a></p>
        </div>

        <div class="group">
            <p><a href="../finance/busines/business-form.php">finanças empresariais</a></p>
            <p><a href="../finance/salary/salary-form.php">novo salário</a></p>
        </div>

        <div class="group">
            <p><a href="../tables/books/books-form.php">tabela de livros</a></p>
            <p><a href="../tables/products/products-form.php">tabela de produtos</a></p>
        </div>

        <div class="group">
            <p><a href="#">gerenciamento de contatos</a></p>
        </div>

    </div>

    <div class="title">
        <h1 class="main-title">Gerenciador de Contatos</h1>
    </div>

    <form class="form" method="post">

        <div class="group">
            <label>nome:</label>
            <input type="text" name="nome" required>
        </div>

        <div class="group">
            <label>email:</label>
            <input type="email" name="email" required>
        </div>

        <div class="group">
            <label>telefone:</label>
            <input type="text" name="telefone" required>
        </div>

        <div class="group">
            <button class="submit" type="submit" name="adicionar">adicionar contato</button>
        </div>

    </form>

    <div class="title">
        <h1 class="sub-title">Lista de Contatos</h1>
    </div>
    <ul>
        <?php foreach($gerenciador->obterContatos() as $indice => $contato): ?>
        <li class="result">
            <?php 
                echo "Nome: " . $contato->getNome() . ", Email: " . $contato->getEmail() . ", Telefone: " . $contato->getTelefone(); ?>
            <a href="?deletar=<?php echo $indice; ?>" class="submit">deletar</a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>