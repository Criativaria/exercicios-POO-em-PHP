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
            <p><a href="#">finanças empresariais</a></p>
            <p><a href="../salary/salary-form.php">novo salário</a></p>
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
        <p class="main-title">Compra Empresarial</p>
        <p class="sub-title">Preencha as informações para calcular o valor da compra</p>
    </div>

    <form class="form" action="" method="POST">

        <div class="inputs">
            <div class="group">
                <p>quantia em caixa:</p>
                <input type="number" id="cash" name="cash">
            </div>
            <div class="group">
                <p>quantidade de produtos:</p>
                <input type="number" id="quantity" name="quantity">
            </div>
            <div class="group">
                <p>preço unitário do produto:</p>
                <input type="number" id="productPrice" name="productPrice">
            </div>
        </div>

        <button class="submit" type="submit">Calcular</button>

    </form>



<?php 

    include 'business-class.php';

    if($_SERVER["REQUEST_METHOD"] == "POST" ){
        $cash = $_POST['cash'];
        $quantity = $_POST['quantity'];
        $productPrice = $_POST['productPrice'];
        
        $business = new Business($cash, $quantity, $productPrice );
        
        $result = $business->payment();

        echo "<div class='result'>";
        echo "<p class='sub-title'>Resultado</p>";

        if($result["forma"] == "à vista"){
            echo "<p>Forma de pagamento: À vista</p>";
            echo "<p>Valor total com desconto: R$".$result["valor_total"]. "</p>";
        }else{
            echo "<p>Forma de pagamento: A prazo (3x com 10% de juros)</p>";
            echo "<p>Valor total: R$".$result["valor_total"]. "</p>";
            
            echo "<p>Valor de cada parcela: R$".$result["valor_parcela"]. "</p>";
        }
            echo "</div>";
    }
?>

</body>

</html>