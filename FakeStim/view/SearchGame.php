<?php 
session_start();

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
        <link rel="stylesheet" href="./assets/stylesShop.css">
    </head>
    <body>
        <nav>
            <a class="profilebutton" href='Profil.php'>Profile</a>
            <a class="Addgame" href='AddGame.php'>Add a Game</a>
            <a class="Addgame" href='Shop.php'>Go to shop</a>
        </nav>
        <div id="container">
         <h1 class="Title">Search by Name</h1>
        </div>
        <form method="post" action="./SearchGame.php">
            <input type='text' placeholder='search a game' name='search' class='search'>
            <input type="submit" id='submit' value='SEARCH' class='' >
        </form>
        <ul>
        <?php foreach($game as $jeu){ ?>
            <a href="./Game.php?id=<?php echo $jeu['id']; ?>" ><li class="list"><?php echo $jeu["name"]; ?></li></a>

        
        <?php } ?>
            
        </ul>


    </body>



</html>

