<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Profil Page</title>
</head>
<body>
    <?php include "inc/formsUser.inc.php" ?> 
    <header>
        <?php include "inc/nav.inc.php" ?>    
    </header>

    <h1>Profil</h1>
    <?php
        if(isset($infosUser)){
            echo $infosUser;
        }
    ?>
    <?php if($_SESSION):?>
        
    <!-- ------------------------- Display user infos in a table --------------------- -->
        <table>
            <td>
                <?php foreach($_SESSION as $infos) : ?>
                    <tr>
                        <?= $infos ?><br>
                    </tr>
                <?php endforeach ?>
            </td>
        </table>
    <!-- ------------------------- /Display user infos in a table --------------------- -->


        <a href="?page=logOut" id="btnLogOut">Déconnexion</a>

    
    <!-- ------------------------- Display form survey if admin ---------------------- -->    
        <?php if($_SESSION['status'] === "1") : ?>
            <h1>Add Survey</h1>

            <form id="newSurvey" action="" method="post">
                <label for="">Votre question<input type="text" name="question" id=""></label>
                <label for="">Choix: 1<input type="text" name="question" id="A1"></label>
                <label for="">Choix: 2<input type="text" name="question" id="A2"></label>
                <label for="">Choix: 3<input type="text" name="question" id="A3"></label>
                <label for="">Choix: 4<input type="text" name="question" id="A4"></label>

                <button id="sendForm" type="submit">Créer</button>
            </form>
        <?php endif ?>
    <!-- ------------------------- /Display form survey if admin ---------------------- -->
    

    <?php endif ?>
<script src="js/nav.js"></script>
</body>
</html>