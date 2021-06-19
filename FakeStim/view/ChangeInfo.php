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
            
            <form action="./ValidationChange.php" method="post">
                <h1>Change Infos</h1>
                
                <label><b>Username</b></label>
                <input type="text" placeholder="Entrez un nom"  name="pseudo" value="<?php echo $_SESSION['pseudo']; ?>" required>

                <label><b>Email</b></label>
                <input type="text" placeholder="Entrez un email" name="email" value="<?php echo $_SESSION['email']; ?>" required>

                <input type="submit" id='submit' value='MODIFY'>
            </form>
        </div>
    </body>
</html>




