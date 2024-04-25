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
        <form class='vragenlijst' action="../Wonen/index.php" method="POST">
            <h2>Taal</h2>
            <article class='vraag-row'>
            <p>1. Zie je vooruitgang in je taal sinds je deelneemt aan 'Mijn Buuf'?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Een beetje
            <input type="radio" name="4" value="keuze4">  Ja
            <input type="radio" name="5" value="keuze5">  Helemaal wel
            </article>

            <article class='vraag-row'>
            <p>2. Voel je je zelfverzekerd bij het gebruik van de Nederlandse taal?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Neutraal
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <article class='vraag-row'>
            <p>3. Hoe nuttig vind je de taalondersteuning die je krijgt buiten de lesuren?</p>
            <input type="radio" name="1" value="keuze1"> Helemaal niet nuttig
            <input type="radio" name="2" value="keuze2"> Niet nuttig
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Nuttig
            <input type="radio" name="5" value="keuze5"> Zeer nuttig
            </article>

            <article class='vraag-row'>
            <p>4. Durf je vaker in het Nederlands te communiceren buiten Mijn Buuf?<p>
            <input type="radio" name="1" value="keuze1">  Nee
            <input type="radio" name="2" value="keuze2">  Meestal niet
            <input type="radio" name="3" value="keuze3">  Een beetje
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <article class='vraag-row'>
            <p>5. Hoe goed begrijp je de Nederlandse cultuur en gebruiken?</p>
            <input type="radio" name="1" value="keuze1"> Zeer slecht
            <input type="radio" name="2" value="keuze2"> Slecht
            <input type="radio" name="3" value="keuze3"> Neutraal
            <input type="radio" name="4" value="keuze4"> Goed
            <input type="radio" name="5" value="keuze5"> Zeer goed
            </article>

            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../gezondheid/index.php" method="POST">
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