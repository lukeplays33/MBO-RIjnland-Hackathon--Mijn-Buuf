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
            <h2>Veiligheid</h2>
            <article class='vraag-row'>
            <p>1. Voelt u zich thuis of in de buurt veilig?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>2. Voelt u zich over het algemeen veilig tijdens uw wandelingen of over straat?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>3.  Voelt u zich veilig in Nederland?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee

            <article class='vraag-row'>
            <p>4. Weet u hoe u de politie kan bellen tijdens noodgevallen?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee

            <article class='vraag-row'>
            <p>5. Bent u tevreden met de beveiligingsdienst in Nederland? </p>
            <input type="radio" name="vraag5" value="keuze1"> Zeer ontevreden
            <input type="radio" name="vraag5" value="keuze2"> Ontevreden
            <input type="radio" name="vraag5" value="keuze3"> Neutraal
            <input type="radio" name="vraag5" value="keuze4"> Tevreden
            <input type="radio" name="vraag5" value="keuze5"> Zeer tevreden
            </article>

            <br><br>
            <input class='verder' type="submit" value="Verder">
        </form>
        <form class='vragenlijst' action="../sociale contacten/index.php" method="POST">
            <input class ='terug' type="submit" value="Terug">
        </form>

    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
</body>

</html>