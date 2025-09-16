<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="final_login_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="display-2 text-white"><center>Soccer Club</center></h1>
    
    <!-- send form data to login_process.php -->
    <form action="login_process.php" method="POST">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="usname" name="username" placeholder="example@mail" required>
            <label for="usname">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="pass" name="password" placeholder="Password" required>
            <label for="pass">Password</label>
            <br>
        </div>
        <center>
            <button type="submit" name="login_user" class="btn btn-primary">Submit</button>
        </center>
    </form>
</body>
</html>

