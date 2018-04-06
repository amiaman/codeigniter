<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<form method="post" action="<?php echo base_url('/user/login'); ?>">
    <table>
        <tr>
            <td><th>Username:</th></td>
            <td><input type="text" name="user"></td>
        </tr>
        <tr>
            <td><th>Password:</th></td>
            <td><input type="password" name="pass"></td>
        </tr>

        <tr>
            <td> </td>
            <td><input type="submit" value="Login"></td>
        </tr>
        <?php
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        ?>

        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
    </table>
</form>
</body>
</html>