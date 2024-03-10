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
    <title>All About Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <header>
            <h1>WELCOME TO MY WEBSITE!!</h1>
        </header>

        <nav>
            <a href="">About Me</a>
            <a href="school.php">School & Course</a>
            <a href="skills.php">Skills</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="blog.php">Blog/Articles</a>
            <a href="contact.php">Contact Information</a>
        </nav>

        <section id="about">
            <h2>About Me</h2>
            <img src="pic.png" alt="Profile Picture">
            <p>Hello there! I'm Ralph Brian S. Pinca, but you can call me Rb or Bri. Wishing you a wonderful day filled with joy! I am currently a 19-year-old 2nd-year college student. My world revolves around singing my heart out, embarking on exciting adventures, and diving into the world of games.</p>
            <p>When it comes to delicious treats, my taste buds dance for joy with every bite of adobo, sinigang, pork steak, tinola, and ginisang ampalaya. </p>
            <p>Being an introvert, I find solace in the quiet moments. I'm not just a good listener; I'm here to lend an empathetic ear. Feel free to trust me with your secrets, lean on me when you need help, or simply share your thoughts and feelings. I'm all ears!</p>
        </section>
        
        <footer>
            <p>&copy; 2024 Ralph Brian S. Pinca. All Rights Reserved.</p>
        </footer>

        <button id="scrollToTop" onclick="scrollToTop()">Scroll To Top</button>
    
    </div>
    

</body>
</html>
