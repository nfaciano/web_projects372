<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Chi Alpha - Events</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/events.css">
</head>
<body>
    <?php
    include 'Event.php'; 
    include 'validate.php'; // Assume this includes the necessary validation functions

    // Initialize variables
    $name = $email = $selectedEvent = "";
    $errors = ["name" => "", "email" => "", "event" => ""];
    $successMessage = "";
    $isSubmittedSuccessfully = false;  // Flag to check submission status

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect input
        $name = htmlspecialchars($_POST["name"] ?? "");
        $email = htmlspecialchars($_POST["email"] ?? "");
        $selectedEvent = htmlspecialchars($_POST["event"] ?? "");

        // Validate inputs
        $errors["name"] = validateName($name) ? "" : "Invalid name. Please enter a valid name.";
        $errors["email"] = validateEmail($email) ? "" : "Invalid email. Please enter a valid email.";
        $errors["event"] = validateEvent($selectedEvent) ? "" : "Please select a valid event.";

        // Check for errors
        if (implode("", $errors) === "") {
            $successMessage = "Thank you for registering!";
            $isSubmittedSuccessfully = true;  // Set the flag as true
            // Reset fields after successful registration
            $name = $email = $selectedEvent = "";
        }
    }
    ?>

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

    <h1>Upcoming Events</h1>
    <section id="eventsList">
        <?php
        $events = [
            new Event("Day at the Estate", "2024-09-20", "Estate Grounds", "A lovely day at the estate."),
            new Event("Wing Night", "2024-09-22", "Local Pub", "Enjoy a night of wings and fun."),
            new Event("Bid Day", "2024-09-27", "Chapter House", "Join us for the excitement of bid day.")
        ];

        foreach ($events as $event) {
            echo "<div class='event'>";
            echo "<h3>" . htmlspecialchars($event->title) . "</h3>";
            echo "<p>Date: " . htmlspecialchars($event->date) . "</p>";
            echo "<p>Location: " . htmlspecialchars($event->location) . "</p>";
            echo "<p>" . htmlspecialchars($event->description) . "</p>";
            echo "<form method='POST' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
            echo "<input type='hidden' name='event' value='" . htmlspecialchars($event->title) . "'>";
            echo "<input type='text' name='name' placeholder='Your Name' value='" . htmlspecialchars($name) . "'>";
            echo "<input type='email' name='email' placeholder='Your Email' value='" . htmlspecialchars($email) . "'>";
            echo "<button type='submit'>Register</button>";
            echo "</form>";
            echo "</div>";
        }
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <?php if ($isSubmittedSuccessfully): ?>
        <script>alert('Thank you for registering!');</script>
    <?php endif; ?>
</body>
</html>
