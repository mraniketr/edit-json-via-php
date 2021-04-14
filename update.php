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

if($_SERVER['REQUEST_METHOD'] ==="POST")
{
   
    update_user($_POST,$userID);
    header("Location:index.php");
}
?>

<div class="container">
<?php
include 'form.php';

?>
   
</div>

<?php
include 'footer.php';

?>