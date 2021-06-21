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
        </nav>
        <div id="container">
         <h1 class="Title">Welcome to FakeStim</h1>
        </div>
        <form method="post" action="./Shop.php">
            <h4 class="select">Choose a category</h4>
            <select class="select" name='category'>
                <option value="All">All</option>
                <option value="Aventure">Aventure</option>
                <option value="BattleRoyale">BattleRoyale</option>
                <option value="Action">Action</option>
                <option value="Enigme">Enigme</option>
            </select>
            <input type="submit" id='submit' value='SEARCH' >
        </form>
        <ul>
        <?php foreach($game as $jeu){ ?>
            <a href="#" ><li class="list"><?php echo $jeu["name"]; ?></li></a>

        
        <?php } ?>
            
        </ul>


    </body>



</html>

