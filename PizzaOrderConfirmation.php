<!DOCTYPE = html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width , initial-scale=1.0">
        <title>Pizza Order Confirmation</title>
    </head>
    <body>
        <header>
            <h1><strong>Pizza Order is Confirmed!</strong></h1>
        </header>
        <main>
            <p>Your Pizza Order is confirmed and currently in the oven being prepared. Thank you for purchasing with us</p>
            <h2>Your Pizza Order Details</h2>
            <ul>
                <li>Number of Pizzas: <?php echo $_POST['numberofpizzas'];?></li>
                <li>Pizza Size: <?php echo $_POST['sizeofpizzas'];?></li>
                <li>Pizza Shape: <?php echo $_POST['shapeofpizzas'];?></li>
                <li>Pizza Toppings: <?php echo $_POST['toppingsforpizzas'];?></li>
                <li>Pizza Sauce: <?php echo $_POST['saucesforpizzas'];?></li>
                <li>Pizza Crust: <?php echo $_POST['pizzacrust'];?></li>
                <li>Pizza Delivery Type: <?php echo $_POST['pizzadeliverytype'];?></li>
                <li>Additional Information: <?php echo $_POST['addtdetails'];?></li>
            </ul>
            <h2>Customer Details</h2>
            <ul>
                <li>Name: <?php echo $_POST['name'];?></li>
                <li>Contact Number: <?php echo $_POST['contactnumber'];?></li>
                <li>Address: <?php echo $_POST['address'];?></li>
                <li>Email: <?php echo $_POST['email'];?></li>
                <li>Mode of Payment: <?php echo $_POST['paytype'];?></li>
            </ul>
        </main>
    </body>
</html>