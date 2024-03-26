<?php
    session_start();
   include ("../pages/conn.php");
   $stmt = $connection->query("SELECT * FROM products WHERE id = 1");
   $user = $stmt->fetch();
   
   ?>
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
           }
           .menu-title {
               font-weight: bold;
               color: orange;
           }
           .menu-price {
               font-weight: bold;
           }
       </style>
   </head>
   <body>
       <header>
           <h1 class="menu-title">Menu</h1>
       </header>
       <section>
           <?php 
           $stmt->execute();
           while ($row = $stmt->fetch()): ?>
           <div class="menu-item">
               <span><?php  echo $row["naam"]."<br/>\n"; ?></span>
               <span class="menu-price"><?php echo $row["prijs"]; ?></span>
               

           </div>
           <?php endwhile; ?>
       </section>
   </body>
   </html>
   