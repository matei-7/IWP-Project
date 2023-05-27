<<<<<<< HEAD
<?php
include "config.php"; // include config variables

// echo '<pre>'; print_r($_POST); echo '</pre>';

$q = mysqli_query($mysqli, "select count(`id`) as `cid` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["name"])."'");

$nr_users = mysqli_fetch_assoc($q);
// echo '<pre>'; print_r($nr_users); echo '</pre>';

if( isset($nr_users['cid']) && $nr_users['cid'] )
{
    // $_SESSION['user_id'] = $nr_users['id'];
    // exista deja utilizator cu acest username
    echo '1';
}
else
{
    echo '0';
}
=======
<?php
include "config.php"; // include config variables

// echo '<pre>'; print_r($_POST); echo '</pre>';

$q = mysqli_query($mysqli, "select count(`id`) as `cid` from `users` where `username` = '".mysqli_real_escape_string($mysqli, $_POST["name"])."'");

$nr_users = mysqli_fetch_assoc($q);
// echo '<pre>'; print_r($nr_users); echo '</pre>';

if( isset($nr_users['cid']) && $nr_users['cid'] )
{
    // $_SESSION['user_id'] = $nr_users['id'];
    // exista deja utilizator cu acest username
    echo '1';
}
else
{
    echo '0';
}
>>>>>>> 28ff6fcd2af02592dba57a27c3420f76f08cb2ac
?>