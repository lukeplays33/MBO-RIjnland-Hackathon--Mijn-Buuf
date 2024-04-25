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
        <form class='vragenlijst' action="../taal/index.php" method="POST">
            <h2>Gezondheid</h2>
            <article class='vraag-row'>
            <p>1. Voel je je gezond en energiek? </p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Neutraal
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <article class='vraag-row'>
            <p>2. Heb je toegang tot gezondheidszorg wanneer dat nodig is?</p>
            <input type="radio" name="1" value="keuze1">  Helemaal niet
            <input type="radio" name="2" value="keuze2">  Nee
            <input type="radio" name="3" value="keuze3">  Neutraal
            <input type="radio" name="4" value="keuze4">  Soms
            <input type="radio" name="5" value="keuze5">  Ja
            </article>

            <article class='vraag-row'>
            <p>3. Hoe beoordeel je je algehele gezondheid op een schaal van 1 tot 5?</p>
            <input type="radio" name="1" value="keuze1">  1(zeer slecht)
            <input type="radio" name="2" value="keuze2">  2(slecht)
            <input type="radio" name="3" value="keuze3">  3(neutraal)
            <input type="radio" name="4" value="keuze4">  4(goed)
            <input type="radio" name="5" value="keuze5">  5(zeer goed)
            </article>

            <article class='vraag-row'>
            <p>4. Hoe vaak zoek je medische hulp?</p>
            <input type="radio" name="1" value="keuze1"> Nooit
            <input type="radio" name="2" value="keuze2"> Zelden
            <input type="radio" name="3" value="keuze3"> Af en toe
            <input type="radio" name="4" value="keuze4"> Vaak
            <input type="radio" name="5" value="keuze5"> Altijd
            </article>

            <article class='vraag-row'>
            <p>5. Hoe vaak doe je aan lichamelijke activiteit per week?</p>
            <input type="radio" name="vraag5" value="keuze1">  Nooit
            <input type="radio" name="vraag5" value="keuze2">  Zelden
            <input type="radio" name="vraag5" value="keuze3">  Af en toe
            <input type="radio" name="vraag5" value="keuze4">  Regelmatig
            <input type="radio" name="vraag5" value="keuze5">  Dagelijks
            </article>
            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../../index.php" method="POST">
            <input class ='terug' type="submit" value="Home">
        </form>


    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
    <script type='module' src='../../js/reader.js'></script>
</body>

</html>