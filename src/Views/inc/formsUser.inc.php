<div id="overlay">
    <span id="btnClose">&times;</span>

    <!-- -------------------------------------- Form de connexion ---------------------------------------------------- -->
    <form action="?page=logIn" method="POST" id="formConnexion">
        <label for="email"><input type="text" placeholder="Email" name="email"></label>
        <label for="password"><input type="text" placeholder="Password" name="password"></label>
        <label for="btnConnexion"><button type="submit" class="submitForm">Me connecter</button></label>
        <a href="#" id="btnSign">Pas encore de compte ?</a>
    </form>


    <!-- -------------------------------------- Form d'inscription --------------------------------------------------- -->
    <form action="?page=signIn" method="POST" id="formSign">
        <label for="lastname"><input type="text" placeholder="Name" name="lastname"></label>
        <label for="firstname"><input type="text" placeholder="Firstname" name="firstname"></label>
        <label for="email"><input type="text" placeholder="Email" name="email"></label>
        <label for="password"><input type="text" placeholder="Password" name="password"></label>
        <label for="pwdVerify"><input type="text" placeholder="Password verify" name="pwdVerify"></label>
        <label for="cgu"><input type="checkbox" class="cgu" name="cgu">J'accepte les conditions générales d'utilisation</label>
        <label for="btnSign"><button type="submit" class="submitForm">M'inscrire</button></label>
        <a href="#" id="btnConnexion">Déjà un compte ?</a>
    </form>
</div>