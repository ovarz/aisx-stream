<?php 
  $page='home';
  require ('inc/base.php')
?>
<?php require ($_SERVER['ASIX_IDWS'].'inc/meta.php')?>
<h1 class="hide"><?php echo $page; ?></h1>
<div class="rancak-container">

  <section title="Menu" class="main-box main-box-1">
    <a aria-label="Link_Title" title="Link_Title" class="main-link" href="">
      <div class="main-link-thumb flex_ori thumb-loading">
        <img alt="Img_Title" class="lazyload" data-original="img/logo.png" />
      </div>
    </a>
	<div class="main-place flex_ori thumb-loading">
	  <img alt="Img_Title" class="lazyload" data-original="img/main-place-1.svg" />
	</div>
  </section>



  <section title="Menu" class="main-box main-box-2">
    <a aria-label="Link_Title" title="Link_Title" class="main-link" href="">
      <div class="main-link-thumb flex_ori thumb-loading">
        <img alt="Img_Title" class="lazyload" data-original="img/logo.png" />
      </div>
    </a>
	<div class="main-place flex_ori thumb-loading">
	  <img alt="Img_Title" class="lazyload" data-original="img/main-place-2.svg" />
	</div>
  </section>



  <section title="Menu" class="main-box main-box-3">
    <a aria-label="Link_Title" title="Link_Title" class="main-link" href="">
      <div class="main-link-thumb flex_ori thumb-loading">
        <img alt="Img_Title" class="lazyload" data-original="img/logo.png" />
      </div>
    </a>
	<div class="main-place flex_ori thumb-loading">
	  <img alt="Img_Title" class="lazyload" data-original="img/main-place-3.svg" />
	</div>
  </section>
  
</div>
  
  

<div class="bg-bottom"></div>
<section title="Streaming" id="uniquePlayer-5" class="webPlayer light audioPlayer float-player">
  <div id="uniqueContainer-5" class="videoPlayer"></div>
  <div style="display:none;" class="playerData">
    {
      "name":"Asix IDWS",
      "autoplay":"true",
      "size":{"width":"510px"},
      "media":{
        "m4a":"http://175.103.48.4:9304/;"
      }
    }
  </div>
</section>
  
  
  
<?php require ($_SERVER['ASIX_IDWS'].'inc/footer.php')?>
<?php require ($_SERVER['ASIX_IDWS'].'inc/base-bottom.php')?>