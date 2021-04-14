<?php
require 'users.php';

if(!isset($_GET['id'])){
    echo "ERROR";
    exit;
}
$userID = $_GET['id'];

$user = get_user_byID($userID);
if(! $user){
    echo "ERROR";
    exit;
}
include 'header.php';

delete_user($userID);
header("Location:index.php");
?>



<?php
include 'footer.php';

?>