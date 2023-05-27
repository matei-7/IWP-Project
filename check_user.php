<<<<<<< HEAD
<?php
include "config.php";
session_start();
//echo '<pre>'; print_r($_POST); echo '</pre>';

$q = mysqli_query($mysqli, "select `id` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["name"])."' and `password` = '".mysqli_real_escape_string($mysqli, $_POST["password"])."'");

$nr_users = mysqli_fetch_assoc($q);
//echo '<pre>'; print_r($nr_users); echo '</pre>'; die();

if( isset($nr_users['id']) && $nr_users['id'] )
{
    $_SESSION['user_id'] = $nr_users['id'];
    //header("Location: main.php");
    //die();
    echo "1";
}
else
{
    // error
    echo '0';
}
=======
<?php
include "config.php";
session_start();
//echo '<pre>'; print_r($_POST); echo '</pre>';

$q = mysqli_query($mysqli, "select `id` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["name"])."' and `password` = '".mysqli_real_escape_string($mysqli, $_POST["password"])."'");

$nr_users = mysqli_fetch_assoc($q);
//echo '<pre>'; print_r($nr_users); echo '</pre>'; die();

if( isset($nr_users['id']) && $nr_users['id'] )
{
    $_SESSION['user_id'] = $nr_users['id'];
    //header("Location: main.php");
    //die();
    echo "1";
}
else
{
    // error
    echo '0';
}
>>>>>>> 28ff6fcd2af02592dba57a27c3420f76f08cb2ac
?>