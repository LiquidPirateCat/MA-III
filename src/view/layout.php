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
    <header>
<<<<<<< HEAD
      <nav class="nav">
          <ul class="navigatie">
              <li>
                <a href="index.php" class="link"><img src="./assets/img/logo-sm.png" alt="isb logo" class="logo-nav" /></a>
=======
      <nav>
          <ul class="navigatie">
              <li>
                <a href="index.php" class="link"><img src="./assets/img/logo-sm.png" alt=""/></a>
>>>>>>> 04db903dac7f57ffae58305ad266edef35b1c35a
              </li>
              <li><a href="index.php?page=programma" class="link beige">Programma</a></li>
              <li>
                <div class="container-hamburger" id="js-navbar-toggle" onclick="myFunction(this)">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
                </div>
              </li>
            </ul>

         <ul class="main-nav titel" id="js-menu">
<<<<<<< HEAD
          <li><a href="index.php" class="link">Programma</a></li>
          <li><a href="index.php?page=programma" class="link">Activiteiten</a></li>
=======
          <li><a href="index.php" class="link">Home</a></li>
          <li><a href="index.php?page=programma" class="link">Programma</a></li>
>>>>>>> 04db903dac7f57ffae58305ad266edef35b1c35a
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
<<<<<<< HEAD
            <li><a href="" class="link ">Test</a></li>
=======
            <li><a href="" class="link">Test</a></li>
>>>>>>> 04db903dac7f57ffae58305ad266edef35b1c35a
            <li><a href="" class="link">Test</a></li>
            <li><a href="" class="link">Test</a></li>
          </ul>
        </div>
        <hr>
        <button  class= "footer-btn" type="button" data-toggle="collapse" data-target="#programma">
            <h3 class="date-txt">Programma</h3>
            <p class="date-txt">&dharl;</p>
          </button>
          <div id="programma" class="collapse">
            <ul>
              <li class="link">test</li>
              <li><a href="" class="link">Test</a></li>
              <li><a href="" class="link">Test</a></li>
            </ul>
          </div>
          <hr>
          <button  class= "footer-btn" type="button" data-toggle="collapse" data-target="#activiteiten">
              <h3 class="date-txt">Activiteiten</h3>
              <p class="date-txt">&dharl;</p>
            </button>
            <div id="activiteiten" class="collapse">
              <ul>
                <li>test</li>
                <li><a href="" class="link">Test</a></li>
                <li><a href="" class="link">Test</a></li>
              </ul>
            </div>
            <hr>
            <button  class= "footer-btn" type="button" data-toggle="collapse" data-target="#praktisch">
                <h3 class="date-txt">Praktisch</h3>
                <p class="date-txt">&dharl;</p>
              </button>
              <div id="praktisch" class="collapse">
                <ul>
                  <li>test</li>
                  <li><a href="" class="link">Test</a></li>
                  <li><a href="" class="link">Test</a></li>
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
