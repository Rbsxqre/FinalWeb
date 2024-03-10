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
    <title>Skills</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>SKILLS  </h1>
        </header>

        <nav>
            <a href="index.php">About Me</a>
            <a href="school.php">School & Course</a>
            <a href="">Skills</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="blog.php">Blog/Articles</a>
            <a href="contact.php">Contact Information</a>
        </nav>

        <section id="skills">
            <h2>Skills</h2>
            <div class="skill">
                <p>
                    <img src="singer.jpg" alt="Professional Singer">
                    Professional Singer
                </p>
            </div>
            <div class="skill">
                <p>
                    <img src="driver.jpg" alt="Professional Driver">
                    Professional Driver
                </p>
            </div>
            <div class="skill">
                <p>
                    <img src="programmer.jpg" alt="Professional Programmer">
                    Professional Programmer
                </p>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Ralph Brian S. Pinca. All Rights Reserved.</p>
    </footer>
</body>
</html>
