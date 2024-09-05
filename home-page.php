<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcome">
        <?php
            echo "Bem-vindo(a) ao <br> estabelecimento!";
        ?>
        <br>
        <?php
            if(isset($_POST['makeOrder'])){
                header("Location: main-menu.php");
                exit();
            }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <button class="startOrder" name="makeOrder">Fazer Pedido</button>
        </form>
    </div>
</body>
</html>