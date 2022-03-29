<link rel="stylesheet" href="../css/galleri.min.css">

<script type="text/javascript">
function show()
{
  document.getElementById('hidden').style.display = 'block';
  document.getElementById('first').style.visibility = 'hidden';

}

function hide() {
  document.getElementById('hidden').style.display = 'none';
  document.getElementById('first').style.visibility = 'visible';

}
</script>

<div class=".goldbandContainer">

  <img id="goldband" style=" width: 100%; " src="../svg/goldband.svg" alt="goldband">

</div>


<div class="headlinecontainer">

  <h1  class="headline" ><span style="color:#F5CB3C; font-size: 3.438rem; ">G</span>alleri</h1>

  <div class="lowline2">

    <div style="background-color: #F4CB3C; " class="line"></div>

  </div>

</div>

<div class="firstpics">

  <img id="pic1" src="../img/room1.1.jpg" alt="room">
  <img id="pic2" src="../img/room2.2.jpg" alt="room">
  <img id="pic3" src="../img/olja.jpg" alt="massageolja">
  <img id="pic4" src="../img/certifikat.jpeg" alt="certificate">

</div>

<div href="#" id="visamercontainer">

    <a type="button" class="visamer" id="first" onclick="show()">Visa mer</a>

</div>

<div id="hidden">

  <div  class="firstpics" >

    <img class="pics" src="../img/tidning.jpg" alt="artikel">
    <img class="pics" src="../img/room2.jpg" alt="room">
    <img class="pics" src="../img/fotnerver.jpeg" alt="fotnerver">
    <img class="pics" src="../img/room2.3.jpg" alt="room">
    <img class="pics" src="../img/handgjordakort.jpg" alt="presentkort">
    <img class="pics" src="../img/handduksvan.jpg" alt="svan">
    <img class="pics" src="../img/olja3.jpg" alt="oljor">
    <img class="pics" src="../img/kvittot.jpeg" alt="kvittot">
    <img class="pics" src="../img/certificat1.jpg" alt="certificate">

</div>


<div href="#" id="visamercontainer" class="second">

  <a type="button" class="visamer" onclick="hide()">Visa mindre</a>

</div>

</div>
