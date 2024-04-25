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
            <div id="myDIV1">1. Algemeen gezondheid </p>
            <input type="radio" name="1" value="keuze1">  😭
            <input type="radio" name="2" value="keuze2">  😢
            <input type="radio" name="3" value="keuze3">  😐
            <input type="radio" name="4" value="keuze4">  😊
            <input type="radio" name="5" value="keuze5">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV2">2. Je gezondheidszorg</p>
            <input type="radio" name="1" value="keuze6">  😭
            <input type="radio" name="2" value="keuze7">  😢
            <input type="radio" name="3" value="keuze8">  😐
            <input type="radio" name="4" value="keuze9">  😊
            <input type="radio" name="5" value="keuze10">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV3">3. Mentale zorg</p>
            <input type="radio" name="1" value="keuze11">  😭
            <input type="radio" name="2" value="keuze12">  😢
            <input type="radio" name="3" value="keuze13">  😐
            <input type="radio" name="4" value="keuze14">  😊
            <input type="radio" name="5" value="keuze15">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV4">4. je medische hulp </p>
            <input type="radio" name="1" value="keuze16">  😭
            <input type="radio" name="2" value="keuze17">  😢
            <input type="radio" name="3" value="keuze18">  😐
            <input type="radio" name="4" value="keuze19">  😊
            <input type="radio" name="5" value="keuze20">  😁
            </article>

            <article class='vraag-row'>
            <div id="myDIV5">5. Lichamelijke gezond</p>
            <input type="radio" name="1" value="keuze21">  😭
            <input type="radio" name="2" value="keuze22">  😢
            <input type="radio" name="3" value="keuze23">  😐
            <input type="radio" name="4" value="keuze24">  😊
            <input type="radio" name="5" value="keuze25">  😁
            </article>
            <br><br>
            <button class="verder" onclick="Opslaan">Verder</button>
        </form>
        <form class='vragenlijst1' action="../../index.php" method="POST">
            <input class ='terug' type="submit" value="Home">
        </form>

        <p><button onclick=myFunction()>Translator</button></p>
        <script>
            function myFunction() {
    var Y = document.getElementById("myDIV");
  
    if (Y.innerHTML === " Algemeen gezondheid") {
      Y.innerHTML ="الصحة العامة";
      document.getElementById("myDIV2").innerHTML = "الرعاية الصحية الخاصة بك";
      document.getElementById("myDIV3").innerHTML = "الرعاية العقلية";
      document.getElementById("myDIV4").innerHTML = "مساعدتك الطبية";
      document.getElementById("myDIV5").innerHTML = "سليم جسديا";
    } else {
      Y.innerHTML = "Algemeen gezondheid";
      document.getElementById("myDIV2").innerHTML = "Je gezondheidszorg";
      document.getElementById("myDIV3").innerHTML = "Mentale zorg";
      document.getElementById("myDIV4").innerHTML = "je medische hulp";
      document.getElementById("myDIV5").innerHTML = "Lichamelijke gezond";
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

😊😁😢😐😭