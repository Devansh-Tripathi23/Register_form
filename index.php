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


    <div class="container my-5 box">
            <div class="col-md-12 inner_box ">
                <div class="image">
                    <h1>Registration Form</h1>
                </div>
                <form method="post" id="form">
                    <h5 class="my-2">Name</h5>
                    <input type="text" name="name" class="form-control my-2">  
                    <h5>Class</h5>
                    <input type="text" name="class" class="form-control my-2">
                    <h5>Roll-No</h5>
                    <input type="text" name="roll_no" class="form-control my-2">
                    <h5>E-mail</h5>
                    <input type="text" name="email" class="form-control my-2">
                    <h5>Contact-no</h5>
                    <input type="text" name="contact" class="form-control">
                    <div id="submit_btn" class="mt-3">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





