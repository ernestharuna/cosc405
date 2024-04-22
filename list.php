<!DOCTYPE html>
<html>

<head>
    <title>List News Item</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utils.css">
</head>

<body>
    <header id="Header">
        <h1>newsbox: all news</h1>
        <h3>all the news in a box</h3>
    </header>
    <section id="AllNews">
        <div class="HBar BorderShadow"></div>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "news_item";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if category parameter is set in the URL
            if (isset($_GET['category'])) {
                // Filter resources based on the category parameter
                $category = $_GET['category'];
                $sql = "SELECT id, title, summary, submittor FROM news_item WHERE category = '$category'";
            } else {
                // If category parameter is not set, retrieve all resources
                $sql = "SELECT id, title, summary, submittor FROM news_item";
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                <article>
                    <p class="BorderShadow"><strong><?php echo $row["title"]; ?></strong></p>
                    <p class="BorderShadow"><?php echo $row["summary"]; ?></p>
                    <p class="BorderShadow"><?php echo $row["submittor"]; ?></p>
                </article>
                <div class="HBar BorderShadow"></div>
        <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </section>
    <footer id="Footer">
        <p>Project News-X</p>
    </footer>
</body>


</html>