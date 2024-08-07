<?php
    require($_SERVER['DOCUMENT_ROOT'] . "/simple_crud/Database/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style/style.css">
    <title>PHP BASIC CRUD</title>
</head>
<body>
    <div class="inputfield">
        <form action="POST">
            <label for="">input any name</label>
            <input type="text" placeholder="Enter any name">
            <button>Add to table</button>
        </form>
    </div>

    <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Names</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>test</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>