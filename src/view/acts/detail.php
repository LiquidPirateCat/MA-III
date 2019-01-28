<main>

<article class="detail-act">
<div class="foto-container-acts detail-img" style="background-image: url(<?php echo "./" . $act['img'];?>)"></div>

  <h1 class="titel gold"><?php echo $act['titel'];?></h1>
  <h2 class="detail-groep titel black"><?php echo $act['artiest'];?></h2>
  <p class="detail-beschrijving txt"><?php echo $act['bio'];?></p>
  <a href="www.closeacttheater.com" class="link detail-website txt"><?php echo $act['website'];?></a>
  <div class="detail-praktisch">
    <div class="detail-datum titel"><span class="dag-filter">vrij</span><span class="datum-filter">24|08</span></div>
    <div class="detail-tijdsduur titel">40 <span class="dag-filter">min</span> </div>
  </div>
  <p class="detail-locatie titel gray"><?php echo $act['locatie'];?></p>
  <p class="detail-uur titel"><?php echo $act['uur'];?>0</p>
  </article>

  <img src="./assets/img/robots.jpg" width="100%" alt="robots" class="detail-omslagfoto">


<section class="volgende-voorstelling">

  <h2 class="titel blue next-show">Volgende voorstelling</h2>

  <div class="grid-alignment pos-next">
  <article class="acts">
  <h2 class="act-titel titel">i-Puppets</h2>
  <p class="act-soort titel">Straatact</p>
  <img class="act-foto" src="./assets/img/act-image-sm.png" width="150" height="150" alt="foto">
  <div class="act-tijd">17u00</div>
  <img class="act-datum" src="./assets/img/datum.png" alt="datum" width="70" height="70">
  <div class="button act-discover"><a href=""></a> ontdek meer</div>

  </div>

</section>
</main>
