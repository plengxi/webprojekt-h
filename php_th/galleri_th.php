<section id="gals">



<script type="text/javascript">
function show()
{
  document.getElementById('hidden').style.display = 'block';
  document.getElementById('first').style.visibility = 'hidden';
  document.getElementById('showdeco ').style.display = 'none';
  document.getElementById('deco').style.display = 'block';

}

function hide() {
  document.getElementById('hidden').style.display = 'none';
  document.getElementById('first').style.visibility = 'visible';
  document.getElementById('showdeco ').style.display = 'block';

}
</script>

<div id="topgal" class=".goldbandContainer">

  <div class="goldband"></div>

</div>


<div class="headlinecontainer">

  <h1  class="headline" ><span style="color:#F5CB3C; font-size: 3.438rem; ">แ</span>กลเลอรี</h1>

  <div class="lowline2">

    <div style="background-color: #F4CB3C; " class="line"></div>

  </div>

</div>

<img class="decor1 flip" src="../svg/thaidecor.svg" alt="decoration">


<div class="firstpics">

  <img class="pics" src="../img/room1.1.jpg" alt="room">
  <img class="pics" src="../img/room2.2.jpg" alt="room">
  <img class="pics" src="../img/olja.jpg" alt="massageolja">
  <img class="pics" src="../img/certifikat.jpeg" alt="certificate">
  <img class="pics" id="tablet1" src="../img/tidning.jpg" alt="artikel">
  <img class="pics" id="tablet2" src="../img/room2.jpg" alt="room">

</div>

<div href="#" id="visamercontainer">

    <a type="button" class="visamer" id="first" onclick="show()">ดูเพิ่มเติม</a>

</div>

<div id="hidden">

  <div class="firstpics another" >

    <img class="pics" id="tablet3" src="../img/tidning.jpg" alt="artikel">
    <img class="pics" id="tablet4" src="../img/room2.jpg" alt="room">
    <img class="pics" src="../img/fotnerver.jpeg" alt="fotnerver">
    <img class="pics" src="../img/room2.3.jpg" alt="room">
    <img class="pics" src="../img/handgjordakort.jpg" alt="presentkort">
    <img class="pics" src="../img/handduksvan.jpg" alt="svan">
    <img class="pics" src="../img/olja3.jpg" alt="oljor">
    <img class="pics" src="../img/kvittot.jpeg" alt="kvittot">
    <img class="pics" src="../img/certificat1.jpg" alt="certificate">

</div>


<div href="#" id="visamercontainer" class="second">

  <a type="button" class="visamer" onclick="hide()">ดูน้อยลง</a>

</div>

<div>

  <img class="decor" id="deco" src="../svg/thaidecor.svg" alt="decoration">

</div>


</div>

<img class="decor2" id="showdeco "src="../svg/thaidecor.svg" alt="decoration">

</section>
