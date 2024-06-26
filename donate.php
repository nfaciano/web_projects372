<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Chi Alpha - Donate</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Consider adding a specific CSS file for the donate page if needed -->
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
    
    <h1>Support Lambda Chi Alpha</h1>
    
    <section id="donate-section">
        <h2>Make a Difference Today</h2>
        <p>Your support enables us to continue our mission of fostering leadership, personal growth, and a strong sense of community among our members. Every donation, big or small, makes a significant impact.</p>
        
        <form action="YOUR_PAYMENT_PROCESSOR_URL" method="POST">
            <label for="donation-amount">Donation Amount:</label>
            <input type="number" id="donation-amount" name="donation_amount" min="5" placeholder="Amount in USD">
            
            <label for="donor-name">Your Name:</label>
            <input type="text" id="donor-name" name="donor_name" placeholder="Your Full Name">
            
            <label for="donor-email">Email Address:</label>
            <input type="email" id="donor-email" name="donor_email" placeholder="yourname@example.com">
            
            <input type="submit" value="Donate Now">
        </form>
    </section>
    
    <footer>
        <p>For more information or assistance, please contact us at <a href="mailto:nfaciano@uri.edu">nfaciano@uri.edu</a>.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/donate.js"></script>
    
</body>
</html>
