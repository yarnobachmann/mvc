<h1>User: Edit</h1>

<?php



?>

<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user[0]['userid']; ?>">
    <label for="login">Login</label><input class="form-control col-5" type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" /><br />
    <label for="password">Password</label><input class="form-control col-5" type="text" name="password" /><br />
    <label for="role">Role</label>
        <select class="form-control col-5" name="role">
            <option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="owner" <?php if($this->user[0]['role'] == 'owner') echo 'selected'; ?>>Owner</option>
        </select><br />
    <label>&nbsp;</label><input class="form-control col-3" type="submit" />
</form>
