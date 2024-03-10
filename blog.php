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
    <title>Contacts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>BLOG</h1>
        </header>

        <nav>
            <a href="index.php">About Me</a>
            <a href="school.php">School & Course</a>
            <a href="skills.php">Skills</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="">Blog/Articles</a>
            <a href="contact.php">Contact Information</a>
        </nav>

        <section id="blog">
            <h2>Blog/Articles</h2>
            <article>
                <p><h3><a href="https://hbswk.hbs.edu/item/cold-call-a-lesson-from-google-can-ai-bias-be-monitored-internally">A Lesson from Google: Can AI Bias be Monitored Internally?</a></h3></p>
                <p>In my perspective, Dr. Timnit Gebru's tenure as co-lead of Google's Ethical AI research team and her subsequent departure in 2020 following concerns about bias in the company's large language models triggered profound ripples across the AI and tech spheres. It compelled us to confront pivotal questions about the strategies companies employ to mitigate bias in their AI systems. Should the responsibility of overseeing in-house ethics research remain with experts who possess deep technological understanding, or should it be entrusted to more impartial researchers not tied to the company? Reflecting on Professor Tsedal Neeley's analysis in the case of "Timnit Gebru: 'SILENCED No More' on AI Bias and The Harms of Large Language Models," there's a compelling dialogue on how companies can navigate the complex terrain of AI bias.</p>
            </article>
            <article>
                <h3><p><a href="https://hbswk.hbs.edu/item/use-artificial-intelligence-to-set-sales-targets-that-motivate">Use Artificial Intelligence to Set Sales Targets That Motivate
                    by Michael Blanding</a></p></h3>
                <p>In my view, Doug Chung posits that setting sales targets has traditionally been a challenging endeavor, often relying on subjective methods with potentially severe repercussions if executed inadequately. However, he suggests that leveraging AI-based advanced analytics could offer a promising solution to this longstanding dilemma.</p>
            </article>
            <article>
                <h3><p><a href="https://hbswk.hbs.edu/item/going-digital-implications-for-firm-value-and-performance">Going Digital: Implications for Firm Value and Performance</a></h3></p>
                <p>In my perspective, there's a noticeable trend of nontechnology companies embracing digital technologies such as AI, data analytics, and machine learning. A study examining the economic performance of these firms following the adoption of new digital tools reveals a consistent and promising upward trajectory in valuation. However, it's observed that investors are somewhat sluggish in fully grasping the value implications of these digital initiatives, as they are not swiftly factored into stock prices. Moreover, nontechnology companies benefit significantly from having senior executives equipped with tech talent, as they tend to outperform those lacking such expertise.</p>
            </article>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Ralph Brian S. Pinca. All Rights Reserved.</p>
    </footer>
</body>
</html>
