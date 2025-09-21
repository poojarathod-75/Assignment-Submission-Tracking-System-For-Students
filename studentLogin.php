<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <?php include './links.php';?>
    <style>
        .card{
            width:400px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
    </style>
</head>
<body>
    <?php include './navbar.php';?>
    <br>
    <div class="container mt-4">
        <div class="card mx-auto">
            <div class="card-body">
                <h4>Student Login</h4>
                <hr>
                <form method="POST" action="dbLogin.php">

                    <label>USN</label>
                    <input type="text" name="usn" class="form-control mb-2" placeholder="enter usn" required/>

                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>