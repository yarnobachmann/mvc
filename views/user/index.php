<h1>User</h1>

<form method="post" action="<?php echo URL;?>user/create">
    <label for="login">Login</label><input class="form-control col-5" type="text" name="login" /><br />
    <label for="password">Password</label><input class="form-control col-5" type="text" name="password" /><br />
    <label for="role">Role</label>
        <select class="form-control col-5" name="role">
            <option value="default">Default</option>
            <option value="admin">Admin</option>
        </select><br />
    <label>&nbsp;</label><input class="form-control col-3" type="submit" />
</form>

<hr />

<table>
<?php
    foreach($this->userList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['userid'] . '</td>';
        echo '<td>' . $value['login'] . '</td>';
        echo '<td>' . $value['role'] . '</td>';
        echo '<td>
                <a href="'.URL.'user/edit/'.$value['userid'].'">Edit</a>
                <a class="delete" href="'.URL.'user/delete/'.$value['userid'].'">Delete</a></td>';
        echo '</tr>';
    }
?>
</table>
