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
            <div id="myDIV">Zie je vooruitgang in je taalvaardigheid sinds je deelneemt aan 'Mijn Buuf'?</div>
            <input type="radio" name="1" value="keuze1">  😭
            <input type="radio" name="2" value="keuze2">  😢
            <input type="radio" name="3" value="keuze3">  😐
            <input type="radio" name="4" value="keuze4">  😊
            <input type="radio" name="5" value="keuze5">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV2"> Voel je je zelfverzekerd bij het gebruik van de Nederlandse taal in verschillende situaties?</div>
            <input type="radio" name="1" value="keuze6">  😭
            <input type="radio" name="2" value="keuze7">  😢
            <input type="radio" name="3" value="keuze8">  😐
            <input type="radio" name="4" value="keuze9">  😊
            <input type="radio" name="5" value="keuze10">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV3"> Hoe nuttig vind je de taalondersteuning die je krijgt buiten de lesuren?</div>
            <input type="radio" name="1" value="keuze11">  😭
            <input type="radio" name="2" value="keuze12">  😢
            <input type="radio" name="3" value="keuze13">  😐
            <input type="radio" name="4" value="keuze14">  😊
            <input type="radio" name="5" value="keuze15">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV4"> Durf je vaker in het Nederlands te communiceren buiten Mijn Buuf?</div>
            <input type="radio" name="1" value="keuze16">  😭
            <input type="radio" name="2" value="keuze17">  😢
            <input type="radio" name="3" value="keuze18">  😐
            <input type="radio" name="4" value="keuze19">  😊
            <input type="radio" name="5" value="keuze20">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV5"> Hoe goed begrijp je de Nederlandse cultuur en gebruiken?</div>
            <input type="radio" name="1" value="keuze21">  😭
            <input type="radio" name="2" value="keuze22">  😢
            <input type="radio" name="3" value="keuze23">  😐
            <input type="radio" name="4" value="keuze24">  😊
            <input type="radio" name="5" value="keuze25">  😁
            </article>

            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../gezondheid/index.php" method="POST">
            <input class ='terug' type="submit" value="Terug">
        </form>

        <p><button onclick=myFunction()>Translator</button></p>
        <script>
            function myFunction() {
    var Y = document.getElementById("myDIV");
  
    if (Y.innerHTML === "Zie je vooruitgang in je taalvaardigheid sinds je deelneemt aan 'Mijn Buuf'?") {
      Y.innerHTML = "هل لاحظت تقدمًا في مهاراتك اللغوية منذ مشاركتك في 'Mijn Buuf'";
      document.getElementById("myDIV2").innerHTML = "هل تشعر بالثقة في استخدام اللغة الهولندية في مواقف مختلفة؟";
      document.getElementById("myDIV3").innerHTML = "ما مدى فائدة الدعم اللغوي الذي تتلقاه خارج ساعات الدراسة؟";
      document.getElementById("myDIV4").innerHTML = "هل تجرؤ على التواصل باللغة الهولندية في كثير من الأحيان خارج Mijn Buuf؟";
      document.getElementById("myDIV5").innerHTML = "ما مدى فهمك للثقافة والعادات الهولندية؟";
    } else {
      Y.innerHTML = "Zie je vooruitgang in je taalvaardigheid sinds je deelneemt aan 'Mijn Buuf'?";
      document.getElementById("myDIV2").innerHTML = "Voel je je zelfverzekerd bij het gebruik van de Nederlandse taal in verschillende situaties?";
      document.getElementById("myDIV3").innerHTML = "Hoe nuttig vind je de taalondersteuning die je krijgt buiten de lesuren?";
      document.getElementById("myDIV4").innerHTML = "Durf je vaker in het Nederlands te communiceren buiten Mijn Buuf?";
      document.getElementById("myDIV5").innerHTML = "Hoe goed begrijp je de Nederlandse cultuur en gebruiken?";
    }
  }


        </script>


    </main>

    <footer>
        <?php include '../../footer.php'; ?>
    </footer>

    <script type='module' src='../../js/index.js'></script>
    <script type='module' src='../../js/reader.js'></script>
    <script type='module' src='../../js/translate.js'></script>
</body>

</html>

