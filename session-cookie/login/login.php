<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <h2 class="text-center">Login</h2>
                <form action="xuly.php" method="post">
                    <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox"  id="remember">
                        <label for="remember">Remember me?</label>
                    </div>
                    <div class="form-group text-right">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>