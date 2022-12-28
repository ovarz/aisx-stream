<?php 
  $page='home';
  require ('inc/base.php')
?>
<?php require ($_SERVER['ASIX_IDWS'].'inc/meta.php')?>
<h1 class="hide"><?php echo $page; ?></h1>
<div class="rancak-container">

  <section class="section-container">
    <span class="width-max">
	  tes
    </span>
  </section>
  
  
  
  <div class="bg-bottom"></div>
  
  
  
  <div class="float-player-bg"></div>
  <section id="uniquePlayer-5" class="webPlayer light audioPlayer float-player">
    <div id="uniqueContainer-5" class="videoPlayer"></div>
    <div style="display:none;" class="playerData">
      {
        "name":"sonic",
        "autoplay":"true",
        "size":{"width":"510px"},
        "media":{
          "m4a":"http://175.103.48.4:9304/;"
        }
      }
    </div>
  </section>
  
</div>
<?php require ($_SERVER['ASIX_IDWS'].'inc/footer.php')?>
<?php require ($_SERVER['ASIX_IDWS'].'inc/base-bottom.php')?>