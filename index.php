<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <form action="greeting.php" method="GET">
        <label for="paragraph">Inserisci il tuo testo</label>
        <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="text"></textarea>

        <label for="censored">Inserisci la tua bad word</label>
        <input type="text" id="word" name="word" placeholder="bad word">

        <button type="submit">Invia</button>
    </form>
    </div>
</body>
</html>