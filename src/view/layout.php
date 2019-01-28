<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Internationaal Straattheater</title>
    <?php echo $css;?>
    <script>
      WebFontConfig = {
        custom: {
          families: ["Abrade Heavy", "Brandon"],
          urls: ["assets/fonts/fonts.css"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "js/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);

      function myFunction(x) {
        x.classList.toggle("change");
      }
    </script>
  </head>

  <body>

      <nav class="nav">
          <ul class="navigatie">
              <!-- <li>
                <a href="index.php" class="link"><img src="./assets/img/logo-sm.png" alt="isb logo" class="logo-nav" /></a>
              </li> -->
              <li class="nav-datum">
                <a href="index.php" class="link"><img src="./assets/img/datum-med.png" height="100px" alt="isb logo" class="" /></a>
              </li>
              <li class="nav-logo">
                <a href="index.php" class="link"><img src="./assets/img/logo-sm.png" alt="isb logo" class="" /></a>
              </li>
              <li class="nav-programma"><a href="index.php?page=programma" class="link beige navlink">Programma</a></li>
              <li class="nav-activiteiten"><a href="index.php?page=programma" class="link beige navlink">activiteiten</a></li>
              <li class="nav-praktisch"><a href="index.php?page=programma" class="link beige navlink">praktisch</a></li>
              <li class="nav-burger">


                <div class="container-hamburger" id="js-navbar-toggle" onclick="myFunction(this)">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                </div>
              </li>
            </ul>

         <ul class="main-nav titel" id="js-menu">
          <li><a href="index.php" class="link">Programma</a></li>
          <li><a href="index.php?page=programma" class="link">Activiteiten</a></li>
          <li><a href="index.php" class="link">Praktisch</a></li>
        </ul>
      </nav>



        <?php echo $content;?>

<footer class="footer">
      <div class="footer-container">
        <button  class= "footer-btn" type="button" data-toggle="collapse" data-target="#home">
          <h3 class="date-txt">Home</h3>
          <p class="date-txt">&#x2B07;</p>
        </button>
        <div id="home" class="collapse">
          <ul class="footer-li">
            <li><a href="" class="link footer-link-sm ">ISB</a></li>
            <li><a href="" class="link footer-link-sm">Voorstellingen</a></li>
            <li><a href="" class="link footer-link-sm">Locatie</a></li>
            <li><a href="" class="link footer-link-sm">Activiteiten</a></li>
            <li><a href="" class="link footer-link-sm">Aftermovie</a></li>
          </ul>
        </div>
        <hr>
        <button  class= "footer-btn" type="button" data-toggle="collapse" data-target="#programma">
            <h3 class="date-txt">Programma</h3>
            <p class="date-txt">&#x2B07;</p>
          </button>
          <div id="programma" class="collapse">
            <ul>
              <li><a href="" class="link footer-link-sm">Uurrooster</a></li>
              <li><a href="" class="link footer-link-sm">Voorstellingen</a></li>
            </ul>
          </div>
          <hr>
          <button  class= "footer-btn" type="button" data-toggle="collapse" data-target="#activiteiten">
              <h3 class="date-txt">Activiteiten</h3>
              <p class="date-txt">&#x2B07;</p>
            </button>
            <div id="activiteiten" class="collapse">
              <ul>
                <li><a href="" class="link footer-link-sm">Ontdek alle activiteiten</a></li>
                <li><a href="" class="link footer-link-sm">Voorstellingen</a></li>
              </ul>
            </div>
            <hr>
            <button  class= "footer-btn" type="button" data-toggle="collapse" data-target="#praktisch">
                <h3 class="date-txt">Praktisch</h3>
                <p class="date-txt">&#x2B07;</p>
              </button>
              <div id="praktisch" class="collapse">
                <ul>
                  <li><a href="" class="link footer-link-sm">Datums</a></li>
                  <li><a href="" class="link footer-link-sm">Locatie</a></li>
                  <li><a href="" class="link footer-link-sm">Contacteer ons</a></li>
                  <li><a href="" class="link footer-link-sm">Social media</a></li>
                  <li><a href="" class="link footer-link-sm">Vrijwilligerswerk</a></li>
                </ul>
              </div>
      </div>

      <div class="updates">
        <h3 class="titel update-titel">Blijf op de hoogte</h3>
        <p class="txt">Volg ons en krijg de laatste updates.</p>
        <input type="email" class="txt email-input" placeholder="email@adres.be">
        <div class="schrijf-in">
          <a href="" class="link btn-schrijf-in titel">Schrijf in</a>
          </div>
      </div>

      <div class="social-media">
          <ul class="social-media-list">
              <li><img src="./assets/img/fb-small.png" alt="facebook" width="50" height="50" class="social-media-btn"></li>
              <li><img src="./assets/img/devine-sm.png" alt="devine" width="50" height="50" class="social-media-btn"></li>
              <li><img src="./assets/img/twitter-sm.png" alt="twitter" width="50" height="50" class="social-media-btn"></li>
          </ul>
      </div>


      <div class="sponsors">
        <img src="./assets/img/beverse-feesten.png" alt="beverse feesten" class="beverse-feesten grid-positie">
        <img src="./assets/img/beveren.png" alt="beveren" class="beveren grid-positie">
        <img src="./assets/img/warande.png" alt="warande" class="warande grid-positie">
        <img src="./assets/img/winkeldorp.png" alt="winkeldorp" class="winkeldorp grid-positie">
      </div>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
