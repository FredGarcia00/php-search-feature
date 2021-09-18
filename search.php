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
        if(isset($_POST['submit'])) {
            $search = $_POST['search'];
            $query = "SELECT * FROM posts WHERE post_tag LIKE '%$search%' ";
            $result = mysqli_query($conn,$query);
            $count = mysqli_num_rows($result);

            if($count == 0 || $_POST['search'] == "") {
                echo "<h1>No result</h1>";
            }

            else {
            while($row = mysqli_fetch_assoc($result)) {
            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_content = $row['post_content'];
        
            
        ?>
        <h1><?php echo $post_title ?></h1>
        <h3>by: <?php echo $post_author ?></h3>
        <div class="content">
            <?php echo $post_content; ?>
        </div>
        <?php 
        }  
      }
    }
  
    ?>
    </div>
</body>
</html>