<?php
    // '<pre';
    // var_dump($_SESSION);
    // '</pre>';
?>
<nav>
    <ul class="full-ul">
        <a href="?page=home"><li>Accueil</li></a>
        <a href="?page=allsurveys"><li>Sondages</li></a>
    </ul>

    <ul class="mi-ul">
        <a href="?page=ranking"><li>Résultats</li></a>
        <div id="logo">            
            <?php if(empty($_SESSION)) : ?>
            <span id="connexionMsg">Connexion</span>
            <?php else : ?>
            <a href="?page=profil" id="userName">
                <?= ucfirst($_SESSION["firstname"]);?>
            </a>
            <?php endif?>
        </div> 
    </ul>
</nav>   