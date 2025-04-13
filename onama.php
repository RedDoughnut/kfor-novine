<!DOCTYPE html>
<html>
<head>
<title>HTML CSS JS</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
  <span>
  <a class="nav-link" href="index.php"><img src="https://upload.wikimedia.org/wikipedia/sr/c/cd/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B5%D1%80_%D0%A2%D0%92.png" width=150></a>
  <a class="nav-link" href="index.php">Aktuelno</a>
  <a class="nav-link" href="arhiva.php">Arhiva</a>
  <a class="nav-link" href="onama.php">O nama</a>
  </span>
  <span>
      <form class="form" action="search.php" method="get">
      <button type="submit">
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
  </span>
</div>
<div class="mobile-flex">
    <span>
        <a class="nav-link" href="index.php"><img src="https://upload.wikimedia.org/wikipedia/sr/c/cd/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B5%D1%80_%D0%A2%D0%92.png" width=240></a>
    </span>
    <span>
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
<center><h1>O nama</h1></center>
<p style="font-size: 1.2rem;">
    Naš izvršni odbor, zajedničkim snagama, otvorio je ovaj predivan sajt za lakše informisanje članova o događajima u stranci i školi.<br>
    Ovaj sajt nikako ne promoviše nasilje niti obojenu revoluciju bilo kakve vrste! Mi smo grupa mladih prosperitetnih učenika Matematičke gimnazije u Beogradu, i ne želimo nasilje nikakve vrste, apsolutno nikakve.<br><br>
    Takođe, ovaj sajt dozvoljava drugim strankama da daju izjave koje mi nećemo nikako karikirati, na stranici |reči drugih| (još u procesu pravljenja).<br><br>

    Hvala svim budućim čitaocima!<br><br>

    Želimo pravdu i jednakost za sve!<br>
    <b>KOMUNIZMA NEĆE BITI!</b>
</p>
</body>
</html>