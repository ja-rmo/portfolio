<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>
    <header>
        <h1>
            <?php
            $ip = $_SERVER['REMOTE_ADDR'];
            echo "Hello, " . htmlspecialchars($ip);
            ?>
        </h1>
        <h1>this site is still under construstion, i am using it to practice php</h1>
    </header>
</body>
</html>