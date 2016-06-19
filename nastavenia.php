<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'settings_change.php';

?>

        <div id="pagebox">
            <h1>Nastavenia</h1>
            <form action="" method="post">
                <div id="columns">
                    <div id="column1">
                        <div class="label">Spoločnosť/Osoba</div>
                        <input class="box" id="spolocnost_osoba" name="spolocnost_osoba" type="text" >
                        <div class="label">Ulica</div>
                        <input class="box" id="ulica" name="ulica" type="text">
                        <div class="label">Mesto</div>
                        <input class="box" id="Mesto" name="mesto" type="text" >
                        <div class="label">Poštové smerovacie číslo</div>
                        <input class="box" id="psc" name="psc" type="text" >
                    </div>
                    <div id="column2">
                        <div class="label">Identifikačné číslo organizácie</div>
                        <input class="box" id="ico" name="ico" type="text">                    
                        <div class="label">Daňové identifikačné číslo</div>
                        <input class="box" id="dic" name="dic" type="text">
                        <div class="label">Banka</div>
                        <input class="box" id="banka" name="banka" type="text">
                        <div class="label">IBAN</div>
                        <input class="box" id="iban" name="iban" type="text">
                    </div>
                    <div class="cistic"></div>
                </div>    
                <div id="error_zmen_success"><?php echo $result ?></div>
                <div id="error_zmen"><?php
                    foreach($errors as $e) {
                        ?><p><?php echo $e ?></p>
                        <?php } 
                        ?></div>
                <div id="zmen_button">
                    <input id="zmen_button_input" name="submit" type="submit" value="Ulož zmeny">                
                </div>
            </form>
        </div>

    </body>


