<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Lambda Chi Alpha</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img src="images/logo.png" alt="Lambda Chi Alpha Logo" width="150" height="150">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="merchandise.php">Merchandise</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="?logout">Logout</a></li>
        </ul>
    </nav>
    
    <h1>About Lambda Chi Alpha</h1>
    
    <section id="aboutus-content">
        <!-- Content loaded dynamically with AJAX will appear here -->
    </section>
    
    <footer>
        <p>Email: <a href="mailto:nfaciano@uri.edu">nfaciano@uri.edu</a></p>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/aboutus.js"></script>
    <script src="js/loadHtmlWithJQuery.js"></script>

</body>
</html>
