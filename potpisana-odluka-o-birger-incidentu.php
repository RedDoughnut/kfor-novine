<!DOCTYPE html>
<html>
<head>
<title>Potpisana Odluka o Birger Incidentu!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<script>
    function btn(X){
        X.classList.toggle("is-active");
        if(X.classList.contains("is-active")){
            document.getElementById("fioka").classList.add("show");
        }
        else{
            document.getElementById("fioka").classList.remove("show");
        }
    }
</script>
<div class="nav">
  <span class="nav2">
  <a class="nav-link" href="index.php"><img src="kforLogo.png" width=100></a>
  <a class="nav-link" href="index.php">Aktuelno</a>
  <a class="nav-link" href="arhiva.php">Arhiva</a>
  <a class="nav-link" href="onama.php">O nama</a>
  </span>
  <span class="nav2">
      <form class="form" action="search.php" method="get">
      <button type="submit">
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
              <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
      </button>
      <input class="input" name="keyword" autocomplete="off" placeholder="Pretraži" type="text">
      <button class="reset" type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
      </button>
  </form>
  </span>
</div>
<div class="mobile-flex">
    <span class="nav2">
        <a class="nav-link" href="index.php"><img src="kforLogo.png" width=120></a>
    </span>
    <span class="nav2">
        <button class="hamburger hamburger--spin" type="button" onclick="btn(this)">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
    </span>

</div>  
<div class="fiokica" id="fioka">
    <ul>
        <li><a class="nav-link" href="index.php">Aktuelno</a></li>
        <li><a class="nav-link" href="arhiva.php">Arhiva</a></li>
        <li><a class="nav-link" href="onama.php">O nama</a></li>
        <li>
          <form class="form" action="search.php" method="get">
      <button>
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
              <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
      </button>
      <input class="input" name="keyword" placeholder="Pretraži" type="text">
      <button class="reset" type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
      </button>
  </form>
        </li>
    </ul>
</div>
<br>
<h1 class="naslov">
  Potpisana Odluka o Birger Incidentu!
</h1>
<p class="datum">
    Datum: 22.04.2025.<br>
</p>

<p class="tekst">

Dana 8. Aprila 2025. godine potpisana je odluka o ocuvanju tkz "Birger incidenta".<br><br>

Ceo dokument objavili smo u ovim novinama.<br>
Dokument je potpisan od strane lidera KFOR-a Relje Zloporubovica i generalnog sekretara KFOR-a Davida Tomica.<br>
Ova odluka je jos jedan korak ka zastiti takozvanog "Birger Incidenta".<br><br>

Izrvsni Odbor KFOR-a (IOK) je demokratski odlucio da se dokument objavi u javnost, da se prosiri odluka da nema vise deljenja poverljivih informacija o incidentu, a takodje i buducim slucajevima.<br><br>

U prilogu skenirani dokument.<br>
<b>KOMUNIZMA NEĆE BITI!</b>
</p>
<div class="image-box">
    <img class="slika" src="odlukaKFOR1.jpg">
    <div class="image-source">Izvor: KFOR</div>
</div>
<div class="image-box">
    <img class="slika" src="odlukaKFOR2.jpg">
    <div class="image-source">Izvor: KFOR</div>
</div>
</body>
</html>