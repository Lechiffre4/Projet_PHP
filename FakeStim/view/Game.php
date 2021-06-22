<?php
session_start();
?>


<!DOCTYPE HTML>



<?php 

if (!isset($_SESSION['pseudo'])){
    session_destroy();
    header('location:./index.php'); //Redirection vers le site
}
?>

<!DOCTYPE HTML>
<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="./assets/stylesGame.css">
    </head>
    <body>
        <div id="container">
            <h1 class='text'>Name : <?php echo $Game['name'];?></h1>

            <h2 class='text'>description : <?php echo $Game['description'] ?></h2>
           
            <h3 class='text'>category : <?php echo $Game['category']?></h3>
            <h4 class='text'>creator : <?php echo $Game['creator']?></h4>
            <a href="<?php echo $Game['link'];?>" class='button' >Link to the game</a>
            <a href="./shop.php" class='button'>Back to shop</a>
            <?php if($_SESSION['pseudo'] == $Game['creator'])
            { 
                $magouille=$Game['id'];
                echo "<a href='./DeleteGame.php?id=$magouille ' class='button'>DELETE</a>"; 
            }
            ?>

             
            
        </div>
    </body>
</html>