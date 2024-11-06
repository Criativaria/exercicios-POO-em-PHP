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
            <p><a href="#">cilindro</a></p>
            <p><a href="../cone/cone-form.php">cone</a></p>
            <p><a href="../sphere/sphere-form.php">esfera</a></p>
        </div>

        <div class="group">
            <p><a href="../../finance/busines/business-form.php">finanças empresariais</a></p>
            <p><a href="../../finance/salary/salary-form.php">novo salário</a></p>
        </div>

        <div class="group">
            <p><a href="../../tables/books/books-form.php">tabela de livros</a></p>
            <p><a href="../../tables/products/products-form.php">tabela de produtos</a></p>
        </div>

        <div class="group">
            <p><a href="../../contacts/index.php">gerenciamento de contatos</a></p>
        </div>

    </div>

    <div class="title">
        <p class="main-title">Cilindro</p>
        <p class="sub-title">preencha as medidas do cilindro e calcule seu volume</p>
    </div>

    <form class="form" action="" method="POST">

        <div class="inputs">
            <div class="group">
                <p>raio:</p>
                <input type="number" id="radius" name="radius">
            </div>
            <div class="group">
                <p>altura:</p>
                <input type="number" id="height" name="height">
            </div>
        </div>

        <button class="submit"  type="submit">Calcular</button>

    </form>



<?php 

    include 'cylinder-class.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $radius = $_POST['radius'];
        $height = $_POST['height']; 
        
        $cylinder = new Cylinder($radius, $height);
        
        $volume = $cylinder->calculateVolume();
        echo "<div class='result'>";
        echo "<p class='sub-title'>Resultado</p>";
        echo "<p>O volume do cilindro é: " . $volume . " unidades cúbicas </p>";
        echo "</div>";
    }
?>

</body>

</html>