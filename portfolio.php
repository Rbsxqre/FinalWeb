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
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <div class="container">
        <header>
            <h1>PORTFOLIO</h1>
        </header>

        <nav>
            <a href="index.php">About Me</a>
            <a href="school.php">School & Course</a>
            <a href="skills.php">Skills</a>
            <a href="">Portfolio</a>
            <a href="blog.php">Blog/Articles</a>
            <a href="contact.php">Contact Information</a>
        </nav>

        <div class="portfolio-categories">
            <ul>
                <div class="Resume">
                    <p>Results-driven BSIT student with a passion for coding and a strong foundation in software development. Proficient in programming languages such as [mention relevant languages], I excel in creating innovative and efficient solutions. Experienced in app development and game design, I bring a creative approach to solving technical challenges. Eager to apply my skills in a dynamic and collaborative environment to contribute to cutting-edge projects and enhance my expertise in the field.</p>
                    <p>Click to download my resume and certificate to learn more about my skills, experiences, and credentials.</p>
                    <p><a href="resume.pdf" target="_blank"></p> 
                        <img src="resume2.jpg" alt="Resume" class="left-image"></a> 
                       
                    <a href="Pinca Oracle Certificate.pdf" target="_blank">
                            <img src="certificate.jpg" alt="Certificate" class="right-image"></a>  
                           <p>Resume and Certificate in Oracle</p> 
            </ul>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Ralph Brian S. Pinca. All Rights Reserved.</p>
    </footer>
</body>
</html>
