<?php
include "header.php";
?>
    <div class="background_img">
        <div class="content">

            <div class="title" id="title_login">
                <h1>Log In</h1>
            </div>

            <div class="form">
                <form autocomplete="off" class="form--unhidden" id="Login" action="main.php" method="post">
                   
                    <?php // if (isset($_GET['error']) ) { ?>

                        <p class="error"><?php // echo $_GET['error']; ?></p>

                    <?php // } ?>

                    <div class="form-wo-signin">
                        <div class="form-inputs">
                            <p>
                                <label for="username">Username</label>
                                <input autocomplete="false" id="username" type="text" placeholder="Username" name="username">
                            </p>
                        </div>

                        <div class="form-inputs"> 
                            <p>
                                <label for="pass">Password</label>
                                <input autocomplete="false" id="pass" type="password" name="pass" placeholder="Password">
                            </p>
                        </div>

                        <div class="submit form-inputs">
                           <p>
                               <button id="login_button" type="submit">Login</button>
                           </p>
                        </div>
                    </div>
                    <div class="form-no">
                        <p class="form__text" id="ToCreateAccount">
                            <a class="form__link" href="#CreateAccount" id="linkCreateAccount">Don't have an account? Create account</a>
                        </p>
                    </div>
                </form>

               <form name="register_form" autocomplete="off" class="form--hidden" id="CreateAccount" action="main.php" method="post">
                 <p class="error_register"><?php // echo $_GET['error']; ?></p>
                  <div class="form-wo-signin">
                       <div class="form-inputs">
                            <p>
                                <label for="newUsername">Username</label>
                                <input autocomplete="false" type="text" id="newUsername" placeholder="Username" name="newUsername">
                            </p>
                        </div>
                        <div class="form-inputs">
                            <p>
                                <label for="newPass">Password</label>
                                <input autocomplete="false" type="password" id="newPass" placeholder="Password" name="newPass">
                            </p>
                        </div>
                        <div class="form-inputs">
                            <p>
                                <label for="againPass">Confirm password</label>
                                <input autocomplete="false" type="password" id="againPass" placeholder="Confirm" name="againPass">
                            </p>
                        </div>
                        <div class="submit form-inputs">
                            <p>
                                <button type="submit" id="reg_button">Register</button>
                            </p>
                        </div>
                   </div>
                    
                    <div class="form-no">
                        <p class="form__text" id="ToLogin">
                            <a class="form__link" href="#ChangeLogin" id="linkLogin">Already have an account? Sign in</a>
                        </p>
                   </div>
                </form>
           
            </div> <!-- form div -->
	    </div> <!-- content div -->
    </div> <!-- background div -->

<?php
include "footer.php";
?>