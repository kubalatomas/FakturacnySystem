/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var $pocet = 1;
$('#polozka_add').on('click',function(){
    var $tableBody = $('#polozka_table').find('tbody');
    $trLast = $tableBody.find('tr:last');
    $trNew = $trLast.clone();
    $trNew.find('.nazov_table').find('.nazov_input').val('');
    $trNew.find('.mj_table').find('.mj_input').val('');
    $trNew.find('.ks_table').find('.ks_input').val('');
    $trNew.find('.suma_table').find('.suma_input').val('');
    $trLast.after($trNew);
    $pocet++;

});

$('#polozka_remove').on('click',function(){
    if ($pocet !== 1) {
        var $tableBody = $('#polozka_table').find('tbody');
        $tableBody.find('tr:last').remove();
        $pocet--;
    }
});




