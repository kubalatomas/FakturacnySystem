<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'faktura_process.php';
?>

        <form action="" method="post">
            <div id="fakturabox">
            
                <div id="hlavickaFaktury">
                    <span>Faktúra číslo: </span>
                    <span><input id="faktura_cislo_input" name="faktura_cislo" type="text"></span>                    
                </div>
                
                    <div id="userbox">
                        <div class="dod_odb">Dodávateľ: </div>
                        <div><?php echo $user->getNazovFirmy() ?></div>
                        <div><?php echo $user->getUlica() ?></div>
                        <div><?php echo $user->getMesto() ?> <?php echo $user->getPsc() ?></div>
                        <div><?php echo $user->getStat() ?></div>
                        <div id="oddelovac"></div>
                        <div>
                            <span>IČO: </span>
                            <span><?php echo $user->getIco() ?></span>                        
                        </div>
                        <div>
                            <span>DIČ: </span>
                            <span><?php echo $user->getDic() ?></span>                    
                        </div>
                        <div>
                            <span>Banka: </span>
                            <span><?php echo $user->getBanka() ?></span>
                        </div>
                        <div>
                            <span>IBAN: </span>
                            <span><?php echo $user->getIban() ?></span>
                        </div>  
                    </div>
                <div id="partnerbox">
                    <div class="dod_odb">Odberateľ: </div>
                    <div><input class="partnerinput" id="spolocnost_osoba_input" name="spolocnost_osoba" type="text" placeholder="Spoločnost/Osoba"></div>
                    <div><input class="partnerinput" id="ulica_input" name="ulica" type="text" placeholder="Ulica"></div>
                    <div><input class="partnerinput" id="mesto_input" name="mesto" type="text" placeholder="Mesto"></div>
                    <div><input class="partnerinput" id="psc_input" name="psc" type="text" placeholder="PSČ"></div>
                    <div><input class="partnerinput" id="stat_input" name="stat" type="text" placeholder="Štát"></div>
                </div>
                <div class="cistic"></div>
                <div id="datumy">
                    <div id="datum_vystavenia"><span id="datum_vystavenia_label">Dátum vystavenia: </span><input value="<?php echo date("d.m.Y") ?>"id="datum_vystavenia_input" name="datum_vystavenia" type="text" ></div>
                    <div id="datum_splatnosti"><span id="datum_splatnosti_label">Dátum splatnosti: </span><input value="<?php echo date("d.m.Y", strtotime("+14 days")) ?>" id="datum_splatnosti_input" name="datum_splatnosti" type="text" ></div>                    
                </div>
                <div id="znenie">
                    <div id="znenie_faktury_css"><span id="znenie_faktury_css_label">Znenie faktúry: </span><input id="znenie_faktury_input" name="znenie_faktury" type="text" ></div>                  
                </div>
                <div id="polozky_faktury">
                    <div id="polozky_nadpis">POLOŽKY FAKTÚRY </div>
                    <div>
                        <table id="polozka_table">
                            <tbody>
                                <tr id="header_table">
                                    <td class="nazov_table">Názov položky</td>
                                    <td class="mj_table">MJ</td>
                                    <td class="ks_table">Počet</td>
                                    <td class="suma_table">Suma bez DPH</td>
                                    <td class="delete_table"></td>
                                </tr>
                                <tr>
                                    <td class="nazov_table"><input class="nazov_input" name="nazov[]" type="text" </td>
                                    <td class="mj_table"><input class="mj_input" name="mj[]" type="text" </td>
                                    <td class="ks_table"><input  class="ks_input" name="ks[]" type="text" </td>
                                    <td class="suma_table"><input  class="suma_input" name="suma[]" type="text"</td>
                                    <td class="delete_table" ></td>
                                </tr>                              
                            </tbody>    
                        </table>
                        <span><i class="fa fa-plus" type="button" id="polozka_add"></i></span>
                        <span><i class="fa fa-minus" type="button" id="polozka_remove"></i></span>
                        <script src="add_remove.js"></script>
                        <script src="js/add_remove.js"></script>
                        <div id="end_of_page"></div>
                    </div>
                </div>
                    
            </div>
            <div id="error_pridaj"><?php
                    foreach($errors as $e) {
                        ?><p><?php echo $e ?></p>
                        <?php } ?></div>
            <div id="pridaj_button">
                <input id="pridaj_button_input" name="submit" type="submit" value="Ulož faktúru">                
            </div>
        </form>


