<!DOCTYPE html>
<html>
<head>
<title>Otvorene KFOR Vesti!</title>
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
  Otvorene KFOR vesti!
</h1>
<p class="datum">
    Datum: 12.04.2025.<br>
</p>
<div class="image-box">
    <img class="slika" src="ugovorStrankiKFORiKRS.jpg">
    <div class="image-source">Izvor: KFOR</div>
</div>
<p class="tekst">

Na ovaj divan dan, otvorene su KFOR vesti. Ovo je jedan od brojnih ukazatelja da KFOR raste iz dana u dan.<br><br> Iza ovih vesti su najviši i najpoverljiviji članovi KFOR-a.<br> Na ovim vestima čitaćete informacije o stranci KFOR, kao i o školi o kojoj je reč. <br><br>
Takođe, posetite našu stranicu <a href="onama.php" style="color: deepskyblue">O nama</a>, da biste saznali još informacija o ovim novinama!<br>
Hvala svim budućim čitaocima!<br>
<b>KOMUNIZMA NEĆE BITI!</b>
</p>
</body>
</html>