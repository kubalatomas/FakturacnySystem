<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$show_faktura;
?>


        <div id="fakturabox">
            <div id="hlavickaFaktury">Faktúra číslo: <?php echo $show_faktura->getCisloFaktury() ?></div>
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
                    <div><?php echo $show_faktura->getSpolocnost() ?></div>
                    <div><?php echo $show_faktura->getUlica() ?></div>
                    <div><?php echo $show_faktura->getMesto() ?> <?php echo $show_faktura->getPsc() ?></div>
                    <div><?php echo $show_faktura->getStat() ?></div>
            </div>
            <div class="cistic"></div>
            <div id="datumy">
                <div id="datum_vystavenia">
                    <span id="datum_vystavenia_label">Dátum vystavenia: </span>
                    <span><?php echo $show_faktura->getDatumVystavenia() ?></span>
                </div>
                <div id="datum_splatnosti">
                    <span id="datum_splatnosti_label">Dátum splatnosti: </span>
                    <span><?php echo $show_faktura->getDatumSplatnosti() ?></span>
                </div>
            </div>
            <div id="znenie">
                <div id="znenie_faktury_css">
                    <span id="znenie_faktury_css_label">Znenie faktúry: </span>
                    <span><?php echo $show_faktura->getZnenieFaktury() ?></span>
                </div>                  
            </div>
            <div id="polozky_faktury">
                <div id="polozky_nadpis">POLOŽKY FAKTÚRY </div>
                <div>
                    <table id="polozka_table">
                        <tbody>
                            <tr id="header_table">
                                <td class="nazov_table_show_label">Názov položky</td>
                                <td class="pocet_label">MJ</td>
                                <td class="suma_ks_label">Suma za ks bez DPH</td>
                                <td class="suma_spolu_label">Suma spolu bez DPH</td>
                                <td class="dph_label">DPH</td>
                                <td class="suma_spolu_dph_label">Suma spolu s DPH</td>
                            </tr>
                            <?php foreach ($show_faktura->getPolozkyFaktury() as $pf) { ?>
                            <tr>
                                <td class="nazov_table_show"><?php echo $pf->getNazov() ?></td>
                                <td class="pocet"><?php echo $pf->getPocetString() ?></td>
                                <td class="suma_ks"><?php echo $pf->getSumaBezDphString() ?></td>
                                <td class="suma_spolu"><?php echo $pf->getCelkovaSumaBezDphString() ?></td>
                                <td class="dph"><?php echo $pf->getCelkoveDphString() ?></td>
                                <td class="suma_spolu_dph"><?php echo $pf->getCelkovaSumaDphString() ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>    
                    </table>
                    <table id="sumarum">
                        <tbody>
                            <tr>
                                <td>Základ</td>
                                <td><?php echo $show_faktura->getCelkovaSumaBezDphString() ?></td>
                            </tr>
                            <tr>
                                <td>DPH</td>
                                <td><?php echo $show_faktura->getCelkoveDphString() ?></td>
                            </tr>
                            <tr id="uhrada_row">
                                <td id="uhrada">K úhrade</td>
                                <td><?php echo $show_faktura->getCelkovaSumaDphString() ?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="cistic"></div>
                    <div id="end_of_page"></div>
                </div>
            </div>

        </div>


