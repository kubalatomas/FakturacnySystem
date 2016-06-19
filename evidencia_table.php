<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

        <div id="pagebox">
            <div id="evidencia_header">
                <span id="h1">Evidencia faktúr</span>
                <span id="message"><?php echo $message ?></span> 
            </div>

            <table id="evidenciabox">
                <tr id="evidenciabox_header">
                    <td id="datumVystavenia">Dátum vystavenia</td>
                    <td id="cisloFaktury">Číslo faktúry</td>
                    <td id="znenieFaktury">Znenie faktúry</td>
                    <td id="partner">Partner</td>
                    <td id="suma">Suma s DPH</td>
                    <td id="akcia"></td>
                </tr>
                <?php if (count($faktury) == 0) { ?>
                <tr>
                    <td colspan="5" id="emptyEvidencia"><?php echo "Evidencia faktúr je momentálne prázdna" ?></td>
                </tr> 
                <?php } else {
                    for ($index = 0; $index < count($faktury); $index++) { ?>
                        <tr>
                            <td><?php echo $faktury[$index]->getDatumVystavenia() ?></td>
                            <td><?php echo $faktury[$index]->getCisloFaktury() ?></td>
                            <td><?php echo $faktury[$index]->getZnenieFaktury() ?></td>
                            <td><?php echo $faktury[$index]->getSpolocnost() ?></td>
                            <td><?php echo $faktury[$index]->getCelkovaSumaDphString() ?></td>
                            <td><a href="system.php?menu=evidencia&action=show&id=<?php echo $index ?>"<i class="fa fa-eye"></i></a><a href="system.php?menu=evidencia&action=delete&id=<?php echo $index ?>"<i class="fa fa-trash"></i></a></td>
                  
                        </tr>
                    <?php }    
                }
                ?>
            </table>
        </div>



