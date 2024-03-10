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
    <title>Contact Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>CONTACT</h1>
        </header>

        <nav>
            <a href="index.php">About Me</a>
            <a href="school.php">School & Course</a>
            <a href="skills.php">Skills</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="blog.php">Blog/Articles</a>
            <a href="">Contact Information</a>
        </nav>

        <section id="contact">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p>Address: North Caloocan City</p>
                <p>Contact No.: 09690436355</p>
                <p><a href="https://www.facebook.com/ilymyblue" target="_blank">Facebook</a></p>
                <p><a href="https://www.instagram.com/rlphbrii_/" target="_blank">Instagram</a></p>
                <p><a href="https://discord.com/channels/@me" target="_blank">Discord</a></p>
                <p><a href="https://github.com/rbsxqre21" target="_blank">GitHub</a></p>
            </div>
        
            <p class="advice">Please include your name, email, contact, and message when reaching out.</p>

            <div id="comment">
<div class="container">
    <h2 style="color: white;">Leave a Comment</h2>
    <form action="contact.php" method="post">
        <div class="mb-3">
            <label for="comment" class="form-label">Your Comment will be highly Appreciated!:</label><br>
            <input type="text" class="form-control" id="comment" name="comment" rows="3"></input>
        </div>
        <div class="center-submit">
            <button type="submit" class="btn btn-primary" name="submit_comment">Submit Here</button>
        </div>
    </form>

    <h2 style="color: white;">Comments</h2>
    <div class="comments-container">
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<p class='card-text'>{$row['comment']}</p>";
                echo "<p class='card-text'><small class='text-muted'>Posted on {$row['created_at']} Posted by {$row['first_name']}</small>";
                echo "</p>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>
</div>

<?php
    if (isset($_SESSION['user'])) {
        echo '<a href="logout.php" class="btn btn-primary">Logout</a>';
    }
?>

        </section>
    </div>

    <footer>
        <p>&copy; 2024 Ralph Brian S. Pinca. All Rights Reserved.</p>
    </footer>
</body>
</html>
