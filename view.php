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
?>

<table class="table">
    <tr>
        <td><b>Name</b></td>
        <td><?php echo $user['name']?></td>
    </tr>
    <tr>
        <td><b>Username</b></td>
        <td><?php echo $user['username']?></td>
    </tr>
    <tr>
        <td><b>email</b></td>
        <td><?php echo $user['email']?></td>
    </tr>
    <tr>
        <td><b>Phone</b></td>
        <td><?php echo $user['phone']?></td>
    </tr>
</table>


<?php
include 'footer.php';

?>