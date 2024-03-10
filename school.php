<?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo '<a href="logout.php" class="btn btn-primary">Logout</a>';
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School & Course</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>EDUCATION</h1>
        </header>

        <nav>
            <a href="index.php">About Me</a>
            <a href="">School & Course</a>
            <a href="skills.php">Skills</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="blog.php">Blog/Articles</a>
            <a href="contact.php">Contact Information</a>
        </nav>

        <section id="school">
            <h2>School & Course</h2>
            <img src="nuapc.png" alt="APCNU">
            <p>School: National University Fairview</p>
            <p>Course & Section: IT225 Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology </p>
            <p><a href="https://national-u.edu.ph/" target="_blank">Visit National University!</a></p>
            <p><a href="https://www.apc.edu.ph/" target="_blank">Visit APC!</a></p>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Ralph Brian S. Pinca. All Rights Reserved.</p>
    </footer>
</body>
</html>
