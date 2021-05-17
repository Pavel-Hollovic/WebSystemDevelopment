<?php require_once "database.php"; ?>
<?php require_once "header.php"; ?>

<h1>Log In</h1>
<form method="post" action="login-do.php"
>              
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                       value="<?= $username; ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>