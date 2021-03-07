<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-form with Phpmailer</title>
    <link rel="stylesheet" href="styles.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
        <div class="container-header">
            <h4 class="sent-notification">Send us an email!</h4>
        </div>
        <form action="index.php" method="POST" class="form" id="form">
            <div class="form">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-input" id="name" name="name" placeholder="Enter your full name" tabindex="1" required>
            </div>
            <div class="form">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" required class="form-input" id="email" name="email" placeholder="Email" tabindex="2" >
            </div>
            <div class="form">
                <label for="phoneNumber" class="form-label">Phone</label>
                <input type="number" class="form-input" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" tabindex="3" required>
            </div>
            <div class="form">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-input" id="address" name="address" placeholder="Enter your address" tabindex="3" required>
            </div>
            <div class="form">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-input" rows="5" cols="50" id="message" name="message" placeholder="Leave a note!" tabindex="4"></textarea>
            </div>
            <div class="form-btn">
                <button type="submit" class="btn" onclick="">Send Message!</button>
            </div>
        </form>
    </div>
</body>
</html>