<?php include("inc/db.php"); ?>
<style>
    <?php include("styles/main.css"); ?>
</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        if($conn) {
            $query = "SELECT * FROM posts ";
            $result = mysqli_query($conn,$query);
            while($row = mysqli_fetch_assoc($result)) {
                $post_tag=$row['post_tag'];
                
                ?>
                <h2>These are the categories to put in the search bar: </h2>
                <h3><?php echo $post_tag; ?></h3>
        <form action="search.php" method="post">
            <input type="text" name="search"> 
            <input type="submit" name="submit" >
           
          
        </form>
        <?php
            }
        }
        ?>
    
    </div>
</body>
</html>