<?php
require './conn.php';
// Include your database connection file

// Fetch data from the database
$sql = "SELECT * FROM registration"; // Modify this query according to your table structure
$result = $conn->query($sql);

// Check if there's an error in executing the query
if (!$result) {
    // Display error message
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
}


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

<div>
    <h3>FETCHING DATA </h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roll No</th>
                <th scope="col">Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['id'] . "</th>"; // Assuming 'id' is the primary key column
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['roll_no'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No data available</td></tr>";
            }
            ?>
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>