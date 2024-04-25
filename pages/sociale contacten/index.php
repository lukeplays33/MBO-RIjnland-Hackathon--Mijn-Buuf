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
            <h2>Sociale Contacten</h2>
            <article class='vraag-row'>
            <p>1. Heb je vrienden gemaakt binnen 'Mijn Buuf'? Zo ja hoeveel?</p>
            <input type="radio" name="1" value="keuze1">  Ik voel me nog niet comfortabel
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Heb 1 vriend gemaakt
            <input type="radio" name="4" value="keuze4">  Een aantal
            <input type="radio" name="5" value="keuze5">  Heel veel
            </article>
            </article>

            <article class='vraag-row'>
            <p>2. Neem je deel aan sociale activiteiten buiten 'Mijn Buuf'?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Zelden
            <input type="radio" name="3" value="keuze3">  Soms
            <input type="radio" name="4" value="keuze4">  Vaak
            <input type="radio" name="5" value="keuze5">  Altijd Ja
            </article>
            </article>

            <article class='vraag-row'>
            <p>3. Voel je je welkom in de gemeenschap waarin je woont?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Een beetje
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>
            </article>

            <article class='vraag-row'>
            <p>4. Heb je toegang tot sociale ondersteuning buiten 'Mijn Buuf'?</p>
            <input type="radio" name="1" value="keuze1">  Nee
            <input type="radio" name="2" value="keuze2">  Zelden
            <input type="radio" name="3" value="keuze3">  Een beetje
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <article class='vraag-row'>
            <p>5. Voel je je gesteund door je mede-deelnemers bij 'Mijn Buuf'??</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Niet vaak
            <input type="radio" name="3" value="keuze3">  Een beetje
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../werken/index.php" method="POST">
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