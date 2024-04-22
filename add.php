<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["title"]) && isset($_POST["summary"]) && isset($_POST["submittor"])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "news_item";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO news_item (title, link, summary, category, submittor) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $title, $link, $summary, $category, $submittor);

        $title = $_POST["title"];
        $link = $_POST["link"];
        $summary = $_POST["summary"];
        $category = $_POST["category"];
        $submittor = $_POST["submittor"];

        $stmt->execute();

        $stmt->close();
        $conn->close();

        header("Location: index.php");
        exit();
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
?>
    <!DOCTYPE html>

    <head>
        <title>Add News Item</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="utils.css">
    </head>

    <body>

        <header id="Header">
            <h1>newsbox: add news item</h1>
            <h3>all the news in a box</h3>
        </header>
        <section id="AddItem">
            <form action="<?php $_PHP_SRELF ?>" method="POST">
                <table border="0" cellpadding="5" cellspacing="5">
                    <tr>
                        <td>
                            <label for="title">title</label>
                        </td>
                        <td>
                            <input type="text" name="title" class="field BorderShadow" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="link">link</label>
                        </td>
                        <td>
                            <input type="text" name="link" class="field BorderShadow" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="summary">summary</label>
                        </td>
                        <td>
                            <textarea name="summary" class="field BorderShadow" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="category">category</label>
                        </td>
                        <td>
                            <select name="category" class="field2 BorderShadow">
                                <option value="politics">Politics</option>
                                <option value="sport">Sport</option>
                                <option value="technology">Technology</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="submittor">submittor</label>
                        </td>
                        <td>
                            <input type="text" name="submittor" class="field BorderShadow" />
                        </td>
                    </tr>
                </table>
                <button value="Submit" class="btn">
                    Submit
                </button>
            </form>
        </section>
        <footer id="Footer">
            <p>Project News-X</p>
        </footer>
    </body>

    </html>
<?php
} else {
    // Redirect to index.php for any other HTTP methods
    header("Location: index.php");
    exit();
}
?>