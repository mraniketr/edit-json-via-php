<?php 
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}

require 'users.php';

$users = get_user();
include 'header.php';
?>


<div class="container">
<table class="table table-dark">
<thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
</thead>
<tbody>
<?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-primary">View</a>
                    <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-secondary">Update</a>
                    <a href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

</tbody>
</table>

<a href="create.php"  class="btn btn-success">Add new user</a>
<a href="logout.php"  class="btn btn-danger">Logout</a>
</div>

<?php
include 'footer.php';

?>