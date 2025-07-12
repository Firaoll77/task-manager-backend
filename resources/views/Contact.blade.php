<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<h2>Contact Us</h2>

<form method="POST" action="/contact">

    <label for="name">Name:</label><br>
    <input type="text" name="name" id="name"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email"><br><br>

    <label for="message">Message:</label><br>
    <textarea name="message" id="message" rows="4"></textarea><br><br>

    <button type="submit">Send</button>
</form>

</body>
</html>
