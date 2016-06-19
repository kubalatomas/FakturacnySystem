<?php
    include("reg.php");

?>


<html>
    <head>
        <title>title</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/registration.css"/>
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <header>
            <div id="hlavicka">Faktúry Online</div>
            <h1>Registračná zóna</h1>
        </header>

        <div id="registrationform">
            <form action="" method="post">
                <fieldset>
                    <dl>
                        <dt class="label">
                            Login
                        </dt>
                        <dd class="input">
                            <input id="login" name="login" type="text">
                        </dt> 
                    </dl>
                    <dl>
                        <dt class="label">
                            Heslo
                        </dt>
                        <dd class="input">
                            <input id="password" name="password" type="password">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            Názov firmy
                        </dt>
                        <dd class="input">
                            <input id="nazovFirmy" name="nazovFirmy" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            Ulica
                        </dt>
                        <dd class="input">
                            <input id="ulica" name="ulica" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            Mesto
                        </dt>
                        <dd class="input">
                            <input id="mesto" name="mesto" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            PSČ
                        </dt>
                        <dd class="input">
                            <input id="psc" name="psc" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            Štát
                        </dt>
                        <dd class="input">
                            <input id="stat" name="stat" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            IČO
                        </dt>
                        <dd class="input">
                            <input id="ico" name="ico" type="number">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            DIČ
                        </dt>
                        <dd class="input">
                            <input id="dic" name="dic" type="number">
                        </dd>
                    </dl>                    
                    <dl>
                        <dt class="label">
                            Číslo účtu
                        </dt>
                        <dd class="input">
                            <input id="cisloUctu" name="cisloUctu" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            Banka
                        </dt>
                        <dd class="input">
                            <input id="banka" name="banka" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            IBAN
                        </dt>
                        <dd class="input">
                            <input id="iban" name="iban" type="text">
                        </dd>
                    </dl>
                    <dl>
                        <dt class="label">
                            SWIFT
                        </dt>
                        <dd class="input">
                            <input id="swift" name="swift" type="text">
                        </dd>
                    </dl>                    
                </fieldset>
                <div id="divreg">
                    <input id ="reg" name="submit" type="submit" value="Zaregistruj sa">     
                </div>

            </form>
            <div id="error"><?php echo $error?></div>
        </div>
    </body>
</html>


