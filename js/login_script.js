function hide(elem) { // remove unhidden class and add hidden
    elem.addClass("form--hidden");
    elem.removeClass("form--unhidden");
}

function show(elem) { // remove hidden class and add unhidden
  elem.addClass("form--unhidden");
  elem.removeClass("form--hidden");
}


var $ = jQuery; // to use $ as jQuery variable


$(document).ready(function(){ // when document is loaded up -> so we first load jquery and then load functions using it

    var createe = $("#linkCreateAccount"); // 'no acc' button
    var haveAcc = $("#linkLogin"); // 'already have acc' button
    var formLogin = $("#Login"); // the login form
    var formCreateAcc = $("#CreateAccount"); // the signup form
    var text2 = $("#title_login"); // the title

    createe.on ("click", function(e) { // don't have acc -> change to signup
        e.preventDefault(); // prevent link/form etc

        hide(formLogin); // hide login form
        show(formCreateAcc); // show signup form
        $("#newUsername").focus(); // when click on dont have acc, you are put immediately on the new user field
        text2.html("<h1>Sign Up</h1>"); // change title to sign up
    });

    haveAcc.on("click", function(e) { // already have acc -> change to login
        e.preventDefault(); // prevent link/form etc

        show(formLogin); // show login form
        hide(formCreateAcc); // hide signup form
        text2.html("<h1>Log In</h1>"); // change title to log in
    });

    $("#login_button").on("click", function (e) // when click on login button
    {
        e.preventDefault(); // so form doesnt send you to next page
        if($("#username").val() && $("#pass").val()) // if we have values for both user and pass
        {
            $.post( "check_user.php", { name: $("#username").val(), password: $("#pass").val() }) // send to check_user.php with username and pass
            .done(function( data ) { // if it comes back with an error -> display it, if not we send the user to main.php
                if( data == 0 )
                {
                    $(".error").html('User or password are incorrect!');
                }
                else
                {
                    location.href="main.php";
                }
            })
            .fail(function(data) { // can't really fail

            });
        }
    });

    
    $("#newUsername").on("blur", function(){ // when new user field is not selected
        
        $("#reg_button").attr("disabled", true); // disable register button

        if($("#newUsername").val()) // if there is a value for new username
        {

            $.post( "check_username.php", { name: $("#newUsername").val() }) // send to check username php with the new username
            .done(function( data ) // if sent back, if error -> display it, if not 
            {
                if( data == '1' )
                    $(".error_register").html('Exista deja utilizatori');
                else
                {
                    $(".error_register").html(''); // delete innerhtml for error msg
                    $("#reg_button").attr("disabled", false); // enable register button
                    // alert( "Data Loaded: " + data );
                }
            })
            .fail(function(data) {
                
            });
        }
    });

    $('#CreateAccount').on("submit", function(e){ // when submitting register form

        // if both passwords have values and if they are equal
        if( $("#newPass").val() && $("#againPass").val() && $("#newPass").val() == $("#againPass").val() )
        {
            return true; // return true so it submits form
        }
        else
        {
            $(".error_register").html('Passwords are not the same'); // display err msg
            return false; // return false so it doesnt submit
        }
    });
    
});
    

    