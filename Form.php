<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "funForm.php" method = "get">
        <input type="text" name="num1" placeholder="First Number">
        <select name="op">
            <label>Select operation</label>
            <option>Addition</option>
            <option>Subtraction</option>
        </select>
        <input type="text" name="num2" placeholder="Second Number">
        <button type="submit">Calculate</button>
    </form>
</body>
</html>