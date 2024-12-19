<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vliegtuigen</title>
</head>
<body>
    <form action="proces.php" method="POST">
        <label for="name">naam vliegtuig</label>
        <input type="text" id="name" name="name">

        <label for="available">Ja</label>
        <input type="radio" id="available" name="available" value="ja">
        <label for="available">Nee</label>
        <input type="radio" id="available" name="available" value="nee">

        <label for="stock">Voorraad</label>
        <input type="number" id="stock" name="stock">

        <input type="submit" name="submit_form" value="toevoegen">
    </form>

    
</body>
</html>