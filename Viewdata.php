
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kids Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Kids Data</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                  
                  include_once "./connection.php";
                 ?>
                 <?php
                 $sql = "SELECT * FROM kids";
                 $result = mysqli_query($conn, $sql);
                 if (mysqli_num_rows($result) > 0) {
                     echo "<div class='container'>";
                     echo "<table class='table table-striped table-hover'>";
                     echo "<thead><tr><th>ID</th><th>FirstName</th><th>Surname</th><th>Phone Number</th></tr></thead>";
                     echo "<tbody>";
                     while ($row = mysqli_fetch_assoc($result)) {
                         echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["surname"] . "</td><td>" . $row["phone_number"] . "</td></tr>";
                     }
                     echo "</tbody></table>";
                     echo "</div>";
                 } else {
                     echo "No data found.";
                 }
                 mysqli_close($conn);
                 ?>
                 
                 <a href="index.html"><button>Home</button></a>
            </tbody>
        </table>
    </div>
</body>
</html>

