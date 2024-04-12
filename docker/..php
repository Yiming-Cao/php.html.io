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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>特别菜单</title>
    <!-- Existing CSS and links -->
</head>
<body>
    <?php
        include '../includes/header.php';
        session_start(); // Start the session

        // Check if the user is logged in
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            $loggedIn = true;
        } else {
            $loggedIn = false;
        }
    ?>
    <header>
        <h6 class="menu-title">Menu</h6>
    </header>
    <div class="menu-container">
        <?php
        include("conn.php");
        $stmt = $connection->prepare("SELECT * FROM products");
        $stmt->execute();
        $data = $stmt->fetchAll();

        foreach ($data as $row){
        ?>
            <div class="menu-item">
                <div class="product-details">
                    <div class="id"><?php echo $row['id']; ?></div>
                    <div class="naam"><?php echo $row['naam']; ?></div>
                    <div class="menu-price"><?php echo $row['prijs']; ?></div>
                </div>
                <div><?php echo $row['omschijving']; ?></div>
                <?php if($loggedIn): ?>
                    <a href='product_update.php?id=<?php echo $row['id']; ?>'>Update</a>
                    <a href='product_delete.php?id=<?php echo $row['id']; ?>'>Delete</a>
                <?php endif; ?>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>
