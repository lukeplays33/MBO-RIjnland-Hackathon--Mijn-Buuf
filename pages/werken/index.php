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
            <p>1. Ben je tevreden met je huidige werk/leerervaring bij 'Mijn Buuf'?</p>
            <input type="radio" name="1" value="keuze1">  😭
            <input type="radio" name="2" value="keuze2">  😢
            <input type="radio" name="3" value="keuze3">  😐
            <input type="radio" name="4" value="keuze4">  😊
            <input type="radio" name="5" value="keuze5">  😁
            </article>
            </article>

            <article class='vraag-row'>
            <p>2. Voel je je bekwaam en zelfverzekerd in de skills die je leert?</p>
            <input type="radio" name="1" value="keuze6">  😭
            <input type="radio" name="2" value="keuze7">  😢
            <input type="radio" name="3" value="keuze8">  😐
            <input type="radio" name="4" value="keuze9">  😊
            <input type="radio" name="5" value="keuze10">  😁
            </article>

            <article class='vraag-row'>
            <p>3. Hoe nuttig vind je de skills die je leert voor je toekomstige werk? </p>
            <input type="radio" name="1" value="keuze11">  😭
            <input type="radio" name="2" value="keuze12">  😢
            <input type="radio" name="3" value="keuze13">  😐
            <input type="radio" name="4" value="keuze14">  😊
            <input type="radio" name="5" value="keuze15">  😁
            </article>

            <article class='vraag-row'>
            <p>4. Krijg je hulp van 'Mijn Buuf' bij het vinden van werk of stages?</p>
            <input type="radio" name="1" value="keuze16">  😭
            <input type="radio" name="2" value="keuze17">  😢
            <input type="radio" name="3" value="keuze18">  😐
            <input type="radio" name="4" value="keuze19">  😊
            <input type="radio" name="5" value="keuze20">  😁
            </article>

            <article class='vraag-row'>
            <p>5. Hoe tevreden ben je over de leeractiviteiten bij 'Mijn Buuf'?</p>
            <input type="radio" name="1" value="keuze21">  😭
            <input type="radio" name="2" value="keuze22">  😢
            <input type="radio" name="3" value="keuze23">  😐
            <input type="radio" name="4" value="keuze24">  😊
            <input type="radio" name="5" value="keuze25">  😁
            </article>

            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../wonen/index.php" method="POST">
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