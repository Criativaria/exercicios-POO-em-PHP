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
            <p><a href="../cylinder/cylinder-form.php">cilindro</a></p>
            <p><a href="../cone/cone-form.php">cone</a></p>
            <p><a href="#">esfera</a></p>
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
        <p class="main-title">Esfera</p>
        <p class="sub-title">preencha o raio da esfera e calcule seu volume</p>
    </div>

    <form class="form" action="" method="POST">

        <div class="inputs">
            <div class="group">
                <p>raio:</p>
                <input type="number" id="radius" name="radius">
            </div>
        </div>

        <button class="submit" type="submit">Calcular</button>

    </form>



    <?php 

    include 'sphere-class.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $radius = $_POST['radius'];
        
        $sphere = new Sphere($radius);
        
        $volume = $sphere->calculateVolume();
        echo "<div class='result'>";
        echo "<p class='sub-title'>Resultado</p>";
        echo "<p>O volume da esfera é: " . $volume . " unidades cúbicas </p>";
        echo "</div>";
    }
?>

</body>

</html>