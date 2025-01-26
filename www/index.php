<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Development Test Page</title>
</head>
<body>
    <h1>Development Test Page</h1>
    
    <?php
    
    try {
        require_once 'includes/functions.php';
        echo "<p style='color: green;'>Database connection successful!</p>";
    } catch (PDOException $e) {
        echo "<p style='color: red;'>Connection failed: " . $e->getMessage() . "</p>";
    }
    ?>

    <h2>PHP Info</h2>
    <?php phpinfo(); ?>
</body>
</html>
