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
            <p><a href="../books/books-form.php">tabela de livros</a></p>
            <p><a href="#">tabela de produtos</a></p>
        </div>

        <div class="group">
            <p><a href="../../contacts/index.php">gerenciamento de contatos</a></p>
        </div>

    </div>

    <div class="title">
        <p class="main-title">Tabela de Produtos</p>
        <p class="sub-title">Preencha as informações para verificar a procedência do produto</p>
    </div>

    <form class="form" action="" method="POST">

        <div class="inputs">
            <div class="group">
                <p>preço do produto</p>
                <input type="number" id="price" name="price">
            </div>
            <div class="group">
                <p>Código de origem: </p>
                <input type="number" id="originCode" name="originCode" min="1" max="5">
            </div>
        </div>

        <button class="submit" type="submit">Verificar</button>

    </form>



    <?php 

    include 'products-class.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $price = $_POST['price'];
        $originCode = $_POST['originCode'];
        
        
        $product = new Product($price, $originCode);
        
        $result = $product->getOrigin();

        echo "<div class='result'>";

        echo "<p class='sub-title'>Resultado: </p>";
        echo "<p>Preço do produto: R$ ". number_format($price, 2, ',', '.') ." </p>";
        echo "<p class='sub-title'>Procedencia: ". $result. " </p>";
        echo "</div>";
    }
?>

</body>

</html>