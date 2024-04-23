<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luke, Noah, Malik, Walid, ">
    <meta name="description" content="Een formulier/vragenlijst">
    <meta name="keywords"
        content="Gezondheid, Wonen, Sociale contacten, Werken, Taal">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <title>Mijn Buuf Formulier</title>
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <main>
    <form action="POST">
    <h2>Gezondheid:</h2>
    <label class="Vraag">
        Voel je je over het algemeen gezond en energiek?<br>
        <input class="Yes" type="button" name="ja" value="&#128077; Ja"><input class="No" type="button" name="nee" value="&#128078; Nee"><br>
    </label>

    <label class="Vraag">
        Heb je toegang tot gezondheidszorg wanneer dat nodig is?<br>
        <input class="Yes" type="button" name="ja" value="&#128077; Ja"><input class="No" type="button" name="nee" value="&#128078; Nee"><br>
    </label>
     
    <label class="Vraag">
       Hoe beoordeel je je algehele gezondheid?<br>
    <input type="radio" value='1' name='gezondheid_rating'>1
    <input type="radio" value='2' name='gezondheid_rating'>2
    <input type="radio" value='3' name='gezondheid_rating'>3
    <input type="radio" value='4' name='gezondheid_rating'>4
    <input type="radio" value='5' name='gezondheid_rating'>5<br>
    </label>
    <label class="Vraag">
      Hoe vaak zoek je medische hulp?<br>
      <select name="medische_hulp">
        <option value="Nooit">Nooit</option>
        <option value="Zelden">Zelden</option>
        <option value="Af en toe">Af en toe</option>
        <option value="Vaak">Vaak</option>
        <option value="Altijd">Altijd</option>
    </select><br>
    </label>
    <label class="Vraag">
        Hoe vaak doe je aan lichamelijke activiteit per week?<br>
        <select name="lichamelijke activiteit">
        <option value="Nooit">Nooit</option>
        <option value="Zelden">Zelden(1-2 keer)</option>
        <option value="Af en toe">Af en toe(3-4 keer)</option>
        <option value="Vaak">Vaak(5-6 keer)</option>
        <option value="Dagelijks">Dagelijks</option>
    </select><br>
    </label>
</form>  
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <script type='module' src='js/index.js'></script>
</body>

</html>