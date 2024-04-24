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
            <p>1. Vraag 1?</p>
            <input type="radio" name="vraag1" value="keuze1"> Keuze 1
            <input type="radio" name="vraag1" value="keuze2"> Keuze 2
            <input type="radio" name="vraag1" value="keuze3"> Keuze 3
            <input type="radio" name="vraag1" value="keuze4"> Keuze 4
            <input type="radio" name="vraag1" value="keuze5"> Keuze 5
            </article>

            <article class='vraag-row'>
            <p>2. Vraag 2?</p>
            <input type="radio" name="vraag2" value="keuze1"> Keuze 1
            <input type="radio" name="vraag2" value="keuze2"> Keuze 2
            <input type="radio" name="vraag2" value="keuze3"> Keuze 3
            <input type="radio" name="vraag2" value="keuze4"> Keuze 4
            <input type="radio" name="vraag2" value="keuze5"> Keuze 5
            </article>

            <article class='vraag-row'>
            <p>3. Vraag 3?</p>
            <input type="radio" name="vraag3" value="keuze1"> Keuze 1
            <input type="radio" name="vraag3" value="keuze2"> Keuze 2
            <input type="radio" name="vraag3" value="keuze3"> Keuze 3
            <input type="radio" name="vraag3" value="keuze4"> Keuze 4
            <input type="radio" name="vraag3" value="keuze5"> Keuze 5
            </article>

            <article class='vraag-row'>
            <p>4. Vraag 4?</p>
            <input type="radio" name="vraag4" value="keuze1"> Keuze 1
            <input type="radio" name="vraag4" value="keuze2"> Keuze 2
            <input type="radio" name="vraag4" value="keuze3"> Keuze 3
            <input type="radio" name="vraag4" value="keuze4"> Keuze 4
            <input type="radio" name="vraag4" value="keuze5"> Keuze 5
            </article>

            <article class='vraag-row'>
            <p>5. Vraag 5?</p>
            <input type="radio" name="vraag5" value="keuze1"> Keuze 1
            <input type="radio" name="vraag5" value="keuze2"> Keuze 2
            <input type="radio" name="vraag5" value="keuze3"> Keuze 3
            <input type="radio" name="vraag5" value="keuze4"> Keuze 4
            <input type="radio" name="vraag5" value="keuze5"> Keuze 5
            </article>

            <br><br>
            <input type="submit" value="Verder">
        </form>
    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
</body>

</html>