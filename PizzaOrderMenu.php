<!DOCTYPE html>
<!--HTML document language is English-->
<html lang = "en">
    <!--Add the metadata content for this page-->
    <head>
        <!--Add the Character Encoding-->
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <!--Add Document Title and display the name of the page on the menu tab-->
        <title>Harry's Pizza Home</title>
        <!--Link the CSS sheet to the HTML page-->
        <link rel = "stylesheet" href = "PizzaOrderMenu.css">
        <!--If required can add the page style here or to the CSS sheet-->
        <style>
        </style>
    </head>    
        <body>
            <!--Adding the main header of the page-->
            <header>
                <h1>Harry's Pizza Order Menu</h1>
            </header>
            <!--Adding the main content page details-->
            <main>
                <!--Add the form tag to collect the data from this page and send it for processing to the next page-->
                <form action = "PizzaOrderConfirmation.php" method = "post">
                    <!--Using the 1st fieldset tag to group this section header and its elements together-->
                    <fieldset>
                        <!--Add the section header-->
                        <Legend><em><strong>Build Your Own Pizza</strong></em></Legend>
                        <!--Add 1st field name-->
                        <label for = "numberofpizzas">Number of Pizzas: </label>
                        <!--Display the 1st field type as a number input field-->
                        <input type = "number" id = "numberofpizzas" name = "numberofpizzas" min = "1" max = "100" required>
                        <!--Add the 2nd field name-->
                        <label for = "sizeofpizzas">Pizza Size</label>
                        <!--Display the 2nd field type as a dropdown selection-->
                        <select id = "sizeofpizzas" name = "sizeofpizzas" required>
                            <option value = "small">Small</option>
                            <option value = "medium">Medium</option>
                            <option value = "large">Large</option>
                            <option value = "grand">Grand</option>
                        </select>
                        <br><br>
                        <!--Add the 3rd field name-->
                        <label for = "shapeofpizzas">Shape: </label>
                        <br>
                        <!--Add the 1st sub-option of the 3rd field-->
                        <label for = "round">Round</label>
                        <!--Display the 1st sub-option of the 3rd field as a radio button-->
                        <input type = "radio" id = "round" name = "shapeofpizzas" value = "Round">
                        <!--Add the 2nd sub-option of the 3rd field as a radio button-->
                        <label for = "square">Square</label>
                        <!--Display the 2nd sub-option of the 3rd field as a radio button-->
                        <input type = "radio" id = "square" name = "shapeofpizzas" value = "Square">
                        <!--Add the 3rd sub-option of the 3rd field as a radio button-->
                        <label for = "triangle">Triangle</label>
                        <!--Add the 3rd sub-option of the 3rd field as a radio button-->
                        <input type = "radio" id = "triangle" name = "shapeofpizzas" value = "Triangle">
                        <br><br>
                        <!--Add the 4th field name-->
                        <label for = "toppingsforpizzas">Toppings: </label>
                        <br>
                        <!--Add the 1st sub-option of the 4th field-->
                        <label for = "cheese">Cheese</label>
                        <!--Display the 1st sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "cheese" name = "toppingsforpizzas" value = "Cheese">
                        <!--Add the 2nd sub-option of the 4th field-->
                        <label for = "chicken">Chicken</label>
                        <!--Display the 2nd sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "chicken" name = "toppingsforpizzas" value = "Chicken">
                        <!--Add the 3rd sub-option of the 4th field-->
                        <label for = "ham">Ham</label>
                        <!--Display the 3rd sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "ham" name = "toppingsforpizzas" value = "Ham">
                        <!--Add the 4th sub-option of the 4th field-->
                        <label for = "pepperoni">Pepperoni</label>
                        <!--Display the 4th sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "pepperoni" name = "toppingsforpizzas" value = "Pepperoni">
                        <!--Add the 5th sub-option of the 4th field-->
                        <label for = "beef">Beef</label>
                        <!--Display the 5th sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "beef" name = "toppingsforpizzas" value = "Beef">
                        <!--Add the 6th sub-option of the 4th field-->
                        <label for = "peppers">Peppers</label>
                        <!--Display the 6th sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "peppers" name = "toppingsforpizzas" value = "Peppers">
                        <!--Add the 7th sub-option of the 4th field-->
                        <label for = "olives">Olives</label>
                        <!--Display the 7th sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "olives" name = "toppingsforpizzas" value = "Olives">
                        <!--Add the 8th sub-option of the 4th field-->
                        <label for = "tomato">Tomato</label>
                        <!--Display the 8th sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "tomato" name = "toppingsforpizzas" value = "Tomato">
                        <!--Add the 9th sub-option of the 4th field-->
                        <label for = "onion">Onion</label>
                        <!--Display the 9th sub-option of the 4th field as a radio button-->
                        <input type = "radio" id = "onion" name = "toppingsforpizzas" value = "Onion">
                        <br><br>
                        <!--Add the 5th field name-->
                        <label for = "saucesforpizzas">Sauces: </label>
                        <br>
                        <!--Add the 1st sub-option of the 5th field-->
                        <label for = "tomatosauce">Tomato Sauce</label>
                        <!--Display the 1st sub-option of the 5th field as a radio button-->
                        <input type = "radio" id = "tomatosauce" name = "saucesforpizzas" value = "Tomato Sauce">
                        <!--Add the 2nd sub-option of the 5th field-->
                        <label for = "garlicsauce">Garlic Sauce</label>
                        <!--Display the 2nd sub-option of the 5th field as a radio button-->
                        <input type = "radio" id = "garlicsauce" name = "saucesforpizzas" value = "Garlic Sauce">
                        <!--Add the 3rd sub-option of the 5th field-->
                        <label for = "mustardsauce">Mustard Sauce</label>
                        <!--Display the 3rd sub-option of the 5th field as a radio button-->
                        <input type = "radio" id = "mustardsauce" name = "saucesforpizzas" value = "Mustard Sauce">
                        <!--Add the 4th sub-option of the 5th field-->
                        <label for = "mayonnaisesauce">Mayonnaise Sauce</label>
                        <!--Display the 4th sub-option of the 5th field as a radio button-->
                        <input type = "radio" id = "mayonnaisesauce" name = "saucesforpizzas" value = "Mayonnaise Sauce">
                        <br><br>
                        <!--Add the 6th field name-->
                        <label for = "pizzacrust">Crust Type: </label>
                        <br>
                        <!--Add the 1st sub-option of the 6th field-->
                        <label for = "thin">Thin</label>
                        <!--Display the 1st sub-option of the 6th field as a radio button-->
                        <input type = "radio" id = "thin" name = "pizzacrust" value = "Thin">
                        <!--Add the 2nd sub-option of the 6th field-->
                        <label for = "thick">Thick</label>
                        <!--Display the 2nd sub-option of the 6th field as a radio button-->
                        <input type = "radio" id = "thick" name = "pizzacrust" value = "Thick">
                        <!--Add the 3rd sub-option of the 6th field-->
                        <label for = "pan">Pan</label>
                        <!--Display the 3rd sub-option of the 6th field as a radio button-->
                        <input type = "radio" id = "pan" name = "pizzacrust" value = "Pan">
                        <!--Add the 4th sub-option of the 6th field-->
                        <label for = "doublecrust">Double Crust</label>
                        <!--Display the 4th sub-option of the 6th field as a radio button-->
                        <input type = "radio" id = "doublecrust" name = "pizzacrust" value = "Double Crust">
                        <br><br>
                        <!--Add the 7th field name-->
                        <label for = "pizzadeliverytype">Delivery Type: </label>
                        <br>
                        <!--Add the 1st sub-option of the 7th field-->
                        <label for = "eatin">Eat-In</label>
                        <!--Display the 1st sub-option of the 7th field as a checkbox-->
                        <input type = "checkbox" id = "eatin" name = "pizzadeliverytype" value = "Eat-In">
                        <!--Add the 2nd sub-option of the 7th field-->
                        <label for = "takeout">Take-Out</label>
                        <!--Display the 2nd sub-option of the 7th field as a checkbox-->
                        <input type = "checkbox" id = "takeout" name = "pizzadeliverytype" value = "Take-Out">
                        <!--Add the 3rd sub-option of the 7th field-->
                        <label for = "homedelivery">Home-Delivery</label>
                        <!--Display the 3rd sub-option of the 7th field as a checkbox-->
                        <input type = "checkbox" id = "homedelivery" name = "pizzadeliverytype" value = "Home-Delivery">
                        <br><br>
                        <!--Add the 8th field name-->
                        <label for = "addtdetails">Additional Details </label>
                        <!--Display the 8th field as an open textbox-->
                        <input type = "text" id = "addtdetails" name = "addtdetails" value = "Additional Details">
                    </fieldset>
                    <br><br><br>
                    <!--Using the 2nd fieldset tag to group this section header and its elements together-->
                    <fieldset>
                        <!--Add the section header-->
                        <Legend><em><strong>Contact Information</strong></em></Legend>
                        <!--Add the 1st field name-->
                        <label for = "name">Name</label>
                        <!--Display the 1st field as an open textbox-->
                        <input type = "text" id = "name" name = "name" value = "Name" required>
                        <!--Add the 2nd field name-->
                        <label for = "contactnumber">Contact Number</label>
                        <!--Display the 2nd field as an open textbox-->
                        <input type = "text" id = "contactnumber" name = "contactnumber" value = "Contact Number" required>
                        <!--Add the 3rd field name-->
                        <label for = "address">Address</label>
                        <!--Display the 3rd field as an open textbox-->
                        <input type = "text" id = "address" name = "address" value = "Address" required>
                        <!--Add the 4th field name-->
                        <label for = "email">Email</label>
                        <!--Display the 4th field as an open textbox-->
                        <input type = "text" id = "email" name = "email" value = "Email">
                    </fieldset>
                    <br><br><br>
                    <!--Using the 1st fieldset tag to group this section header and its elements together-->
                    <fieldset>
                        <!--Add the section header-->
                        <Legend><em><strong>Payment Details</strong></em></Legend>
                        <!--Add the Payment label-->
                        <label for = "paytype">Payment Type </label>
                        <!--Display the field as a dropdown selection-->
                        <select id = "paytype" name = "paytype" value = "Payment Type">
                            <option value = "creditcard">Credit Card</option>
                            <option value = "debitcard">Debit Card</option>
                            <option value = "cash">Cash</option>
                            <option value = "foodstamp">Food Stamp</option>
                        </select>
                    </fieldset>
                    <br><br><br>
                    <!--Add the Submit button-->
                    <button type = "submit"><strong>Submit Order</strong></button>
                    <!--Add the Cancel button-->
                    <button type = "cancel"><strong>Cancel Order</strong></button>
                    <br><br>
                    <!--Add a thank you message to the bottom of the page-->
                    <p>We are open daily from 11AM to 11PM daily. Please do visit us for a complete Pizza experience</p>
                    <br>
                    <!--Adding an image to the Pizza Order page-->
                    <p><img src = "HarryPizza1.jpg" alt = "Harrys Pizza"></p>
                    <br><br>
                    <!--Add the footer to the page in italic-->
                    <footer><em>
                        @TM Harry's Pizza Canada 2023
                    </em></footer>
                    <br><br>
                </form>
            </main>
        </body>
</html>