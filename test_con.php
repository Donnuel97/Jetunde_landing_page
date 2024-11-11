<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection Test</title>
</head>
<body>
    <h1>Database Connection Test</h1>

    <?php
    // Database configuration
    $host = '198.54.126.85'; // Database host
    $dbname = 'highdcuf_highfledge'; // Database name
    $username = 'highdcuf_landing'; // Database username
    $password = 'highfledge@1234'; // Database password

    try {
        // Create a PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p style='color: green;'>Connected successfully to the database!</p>";

        // Test query: Replace `your_table` with an actual table name in your database
        $sql = "SELECT * FROM your_table LIMIT 1"; // Simple query to test the connection
        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            // Fetch and display the results if query is successful
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "<p>Query test successful! Here is one record:</p>";
            echo "<pre>" . print_r($row, true) . "</pre>";
        } else {
            echo "<p style='color: orange;'>Query test successful, but no data found in the table.</p>";
        }
        
    } catch (PDOException $e) {
        // Display connection error message
        echo "<p style='color: red;'>Connection failed: " . $e->getMessage() . "</p>";
    }
    ?>
</body>
</html>
