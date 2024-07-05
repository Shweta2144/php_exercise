<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Interaction Example</title>
</head>
<body>
    <h2>Database Interaction Example</h2>
    <?php
    // Database connection details
    $dsn = 'mysql:host=localhost;dbname=mydatabase';
    $username = 'root';
    $password = '';

    try {
        // Connect to the database using PDO
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // CREATE operation: Insert a new record
        $name = 'John Doe';
        $email = 'john.doe@example.com';
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        echo "New record created successfully.<br>";

        // READ operation: Retrieve and display all records
        $stmt = $pdo->query("SELECT * FROM users");
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<h3>All Users:</h3>";
        foreach ($users as $user) {
            echo "ID: " . $user['id'] . " - Name: " . $user['name'] . " - Email: " . $user['email'] . "<br>";
        }

        // UPDATE operation: Update a record
        $newEmail = 'john.new@example.com';
        $stmt = $pdo->prepare("UPDATE users SET email = :email WHERE name = :name");
        $stmt->bindParam(':email', $newEmail);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        echo "Record updated successfully.<br>";

        // DELETE operation: Delete a record
        $stmt = $pdo->prepare("DELETE FROM users WHERE name = :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        echo "Record deleted successfully.<br>";

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
</body>
</html>
