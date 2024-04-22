<!DOCTYPE html>
<html>

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
        <form>
            <table border="0" cellpadding="5" cellspacing="5">
                <tr>
                    <td>
                        <label for="title">title</label>
                    </td>
                    <td>
                        <input type="text" name="title" value="" class="field BorderShadow" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="link">link</label>
                    </td>
                    <td>
                        <input type="text" name="link" value="" class="field BorderShadow" required/>
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
                        <input type="text" name="submittor" value="" class="field BorderShadow" />
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