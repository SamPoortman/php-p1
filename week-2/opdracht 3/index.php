<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'nav.php';  ?> <br><br><br>

    <h1>Neem contact met ons op</h1>
    <form action="#" method="post"> 
            <label for="naam">Naam:</label>
            <input type="text" id="naam" name="naam" required>
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="bericht">Bericht:</label>
            <textarea id="bericht" name="bericht" required></textarea>
        </div>
        <div>
            <button type="submit">Verstuur</button>
        </div>
    </form>
<br><br><br>
  <?php include 'footer.php';
    ?>
</body>
</html>