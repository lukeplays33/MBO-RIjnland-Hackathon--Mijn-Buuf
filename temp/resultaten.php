<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luke, Noah, Malik, Walid, ">
    <meta name="description" content="Een formulier/vragenlijst">
    <meta name="keywords"
        content="Gezondheid, Wonen, Sociale contacten, Werken, Taal">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" href="../assetds/images/OIG4.jpeg" type="image/x-icon">
    <title>Mijn Buuf Resultaten</title>
</head>

<body>
    <header>
        <?php include '../header.php'; ?>
    </header>
    <main class='resultatenGrid'>
        <section>
            <article class='card feedback'>
                <h2>Feedback</h2>
                <p id='feedbackText'>Tips voor het verbeteren van je resultaten:</p>
            </article>
            <article class='card knoppen'>
                <button id='exporteer'>Exporteer data</button>
                <button id='opslaan'>Sla data op</button>
            </article>
        </section>

        <section>
            <article class='card web'>
            <h2>Resultaten</h2>
                <article id='diagram'>
                    <div class='staaf' id='Gezondheid'>Gezondheid</div>
                    <div class='staaf' id='Wonen'>Wonen</div>
                    <div class='staaf' id='Werken'>Werken</div>
                    <div class='staaf' id='SocialeContacten'>Sociale Contacten</div>
                    <div class='staaf' id='Taal'>Taal</div>
                    <div class='staaf' id='Veiligheid'>Veiligheid</div>
                </article>
            </article>
        </section>
        <!-- de main zal hier plaats vinden -->
    </main>

    <footer>
        <?php include '../footer.php'; ?>
    </footer>

    <script type='module' src='../js/index.js'></script>
    <script type='module' src='../js/resultaten.js'></script>
    <script type='module' src='../js/feedback.js'></script>
</body>

</html>