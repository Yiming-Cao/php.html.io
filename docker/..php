<form class="register_form" name="register" method="POST" action="register.php">
        <h3>Register</h3>
        <div class="row">
            <p>Naam: </p>
            <input type="text" name="naam" /> 
        </div>
        <div class="row">
            <p>Leeftijd: </p>
            <input type="number" name="leeftijd" /> 
        </div>
        <div class="row">
            <p>Algemene voorwaarden: </p>
            <input type="checkbox" name="av" /> 
        </div>
        <div class="row">
            <p>Geslacht: </p>
            <input type="text" name="geslacht" /> 
        </div>
        <div class="row">
            <input type="submit" name="submit" /> 
        </div>
    </form>





    <?php
   include ("../pages/conn.php");
   $stmt = $connection->query("SELECT * FROM products WHERE id = 1");
   $user = $stmt->fetch();

  

   $stmt = $connection->query("SELECT * FROM products");

   while ($row = $stmt->fetch()) {
    echo $row["naam"]."<br/>\n";
    echo $row["prijs"]."<br/>\n";


   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        
    </header>
</body>
</html>

<img src="<?php echo $row["afbeelding"]; ?>" alt="Product Image" class="menu-image">