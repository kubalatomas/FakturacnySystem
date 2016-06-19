/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
        $('#login_button').click(function() {
            var login = $("#login_input");
            var password = $("#password_input");
            if(login.val() == '' || password.val() == '') {
                $("#message").html("Nie sú vyplnené všetky potrebné údaje");
            } else {
                var urlpat='submit=log_in&login='+login.val()+'&password='+password.val();
                $.ajax({
                    type:'POST',
                    data: urlpat,
                    url: 'over.php',
                    beforeSend: function() { $('#login_button').val("test"); },
                    success: function(data) {
                        if(data === "success") {
                            window.location.href = 'system.php';
                        } else {
                            $("#message").html("Zadali ste nesprávne údaje");
                        }
                    }
                });
            }
            return false;

    });
});

$(document).ready(function() {
        $('#login').keyup(function() {
            var hodnota = $(this).val();

            if(hodnota.length > 6) {                
                var urlpat='username='+hodnota;
                $.ajax({
                    type:'POST',
                    data: urlpat,
                    url: 'exist.php',
                    success: function(data) {
                        if(data === "exist") {
                            $('#userexist').html("Užívateľ s takýmto menom už existuje");
                            $('#userexist').css("color", "red");
                            $('#userexist').css("text-align", "center");
                            $('#userexist').css("margin-bottom", "30px");
                        } else {
                            $('#userexist').html("Toto meno je voľné");
                            $('#userexist').css("color", "green");
                            $('#userexist').css("text-align", "center");
                            $('#userexist').css("margin-bottom", "30px");
                        }
                    }
                });
            }
            

    });
});

   
        

   
        