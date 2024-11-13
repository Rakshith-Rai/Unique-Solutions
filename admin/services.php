<!-- admin_dashboard.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="services.css">

</head>
<body>
    <!-- header with logo -->
    <div class="header">
        <img class="logo" src="../assets/logo.png" alt="company_logo">
        <marquee behavior="scroll" direction="right"><h1 >Admin Dashboard</h1></marquee>
    </div>
    
    <!-- Sidebar menu -->
    <div class="sidebar">
        <ul>
            <li><a href="#" id="load">Services</a></li>
            <li><a href="../admin/contact.php" id="load">Contact Us</a></li>
        </ul>
    </div>

    <!-- Main content area -->
    <div class="content">
        <h1 class="service">Services</h1>
        
<table id="serviceTable">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Pincode</th>
        <th>Phone</th>
        <th>Secondary Phone</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uniquesolutions_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["address"] . "</td><td>" . $row["pincode"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["secondary_phone"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No messages</td></tr>";
    }

    $conn->close();
    ?>
</table>


    </div>

    <!-- JavaScript for interactivity -->
    <script>
        // JavaScript to highlight row on hover
        document.addEventListener("DOMContentLoaded", function() {
            var rows = document.querySelectorAll("#serviceTable tbody tr");
            rows.forEach(function(row) {
                row.addEventListener("mouseenter", function() {
                    this.style.backgroundColor = "#f0f0f0";
                });
                row.addEventListener("mouseleave", function() {
                    this.style.backgroundColor = "";
                });
            });
        });

        // java  script reload the page
        document.getElementById("load").addEventListener("click",function(event){
            location.reload();
            event.preventDefault(); // prevents the default action of reload (which is reloading the page)
        });
    </script>
</body>
</html>
