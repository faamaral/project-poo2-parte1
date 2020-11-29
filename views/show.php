<?php
    require_once("../models/connection.php");
    require_once("../models/model.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>All products registered</title>
</head>
<body>
    <h1>Products</h1>
    <table>
        <tr>
            <td>Code</td>
            <td>Name</td>
            <td>Manufacturer</td>
            <td>Amount</td>
            <td>Price</td>
            <td colspan="2">Actions</td>
        </tr>
        <?php
            $prod = Product::showALL($pdo);
            foreach($prod as $p)
            {
                echo "<tr>";
                echo "<td>".$p['codigo']."</td>";
                echo "<td>".$p['name']."</td>";
                echo "<td>".$p['manufacturer']."</td>";
                echo "<td>".$p['amount']."</td>";
                echo "<td>".$p['price']."</td>";
                echo "<td>Edit</td>";
                echo "<td>Delete</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>