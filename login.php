<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <br><br>
                <h2 class="text-center">Login form</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label >username</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6">
                <br><br>
                <h2 class="text-center">registration form</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label >username</label>
                        <input type="text" name="user" class="form-control">
                    </div>

                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Signin</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>