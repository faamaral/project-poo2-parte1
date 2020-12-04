<?php
    require_once("../models/connection.php");
    //require_once("../models/model.php");
    require_once("../controllers/productControl.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert new product</title>
</head>
<body>
    
    <h1>Insert a new product</h1>

    <form action="register_new.php" method="post">
        <label for="name_prod">Name</label><br>
        <input type="text" name="name_prod" id="name_prod" required="true"><br>
        <label for="manufacturer_prod">Manufacturer</label><br>
        <input type="text" name="manufacturer_prod" id="manufacturer_prod" required="true"><br>
        <label for="amount_prod">Amount</label><br>
        <input type="text" name="amount_prod" id="amount_prod" required="true"><br>
        <label for="price_prod">Price</label><br>
        <input type="text" name="price_prod" id="price_prod" required="true"><br>

        <input type="submit" value="Insert" name="submit">
    </form>

    <?php
        if (isset($_POST['submit']))
        {
            $result = setData($pdo, $_POST['name_prod'], $_POST['manufacturer_prod'], $_POST['amount_prod'], $_POST['price_prod']);
            if ($result == 1)
            {
                echo 'Product sucessfully inserted';
            }
            else
            {
                echo 'Fail to insert';
            }
        }
        
    ?>
</body>
</html>