<?php
    include 'reg.php';

?>


<html>
    <head>
        <title>FaktúryOnline - Registrácia</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/registration.css"/>
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <script src="jquery/jquery-2.2.0.min.js"></script>
        <script src="ajax.js"></script>
    </head>
    <body>
        <header>
            <div id="hlavicka">FaktúryOnline</div>
            <h1>Registračná zóna</h1>
        </header>
        <div id="registrationform">
            <form action="" method="post">
                <div class="label">Prihlasovacie meno</div>
                <input id="login" name="login" type="text" autocomplete="off">
                <div id="userexist"></div>
                <div class="label">Heslo</div>
                <input id="password" name="password" type="password">
                <div class="label">Spoločnosť/Osoba</div>
                <input id="nazovFirmy" name="nazovFirmy" type="text">
                <div class="label">Ulica</div>
                <input id="ulica" name="ulica" type="text">
                <div class="label">Mesto</div>
                <input id="mesto" name="mesto" type="text">
                <div class="label">Poštové smerovacie číslo</div>
                <input id="psc" name="psc" type="text">
                <div class="label">Identifikačné číslo organizácie</div>
                <input id="ico" name="ico" type="text">
                <div class="label">Daňové identifikačné číslo</div>
                <input id="dic" name="dic" type="text">
                <div class="label">Banka</div>
                <input id="banka" name="banka" type="text">
                <div class="label">IBAN</div>
                <input id="iban" name="iban" type="text">
                <div id="error"><?php
                    foreach($errors as $e) {
                        ?><p><?php echo $e ?></p>
                        <?php } ?></div>
                <input id ="reg" name="submit" type="submit" value="Dokončenie registrácie">     
            </form>
            </div>
            
        </div>
    </body>
</html>


