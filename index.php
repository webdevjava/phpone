<!DOCTYPE html>

<html>

<head>
    <title>Calculator</title>


</head>

<body>
    <form action="form.php" method="POST">


        <label>One:</label><br>
        <input type="text" name="first"><br>
        <label>Two:</label><br>
        <input type="text" name="second"><br>


        <select name="calculation">
            <option value="addition">Addition</option>
            <option value="minus">Minus</option>
            <option value="multiply">Multiply</option>
            <option value="division">Division</option>
        </select>



        <input type="submit" name="submit" value="ENTER">
    </form>
</body>

</html>
