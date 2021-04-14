<?php
require 'users.php';
include 'header.php';

$user=[
    'name'=>'',
    'username'=>'',
    'email'=>'',
    'phone'=>'',
    'pass'=>''
];
    
if($_SERVER['REQUEST_METHOD'] ==="POST")
    {
   

    $user =create_user($_POST);
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