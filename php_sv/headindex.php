<body>
<head>
  <section id="heas">

  <link rel="stylesheet" href="../css/headindex.min.css">

  <script type="text/javascript">

  function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function botFunction() {
window.scrollTo(0,document.querySelector('#scroll').scrollHeight);
}

  </script>

<nav>
  <div class="logobar">
    <img id="logo" src="../svg/logo.svg" alt="logo">
  </div>
  <img onclick="topFunction()" class="btt" src="../svg/backtotop.svg" alt="btt">
</nav>

<div class="welcome">
<div class="weltext">
<h1>Välkommen!</h1>
<p>Uppleva Åmåls bästa thaimassage!<br>
Känslor som du aldrig har haft innan.</p>
</div>
</div>

  <ul>
    <li><a href="#ommigs">OM MIG</a></li>
    <li><a href="#pristop">PRISER</a></li>
    <li><a href="#topboka">BOKA TID</a></li>
    <li><a href="#topbeh">BEHANDLINGAR</a></li>
    <li><a href="#topgal">GALLERI</a></li>
    <li><a onclick="botFunction()" >KONTAKT</a></li>
  </ul>


    <div class="flaggor">
      <a href="../index.php"><img src="../svg/svenskflag.svg" alt="svenska"></a>
    <a href="../enlang.php"><img src="../svg/ukflag.svg" alt="engelska"></a>
    <a href="../thlang.php"><img src="../svg/thaiflag.svg" alt="thai"></a>
    </div>

<div id="dec"><img class="decor" src="../svg/thaidecor.svg" alt="decoration"></div>
</section>
</head>
