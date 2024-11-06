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
            <p><a href="../busines/business-form.php">finanças empresariais</a></p>
            <p><a href="#">novo salário</a></p>
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
        <p class="main-title">Reajuste Salarial</p>
        <p class="sub-title">Preencha o salário atual para calcular o novo salário</p>
    </div>

    <form class="form" action="" method="POST">

        <div class="inputs">
            <div class="group">
                <p>Salário Atual: </p>
                <input type="number" id="currentSalary" name="currentSalary">
            </div>
        </div>

        <button class="submit" type="submit">Calcular</button>
    </form>



    <?php 

    include 'salary-class.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $currentSalary = $_POST['currentSalary'];
        
        $salary = new Salary($currentSalary);
        
        $newSalary = $salary->calculateNewSalary();

        echo "<div class='result'>";
        echo "<p class='sub-title'>Resultado</p>";
        echo "<p>novo salário: R$". number_format($newSalary, 2, ',', '.')  . "</p>";
        echo "</div>";
    }
?>

</body>

</html>