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
        <form class='vragenlijst' action="../sociale contacten/index.php" method="POST">
            <h2>Werken</h2>
            <article class='vraag-row'>
            <p>1. Heb je toegang tot essentiële voorzieningen zoals water, elektriciteit en verwarming?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>2. Voel je je bekwaam en zelfverzekerd in de vaardigheden die je leert?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>3. Hoe nuttig vind je de vaardigheden die je leert voor je toekomstige werk?</p>
            <input type="radio" name="1" value="keuze1"> Helemaal niet nuttig
            <input type="radio" name="2" value="keuze2"> Niet nuttig
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Nuttig
            <input type="radio" name="4" value="keuze5"> Zeer nuttig
            </article>

            <article class='vraag-row'>
            <p>4. Ervaar je ondersteuning van 'Mijn Buuf' bij het vinden van betaald werk of stages?</p>
            <input type="radio" name="Ja" value="keuze1"> Ja
            <input type="radio" name="Nee" value="keuze2"> Nee
            </article>

            <article class='vraag-row'>
            <p>5. Hoe tevreden ben je over de mate van variëteit in de aangeboden leeractiviteiten bij 'Mijn Buuf'?</p>
            <input type="radio" name="1" value="keuze1"> Zeer ontevreden
            <input type="radio" name="2" value="keuze2"> Ontevreden
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Tevreden
            <input type="radio" name="5" value="keuze5"> Zeer tevreden
            </article>

            <br><br>
            <input class='verder' type="submit" value="Verder">
        </form>
        <form class='vragenlijst' action="../wonen/index.php" method="POST">
            <input class ='terug' type="submit" value="Terug">
        </form>


    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
</body>

</html>