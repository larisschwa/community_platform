<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET Example</title>
</head>
<body>
    <h2>GET Method Example</h2>
    <form action="get_example.php" method="GET">
        <label for="search">Enter Search Term:</label>
        <input type="text" name="search">
        <input type="submit" value="Search">
    </form>

    <?php
    if (isset($_GET['search'])) {
        $search = htmlspecialchars($_GET['search']);
        echo "<p>You searched for: <strong>$search</strong></p>";
    }
    ?>
</body>
</html>
