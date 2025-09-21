<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Document</title>
<style>
    .card{
        width:500px;
    }
    </style>
</head>
<body>
    <div class="container">
    <div class="card">
        <div class="card-header">Heading</div>
        <div class="card-body">
            <form method="POST" action="db_insert.php">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="form-group">
                    <label>USN</label>
                    <input type="text" class="form-control" name="usn">
                </div>

                <div class="form-group">
                    <label>Semester</label>
                    <input type="text" class="form-control" name="sem">
                </div>

                <div class="form-group">
                    <label>Section</label>
                    <input type="text" class="form-control" name="section">
                </div>

                <lable>Subject</lable>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="subject">
                    <option>SEPM</option>
                    <option>CN</option>
                    <option>TOC</option>
                    <option>DSYS</option>
                    <option>RM</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Faculty name</label>
                    <input type="text" class="form-control" name="faculty">
                </div>
<br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>
</body>
</html>