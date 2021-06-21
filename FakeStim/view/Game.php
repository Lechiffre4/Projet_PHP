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
            <h1>Name : <?php echo $Game['name'];?></h1>

            <h3>description : <?php echo $Game['description'] ?></h3>
           
            <p>category : <?php echo $Game['category']?></p>
            <p>creator : <?php echo $Game['creator']?></p>
            <a href="<?php echo $Game['link'];?>" class='button' >Link to the game</a>

             
            
        </div>
    </body>
</html>