<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

        <div id="pagebox">
            <h1>Údaje o firme</h1>
            <table id="domov_table">
                <tbody>
                    <tr>
                        <td class="label_domov">Názov spoločnosti</td>
                        <td><?php echo $user->getNazovFirmy()?></td>
                    </tr>
                    <tr>
                        <td class="label_domov">Ulica</td>
                        <td><?php echo $user->getUlica()?></td>
                    </tr> 
                    <tr>
                        <td class="label_domov">Mesto</td>
                        <td><?php echo $user->getMesto()?></td>
                    </tr> 

                    <tr>
                        <td class="label_domov">Poštové smerovacie číslo</td>
                        <td><?php echo $user->getPsc()?></td>
                    </tr> 
                    <tr>
                        <td class="label_domov">Štát</td>
                        <td><?php echo $user->getStat()?></td>
                    </tr>   
                    <tr>
                        <td class="label_domov">Identifikačné číslo organizácie</td>
                        <td><?php echo $user->getIco()?></td>
                    </tr>
                    <tr>
                        <td class="label_domov">Daňové identifikačné číslo</td>
                        <td><?php echo $user->getDic()?></td>
                    </tr> 
                    <tr>
                        <td class="label_domov">Banka</td>
                        <td><?php echo $user->getBanka()?></td>
                    </tr> 

                    <tr>
                        <td class="label_domov">IBAN</td>
                        <td><?php echo $user->getIban()?></td>
                    </tr> 
                   
                </tbody>
            </table>
        </div>



