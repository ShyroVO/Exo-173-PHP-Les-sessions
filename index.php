<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sessions</title>
</head>
<body style="background-color:<?php echo $_GET['color'] ?>">
<div>

    <form method="get" action="script.php">
        <label>
            Select color of your life:
            <select name="color">
                <option value="blue">Blue</option>
                <option value="green">Green</option>
                <option value="purple">Purple</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
            </select>
            <input type="submit" value="Submit">
        </label>
    </form>

</div>
</body>
</html>