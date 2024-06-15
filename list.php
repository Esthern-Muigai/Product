<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        <li>Product A:sh10/unit</li>
        <li>Product B:sh15/unit</li>
        <li>Product C:sh20/unit</li>
        <li>Product D:sh25/unit</li>
    </ul>
    <form action="list.php" method="post">
        <label for="">Enter Product:</label>
        <input type="text"name="product"required> <br>
        <label for="">Enter Quantity:</label>
        <input type="text"name="quantity"required> <br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>


<?php
    $product= strtolower($_POST['product']);
    $quantity= $_POST['quantity'];
    $price_per_unit=0;

switch ($product) {
    case 'a':
        $price_per_unit=10;
        # code...
        break;

        case 'b':
            $price_per_unit=15;
            # code...
            break;

            case 'c':
                $price_per_unit=20;
                # code...
                break;

                case 'd':
                    $price_per_unit=25;
                    # code...
                    break;
    
    default:
    echo "<p style='color:red;'>Error:Invalid Product Code!!.</p>";
        # code...
        break;
}
$total_cost = $price_per_unit * $quantity;
echo "<p>Total cost for product " . ($product) . "is:sh " .$total_cost ." </p>";




?>