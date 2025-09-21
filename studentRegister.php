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
                <form method="POST" action="dbRegister.php">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control mb-2" placeholder="enter name" required/>

                    <label>USN</label>
                    <input type="text" name="usn" class="form-control mb-2" placeholder="enter usn" required/>

                    <label>SEM</label>
                    <input type="text" name="sem" class="form-control mb-2" placeholder="enter SEM" required/>

                    <label>Section</label>
                    <input type="text" name="section" class="form-control mb-2" placeholder="enter Section" required/>

                    <label>Select subject</label>
                    <select name="subject" class="form-control mb-2" required>
                        <option value="TOC">TOC</option>
                        <option value="SEPM">SEPM</option>
                        <option value="DSYS">DSYS</option>
                        <option value="MP">MP</option>
                        <option value="RM">RM</option>
                        <option value="EVS">EVS</option>
                    </select>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br>
</body>
</html>