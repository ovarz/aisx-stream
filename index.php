<?php 
  $page='home';
  require ('inc/base.php')
?>
<?php require ($_SERVER['ASIX_IDWS'].'inc/meta.php')?>
<h1 class="hide"><?php echo $page; ?></h1>
<div class="rancak-container">

  <a aria-label="Link_Title" title="Link_Title" class="back-to-home" href="https://www.asixplus.io/">
    <?php require ($_SERVER['ASIX_IDWS'].'img/icon/back.svg')?>
	<span>Back To Home</span>
  </a>



  <section title="Menu" class="main-box main-box-1">
    <button title="Musics" class="main-link open-sticky">
      <div class="main-link-thumb flex_ori thumb-loading">
        <img alt="Img_Title" class="lazyload" data-original="img/logo.png" />
      </div>
    </button>
	<h2 class="main-name">HD Musics</h2>
	<div class="main-place flex_ori thumb-loading">
	  <img alt="Img_Title" class="lazyload" data-original="img/main-place-1.svg" />
	</div>
  </section>



  <section title="Menu" class="main-box main-box-2">
    <button title="Videos" class="main-link open-sticky">
      <div class="main-link-thumb flex_ori thumb-loading">
        <img alt="Img_Title" class="lazyload" data-original="img/logo.png" />
      </div>
    </button>
	<h2 class="main-name">HD Videos</h2>
	<div class="main-place flex_ori thumb-loading">
	  <img alt="Img_Title" class="lazyload" data-original="img/main-place-2.svg" />
	</div>
  </section>



  <section title="Menu" class="main-box main-box-3">
    <button title="Podcast" class="main-link open-sticky">
      <div class="main-link-thumb flex_ori thumb-loading">
        <img alt="Img_Title" class="lazyload" data-original="img/logo.png" />
      </div>
    </button>
	<h2 class="main-name">Podcast</h2>
	<div class="main-place flex_ori thumb-loading">
	  <img alt="Img_Title" class="lazyload" data-original="img/main-place-3.svg" />
	</div>
  </section>



  <section title="Menu" class="main-box main-box-4">
    <button title="Others" class="main-link open-sticky">
      <div class="main-link-thumb flex_ori thumb-loading">
        <img alt="Img_Title" class="lazyload" data-original="img/logo.png" />
      </div>
    </button>
	<h2 class="main-name">Others</h2>
	<div class="main-place flex_ori thumb-loading">
	  <img alt="Img_Title" class="lazyload" data-original="img/main-place-1.svg" />
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
  
  
	
<div id="popup-Videos" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
	<?php require ($_SERVER['ASIX_IDWS'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
	<div class="rancak-popup-box">
	  Coming Soon
	</div>
  </div>
</div>
  
  
	
<div id="popup-Musics" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
	<?php require ($_SERVER['ASIX_IDWS'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
	<div class="rancak-popup-box">
	  Coming Soon
	</div>
  </div>
</div>
  
  
	
<div id="popup-Podcast" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
	<?php require ($_SERVER['ASIX_IDWS'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
	<div class="rancak-popup-box">
	  Coming Soon
	</div>
  </div>
</div>
  
  
	
<div id="popup-Others" class="rancak-popup hide">
  <div class="rancak-popup-overlay"></div>
  <button title="Close" class="popup-close-button rancak-popup-close content_center">
	<?php require ($_SERVER['ASIX_IDWS'].'img/icon/close.svg')?>
  </button>
  <div class="rancak-popup-container content_center">
	<div class="rancak-popup-box">
	  Coming Soon
	</div>
  </div>
</div>



<?php require ($_SERVER['ASIX_IDWS'].'inc/footer.php')?>
<?php require ($_SERVER['ASIX_IDWS'].'inc/base-bottom.php')?>