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
            <div id="myDIV">1. Heb je vrienden gemaakt binnen 'Mijn Buuf'? Zo ja hoeveel?</div>
            <input type="radio" name="1" value="keuze1">  😭
            <input type="radio" name="2" value="keuze2">  😢
            <input type="radio" name="3" value="keuze3">  😐
            <input type="radio" name="4" value="keuze4">  😊
            <input type="radio" name="5" value="keuze5">  😁
            </article>
            </article>

            <article class='vraag-row'>
            <div id="myDIV2">2. Neem je deel aan sociale activiteiten buiten 'Mijn Buuf'?</div>
            <input type="radio" name="1" value="keuze6">  😭
            <input type="radio" name="2" value="keuze7">  😢
            <input type="radio" name="3" value="keuze8">  😐
            <input type="radio" name="4" value="keuze9">  😊
            <input type="radio" name="5" value="keuze10">  😁
            </article>
            </article>

            <article class='vraag-row'>
            <div id="myDIV3">3. Voel je je welkom in de gemeenschap waarin je woont?</div>
            <input type="radio" name="1" value="keuze11">  😭
            <input type="radio" name="2" value="keuze12">  😢
            <input type="radio" name="3" value="keuze13">  😐
            <input type="radio" name="4" value="keuze14">  😊
            <input type="radio" name="5" value="keuze15">  😁
            </article>
            </article>

            <article class='vraag-row'>
            <div id="myDIV4">4. Heb je toegang tot sociale ondersteuning buiten 'Mijn Buuf'?</div>
            <input type="radio" name="1" value="keuze16">  😭
            <input type="radio" name="2" value="keuze17">  😢
            <input type="radio" name="3" value="keuze18">  😐
            <input type="radio" name="4" value="keuze19">  😊
            <input type="radio" name="5" value="keuze20">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV5">5. Voel je je gesteund door je mede-deelnemers bij 'Mijn Buuf'?</div>
            <input type="radio" name="1" value="keuze21">  😭
            <input type="radio" name="2" value="keuze22">  😢
            <input type="radio" name="3" value="keuze23">  😐
            <input type="radio" name="4" value="keuze24">  😊
            <input type="radio" name="5" value="keuze25">  😁
            </article>

            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../werken/index.php" method="POST">
            <input class ='terug' type="submit" value="Terug">
        </form>

        <p><button onclick=myFunction()>Translator</button></p>
        <script>
            function myFunction() {
    var Y = document.getElementById("myDIV");
  
    if (Y.innerHTML === " Heb je vrienden gemaakt binnen 'Mijn Buuf'? Zo ja hoeveel?") {
      Y.innerHTML = "هل قمت بتكوين صداقات داخل 'Mijn Buuf'؟ إذا كان الأمر كذلك، كم؟";
      document.getElementById("myDIV2").innerHTML = "هل تشارك في الأنشطة الاجتماعية خارج Mijn Buuf";
      document.getElementById("myDIV3").innerHTML = "هل تشعر بالترحيب في المجتمع الذي تعيش فيه؟";
      document.getElementById("myDIV4").innerHTML = "هل تجرؤ على التواصل باللغة الهولندية في كثير من الأحيان خارج Mijn Buuf؟";
      document.getElementById("myDIV5").innerHTML = "هل تشعر بدعم زملائك المشاركين في 'Mijn Buuf'";
    } else {
      Y.innerHTML = " Heb je vrienden gemaakt binnen 'Mijn Buuf'? Zo ja hoeveel?";
      document.getElementById("myDIV2").innerHTML = "Neem je deel aan sociale activiteiten buiten 'Mijn Buuf'?";
      document.getElementById("myDIV3").innerHTML = " Voel je je welkom in de gemeenschap waarin je woont?";
      document.getElementById("myDIV4").innerHTML = "Durf je vaker in het Nederlands te communiceren buiten Mijn Buuf?";
      document.getElementById("myDIV5").innerHTML = " Voel je je gesteund door je mede-deelnemers bij 'Mijn Buuf'?";
    }
  }


        </script>


    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
    <script type='module' src='../../js/reader.js'></script>
</body>

</html>