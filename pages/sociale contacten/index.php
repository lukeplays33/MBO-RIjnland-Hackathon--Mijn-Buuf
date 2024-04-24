<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luke, Noah, Malik, Walid, ">
    <meta name="description" content="Een formulier/vragenlijst">
    <meta name="keywords"
        content="Gezondheid, Wonen, Sociale contacten, Werken, Taal">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <title>Mijn Buuf Formulier</title>
</head>

<body>
    <header>
        <?php include '../../header.php'; ?>
    </header>
    <main>
        <form class='vragenlijst' action="../veiligheid/index.php" method="POST">
            <h2>Gezondheid</h2>
            <article class='vraag-row'>
            <p>1. Heb je vrienden gemaakt binnen 'Mijn Buuf'?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>2. Neem je deel aan sociale activiteiten buiten 'Mijn Buuf' met mede-statushouders of andere mensen?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>3. Voel je je op je gemak en welkom in de bredere gemeenschap waarin je woont?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>4. Heb je toegang tot ondersteuningssystemen voor sociale integratie buiten 'Mijn Buuf'?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>5. Voel je je gesteund door je mede-deelnemers bij 'Mijn Buuf'??</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <br><br>
            <input class='verder' type="submit" value="Verder">
            <input class ='terug' type="submit" value="Terug">
        </form>

    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
</body>

</html>