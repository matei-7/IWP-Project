document.addEventListener("DOMContentLoaded", function() {
  var create = document.getElementById("linkCreateAccount");
  var haveAcc = document.getElementById("linkLogin");
  var formLogin = document.getElementById("Login");
  var formCreateAcc = document.getElementById("CreateAccount");
  var text = document.getElementById("title_login");


  create.addEventListener("click", function(e) {
    e.preventDefault();

    hide(formLogin);
    show(formCreateAcc);
      text.innerHTML = "<h1>Sign Up</h1>";
  });

  haveAcc.addEventListener("click", function(e) {
    e.preventDefault();

    show(formLogin);
    hide(formCreateAcc);
    text.innerHTML = "<h1>Log In</h1>";
  });
});

function hide(elem) {
    elem.classList.add("form--hidden");
    elem.classList.remove("form--unhidden");
}

function show(elem) {
  elem.classList.add("form--unhidden");
  elem.classList.remove("form--hidden");
}

// document.addEventListener("DOMContentLoaded", function(){

    var $ = jQuery;

$(document).ready(function(){
    
    $.ajax({
      method: "POST",
      url: "check_user.php",
      data: { name: $("#username"), password: $("#pass") }
    })
      .done(function( msg ) {
        location.href = "main.php";;
      }).error(function( msg ) {
        $(".error").html("Username/password not correct!");
      });
});
// });
