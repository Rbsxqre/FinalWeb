<?php
if (isset($_POST['Login'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $servername = "localhost"; // Change this to your database server
        $username = "id21970622_rbpinca_21"; // Change this to your database username
        $dbpassword = "Rbpinca_21"; // Change this to your database password
        $dbname = "id21970622_rb"; // Change this to your database name
    
        $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Prepare and execute SQL statement to retrieve user by email
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user data
            $user = $result->fetch_assoc();
            
            // Verify the password
            if ($password == $user["password"]) {
                session_start();
                $_SESSION["user"] = $user;
                header("Location: index.php");
                exit(); // Ensure script execution stops after redirection
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not exist </div>";
        }
    
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }   
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
    </head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
            if (isset($error_message)) {
                echo "<div class='alert alert-danger'>" . $error_message . "</div>";
            }
        ?>
        <form action="login.php" method="post">
                <br>
                <br>
                <br>
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                <br>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                <br>
                    <input type="submit" class="btn btn-primary" name="Login" value="Login">
            </form>
            <div>
                <p>Not registered yet? <a href="registration.php">Register Now!</a></p>
        </div>
        
        <div id="logout-button">
        <?php
            if (isset($_SESSION['user'])) {
                echo '<a href="logout.php" class="btn btn-primary">Logout</a>';
            }
        ?>
    </div>
<br>
<br>
<br>
<br>
        <div id="comment">


    </body>
</html>
cdn.jsdelivr.net