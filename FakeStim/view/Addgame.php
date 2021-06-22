<?php
session_start();
?>

<!DOCTYPE HTML>




<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="./assets/stylesCreate.css">
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="./ValidationAddGame.php" method="post">
                <h1>Add a game</h1>
                
                <label><b>Name of the game</b></label>
                <input type="text" placeholder="Name" name="name" required>

                <label><b>description</b></label>
                <input type="text" placeholder="description" name="description" required>

                <label><b>category</b></label>
                <select class="select" name="category">
                    <option value="Aventure">Aventure</option>
                    <option value="Battleroyale">BattleRoyale</option>
                    <option value="Action">Action</option>
                    <option value="Enigme">Enigme</option>
                    <option value="Enigme">Simulation</option>
                    <option value="Enigme">MMORPG</option>
                    <option value="Enigme">Strategie</option>
                    <option value="Enigme">Moba</option>
                </select>

                <label><b>link</b></label>
                <input type="url" placeholder="link to the game" name="link" required>

                <input type="submit" id='submit' value='ADD' >
               
            </form>
        </div>
    </body>
</html>

