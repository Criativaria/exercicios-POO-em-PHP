<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cilindro</title>
    <link rel="stylesheet" href="../../form-style.css">
</head>

<body>
    <div class="navbar">
        <div class="group">
            <p><a href="../../../index.html">home</a></p>
        </div>

        <div class="group">
            <p><a href="../../geometry/cylinder/cylinder-form.php">cilindro</a></p>
            <p><a href="../../geometry/cone/cone-form.php">cone</a></p>
            <p><a href="../../geometry/sphere/sphere-form.php">esfera</a></p>
        </div>

        <div class="group">
            <p><a href="../../finance/busines/business-form.php">finanças empresariais</a></p>
            <p><a href="../../finance/salary/salary-form.php">novo salário</a></p>
        </div>

        <div class="group">
            <p><a href="#">tabela de livros</a></p>
            <p><a href="../products/products-form.php">tabela de produtos</a></p>
        </div>

        <div class="group">
            <p><a href="../../contacts/index.php">gerenciamento de contatos</a></p>
        </div>

    </div>

    <div class="title">
        <p class="main-title">Tabela de Livros</p>
        <p class="sub-title">Insira o código do livro para saber sua categoria</p>
    </div>

    <form class="form" action="" method="POST">

        <div class="inputs">
            <div class="group">
                <p>código do livro:</p>
                <input type="text" id="bookCode" name="bookCode">
            </div>
        </div>

        <button class="submit" type="submit">Verificar</button>

    </form>



    <?php 

    include 'books-class.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $bookCode = strtoupper(trim($_POST['bookCode']));
        
        $bookCategory = new BookCategory($bookCode);
        
        $category = $bookCategory->getCategory();

        echo "<div class='result'>";
        echo "<p class='sub-title'>Categoria: </p>";
        echo "<p>$category</p>";
        echo "</div>";
    }
?>

</body>

</html>