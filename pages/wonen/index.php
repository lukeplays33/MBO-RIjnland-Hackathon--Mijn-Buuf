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
        <form class='vragenlijst' action="../werken/index.php" method="POST">
            <h2>Wonen</h2>
            <article class='vraag-row'>
            <p>1. Voel je je comfortabel in je huidige woonomgeving?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Een beetje
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <article class='vraag-row'>
            <p>2. Heb je voldoende ruimte en privacy in je huis?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Een beetje
            <input type="radio" name="4" value="keuze4">  Net genoeg
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <article class='vraag-row'>
            <p>3. Hoe tevreden ben je over de hygiëne en netheid van je huis?</p>
            <input type="radio" name="1" value="keuze1"> Zeer ontevreden
            <input type="radio" name="2" value="keuze2"> Ontevreden
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Tevreden
            <input type="radio" name="5" value="keuze5"> Zeer tevreden
            </article>

            <article class='vraag-row'>
            <p>4. Hoe gemakkelijk vind je het om je huur of hypotheek te betalen?</p>
            <input type="radio" name="1" value="keuze1"> Zeer moeilijk
            <input type="radio" name="2" value="keuze2"> Moeilijk
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Gemakkelijk
            <input type="radio" name="5" value="keuze5"> Zeer gemakkelijk
            </article>

            <article class='vraag-row'>
            <p>5. Heb je toegang tot water, elektriciteit en verwarming?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Soms
            <input type="radio" name="4" value="keuze4">  Vaak
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <br><br>
            <input class='verder' type="submit" value="Verder">
        </form>
        <form class='vragenlijst1' action="../taal/index.php" method="POST">
            <input class ='terug' type="submit" value="Terug">
        </form>


    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
</body>

</html>