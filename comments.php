<?php
session_start(); // Start the session

$servername = "localhost"; // Change this to your database server
$username = "id21970622_rbpinca_21"; // Change this to your database username
$dbpassword = "Rbpinca_21"; // Change this to your database password
$dbname = "id21970622_rb"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check if the user pressed the submit button
if (isset($_POST["submit_comment"])) {
    // Check if the user is not logged in
    if (!isset($_SESSION["user"])) {
        header("Location: login.php"); // Redirect to the login page
        exit(); // Stop executing the rest of the code
    }

    // User is logged in, process the comment submission
    $comment = $_POST["comment"];
    $user_id = $_SESSION["user"];

    // Insert the comment into the database
    $sql = "INSERT INTO comments (user_id, comment) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "is", $user_id["id"], $comment);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

$sql = "SELECT comments.*, users.first_name FROM comments
        LEFT JOIN users ON comments.user_id = users.id
        ORDER BY comments.created_at DESC";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div class="container">
    <h2 style="color: white;">Leave a Comment</h2>
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="comment" class="form-label">Your Comment:</label>
            <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit_comment">Submit</button>
    </form>

    <hr>

    <h2 style="color: white;">Comments</h2>
    <div class="comments-container">
        <?php
        // Display existing comments
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'>{$row['comment']}</p>";
            echo "<p class='card-text'><small class='text-muted'>Posted on {$row['created_at']}</small></p>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>
</head>
<body>
    
</body>
</html>
