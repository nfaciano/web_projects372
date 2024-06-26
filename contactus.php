<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Lambda Chi Alpha</title>
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

    <h1>Contact Lambda Chi Alpha</h1>
    
    <section>
        <h2>We'd love to hear from you!</h2>
        <p id="contact-message"></p>
            <form id="contact-form">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
                    
    </section>
    <div id="map"></div>

    <footer>
        <p>Email: <a href="#" id="contact-email"></a></p>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/loadJson.js"></script>
    <script src="js/contactus.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_9mfuQuYwjGBXA5KT3w7Q67W_pEBSE1s&callback=initMap" async defer></script>

    

</body>
</html>