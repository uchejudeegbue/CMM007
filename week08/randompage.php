<!DOCTYPE html>
<p lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<p>

<h1>Title</h1>

<p>This text gets ignored by the web server and is sent straight down to the client</p>

<?php

echo "<p>This text is rendered first by the web server before being sent down</p>";

$username = $_GET["username"];
echo $username;

echo "<p>Hello " . $username . " how are you today?</p>";
echo "<p>Hello {$username} how are you today</p>";

?>
</body>
</html>