<?php
require 'conn.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php
    // $name = $email = $roll_no = $contact ='';
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email= $_POST['email'];
        $roll_no= $_POST['roll_no'];
        $contact= $_POST['contact'];

        $sql = "INSERT INTO registration(name ,email ,roll_no ,contact) VALUES ('$name', '$email', '$roll_no', '$contact')";
        $result = $conn->query($sql);

        if($result){
            echo "Data inserted successfully";
        }else{
            echo "Error: ". $sql. "<br>". mysqli_error($conn);
        }
    }
    ?>


<div class="container  box">
    <div class="row">
        <div class="col-md-6 image_box">
            <img src="./dark.jpg" class="img-fluid" alt="Dark Image" style="width: 100%; height: 100%; object-fit: cover;position:relative;">
        </div>
        
        <div class="col-md-6 inner_box">
            <div class="image">
                <h1>Registration Form</h1>
            </div>
            <form method="post" id="form">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <input type="text" id="class" name="class" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="roll_no" class="form-label">Roll-No</label>
                    <input type="text" id="roll_no" name="roll_no" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact-no</label>
                    <input type="text" id="contact" name="contact" class="form-control">
                </div>
                <div id="submit_btn" class="mt-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
                <div class="mt-3">
                        <a href="./fetch.php" class="btn btn-secondary">Fetch Data</a>
                    </div>
            </form>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>