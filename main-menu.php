<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Menu Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="orderStart">
        <?php
            echo "Escolha um cardápio:";
        ?>
        <br>
        <?php
            if(isset($_POST['drinkMenu'])){
                header("Location: drink-menu.php");
                exit();
            }
            if(isset($_POST['foodMenu'])){
                header("Location: food-menu.php");
                exit();
            }
        ?>
        <form class="menus" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <button class="drink" name="drinkMenu">Bebidas</button>
            <button class="food" name="foodMenu">Alimentos</button>
        </form>
    </div>
</body>
</html>