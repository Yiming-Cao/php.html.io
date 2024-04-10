
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>特别菜单</title>
       <style>
           /* 在这里添加CSS样式 */
           .menu-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            flex-direction: column;
            width: 500px;
            margin: auto;
            }
            .menu-title {
                font-weight: bold;
                color: orange;
            }
            .menu-price {
                font-weight: bold;
            }
            .product-details {
                display: flex;
                justify-content: space-between;
            }
       </style>
       <link rel="stylesheet" href="../css/main.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

   </head>
   <body>
        <?php
            include '../includes/header.php';
        
        ?>
       <header>
           <h1 class="menu-title">Menu</h1>
       </header>
       
        <?php
        include("conn.php");
        $stmt = $connection->prepare("SELECT * FROM products");
        $stmt->execute();
        $data = $stmt->fetchAll();

        foreach ($data as $row){
        ?>
            <div class="menu-item">
                <div class="product-details">
                    <div class="naam"><?php echo $row['naam']; ?></div>
                    <div class="menu-price"><?php echo $row['prijs']; ?></div>
                </div>
                <div><?php echo $row['omschijving']; ?></div>
                <a href='product_update.php?id=<?php echo $row['id']; ?>'>Update</a>
                <a href='product_delete.php?id=<?php echo $row['id']; ?>'>Delete</a>
            </div>
        <?php
        }
        ?>
   </body>
   </html>
   