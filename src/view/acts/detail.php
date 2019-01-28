<main>

<article class="detail-act">
<div class="foto-container-acts detail-img" style="background-image: url(<?php echo "./" . $act['img'];?>)"></div>

  <h1 class="titel gold"><?php echo $act['titel'];?></h1>
  <h2 class="detail-groep titel black"><?php echo $act['artiest'];?></h2>
  <p class="detail-beschrijving txt"><?php echo $act['bio'];?></p>
  <a href="www.closeacttheater.com" class="link detail-website txt"><?php echo $act['website'];?></a>
  <div class="detail-praktisch">
    <div class="detail-datum titel"><span class="dag-filter">vrij</span><span class="datum-filter">24|08</span></div>
    <div class="detail-tijdsduur titel"><?php echo $act['tijdsduur'];?> <span class="dag-filter">min</span> </div>
  </div>
  <p class="detail-locatie titel gray"><?php echo $act['locatie'];?></p>
  <p class="detail-uur titel"><?php echo $act['uur'];?></p>
  </article>

  <img src="./assets/img/robots.jpg" width="100%" alt="robots" class="detail-omslagfoto">


<section class="volgende-voorstelling">

  <div class="grid-alignment">

<article class="acts">

<h2 class="act-titel titel"><?php echo $act['titel'];?></h2>
<p class="act-soort titel"><?php echo $act['soort'];?></p>

<div class="foto-container-acts" style="background-image: url(<?php echo "./" . $act['img'];?>)"></div>
<!-- <img class="act-foto" src=""  alt="foto"> -->


<?php if($act['uur'] != "Doorlopend"){ ?>
<div class="act-tijd  "> <?php echo  $act['uur'];?></div>
<?php } ?>

<img class="act-datum <?php if($act['uur'] == "Doorlopend"){ echo "act-geen-tijd"; }?> " src="./assets/img/datum.png" alt="datum" width="85" height="85">
<a href="index.php?page=detail&amp;id=<?php echo $act['id'];?>" class="act-discover button">ontdek meer</a>

</article>

</div>

</section>
</main>
