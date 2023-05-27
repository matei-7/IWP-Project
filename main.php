<?php
include "header.php";
//echo '<pre>'; print_r($_POST); echo '</pre>'; die();
// unset($_SESSION);
    
if (isset($_POST["newUsername"]) && isset($_POST["newPass"]) && isset($_POST["againPass"]))
{
    // echo '<pre>'; print_r($_POST); echo '</pre>';
    if ($_POST["newPass"] == $_POST["againPass"])
    {
        $q = mysqli_query($mysqli, "select `id` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["newUsername"])."' and `password` = '".mysqli_real_escape_string($mysqli, $_POST["newPass"])."'");
        
// echo "select `id` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["newUsername"])."' and `password` = '".mysqli_real_escape_string($mysqli, $_POST["newPass"])."'";

        $nr_users = mysqli_fetch_assoc($q);
        // echo '<pre>'; print_r($nr_users); echo '</pre>';
            // echo $nr_users['id'];


        if( !$nr_users['id'] )
        {
            $q = mysqli_query($mysqli, "insert into `users` (`username`, `password`, `registration_date`, `session_id`) values ( '".mysqli_real_escape_string($mysqli, $_POST["newUsername"])."' ,'".mysqli_real_escape_string($mysqli, $_POST["newPass"])."', UNIX_TIMESTAMP(), '')");
// echo "insert into `users` (`username`, `password`, `registration_date`, `session_id`) values ( '".mysqli_real_escape_string($mysqli, $_POST["newUsername"])."' ,'".mysqli_real_escape_string($mysqli, $_POST["newPass"])."', UNIX_TIMESTAMP(), '')"; exit;
            $_SESSION['user_id'] = mysqli_insert_id($mysqli);
            
        }
        else
        {
            // exista deja utilizatorul!
            header("Location: /IWP-Project-main/");
            die();
        }
    }
    else
    {
        header("Location: /IWP-Project-main/");
        die();
    }
}

if (isset($_POST["username"]) && isset($_POST["pass"]))
{
    echo "1"; die();
    $q = mysqli_query($mysqli, "select `id` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["username"])."' and `password` = '".mysqli_real_escape_string($mysqli, $_POST["pass"])."'");

    // echo "select `id` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["newUsername"])."' and `password` = '".mysqli_real_escape_string($mysqli, $_POST["newPass"])."'";

    $nr_users = mysqli_fetch_assoc($q);
    // echo '<pre>'; print_r($nr_users); echo '</pre>';
        // echo $nr_users['id'];


    if( $nr_users['id'] )
    {
        $_SESSION['user_id'] = $nr_users['id'];
    }

}

// echo '<pre>'; print_r($_SESSION); echo '</pre>';
?>
  
  
  
  
  
   <div class="row row-header">
            <div class="col col-lg-9 cafe">
                <div class="background_img">
                   
                   <div class="barista">
                        <img src="Sprites/barista/foony-idle_big.gif" alt="register">
                    </div>
                   
                    <div class="register">
                        <img src="Sprites/cash-register.png" alt="register">
                    </div>
                    
                    <div class="sw">
                        <img src="Sprites/sweets-box-back.png" alt="sw_b">
                    </div>
                    <div class="sw">
                        <img src="Sprites/sweets-box-front.png" alt="sw_f">
                    </div>
                    
                </div>
                <div class="cafe_front">
                   
                    <div class="c_click">
                        <img src="Sprites/buttons/logo-var/coffee-lv1-sq.png" alt="register">
                    </div>
                    
                    <div class="counter">
                        <img src="Sprites/counter.png" alt="register">
                    </div>
                    
                </div>
            </div>
            
            <div class="col col-lg-3 upgrades-menu">
                <div class="row machines">
                    machines
                </div>
                <div class="row upgrades">
                    upgrades
                </div>
            </div>
    </div>
   
<?php
include "footer.php";
?>