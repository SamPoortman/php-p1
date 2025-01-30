<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php include "navbar.php"; ?>

        <h1>Contact</h1>

        <form>
            <input type="text" name="forename" id="forename">
            <label for="forename">Voornaam</label>
            <br>
            <br>

            <input type="text" name="lastname" id="lastname">
            <label for="lastname">Achternaam</label>
            <br>
            <br>

            <input type="text" name="mail" id="mail">
            <label for="mail">E-mail</label>
            <br>
            <br>

            <input type="text" name="Message" id="Message">
            <label for="Message">Bericht</label>
            <br>
            <br>

            <button id= "knopje">Lever in</button>

        </form>

        <?php include "footer.php";?>

</body>
</html>