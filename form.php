<form method="POST" action="">
        <div class="form-group">
            <label >Name</label>
            <input  class="form-control" name="name"  value="<?php echo $user['name'] ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" name="username"  value="<?php echo $user['username'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input  class="form-control" name="email"  value="<?php echo $user['email'] ?>">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input  class="form-control" name="phone"  value="<?php echo $user['phone'] ?>">
        </div>
        <div class="form-group">
            <label for="pass">Pass</label>
            <input  type="password" class="form-control" name="pass"  value="<?php echo $user['pass'] ?>">
        </div>
    
    <button  class="btn btn-primary">Submit</button>
</form>