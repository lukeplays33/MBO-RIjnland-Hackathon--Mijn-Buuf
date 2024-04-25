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
        <form class='vragenlijst' action="../../temp/resultaten.php" method="POST">
            <h2>Veiligheid</h2>
            <article class='vraag-row'>
            <p>1. Voel u zich veilig als u op straat loopt?</p>
            <input type="radio" name="1" value="keuze1"> Helemaal niet
            <input type="radio" name="2" value="keuze2"> Nee
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Ja
            <input type="radio" name="5" value="keuze5"> Zeker Ja
            </article>

            <article class='vraag-row'>
            <p>2. Voelt u zich veilig in uw leefomgeving?</p>
            <input type="radio" name="1" value="keuze1"> Helemaal niet
            <input type="radio" name="2" value="keuze2"> Nee
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Ja
            <input type="radio" name="5" value="keuze5"> Zeker Ja
            </article>

            <article class='vraag-row'>
            <p>3. Hoe tevreden bent u met de beveiliging in Nederland?</p>
            <input type="radio" name="1" value="keuze1"> Zeer ontevreden
            <input type="radio" name="2" value="keuze2"> Ontevreden
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Tevreden
            <input type="radio" name="5" value="keuze5"> Zeer tevreden
            </article>

            <article class='vraag-row'>
            <p>4. Voelt u zich veilig in Nederland? </p>
            <input type="radio" name="1" value="keuze1"> Helemaal niet
            <input type="radio" name="2" value="keuze2"> Nee
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Ja
            <input type="radio" name="5" value="keuze5"> Zeker Ja
            </article>

            <article class='vraag-row'>
            <p>5. Voelt u zich veilig in 'Mijn Buuf'?</p>
            <input type="radio" name="1" value="keuze1"> Nee
            <input type="radio" name="2" value="keuze2"> Nee
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Ja
            <input type="radio" name="5" value="keuze5"> Zeker Ja
            </article>

            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../sociale contacten/index.php" method="POST">
            <input class ='terug' type="submit" value="Terug">
        </form>


    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
    <script type='module' src='../../js/reader.js'></script>
</body>

</html>