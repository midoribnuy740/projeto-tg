<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Bebidas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="drinkDiv">
        <?php
        echo "Bebidas";
        ?>
        <div class="itemList">
            <button class="menuItem">
                <div class="itemName">
                    <?php
                    echo "Opção 1";
                    ?>
                </div>
                <img class="menuImg" src="drinks.png" width="100" height="100">
                <div class="itemPrice">
                    <?php
                    echo "(Preço)";
                    ?>
                </div>
            </button>
            <button class="menuItem">
                <div class="itemName">
                    <?php
                    echo "Opção 2";
                    ?>
                </div>
                <img class="menuImg" src="drinks.png" width="100" height="100">
                <div class="itemPrice">
                    <?php
                    echo "(Preço)";
                    ?>
                </div>
            </button>
            <button class="menuItem">
                <div class="itemName">
                    <?php
                    echo "Opção 3";
                    ?>
                </div>
                <img class="menuImg" src="drinks.png" width="100" height="100">
                <div class="itemPrice">
                    <?php
                    echo "(Preço)";
                    ?>
                </div>
            </button>
        </div>
        <?php
            if(isset($_POST['goBack'])){
                header("Location: main-menu.php");
                exit();
            }
        ?>
        <form class="actions" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <button class="return" name="goBack">
                Voltar
            </button>
        </form>
    </div>
</body>

</html>