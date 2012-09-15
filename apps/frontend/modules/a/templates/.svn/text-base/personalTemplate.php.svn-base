<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>

<div class="personal-wrapper">
  <div class="cuadro-grande">
    <span class="titulo"> Nuestro Personal </span>
    <div class="foto-grande"> </div>
  </div>
  
  <div class="cuadro-carrousel">
    <div id="wrap">
      <div class="jcarousel-scroll">
          <a href="#" id="mycarousel-prev"></a>
          <a href="#" id="mycarousel-next"></a>
      </div>

      <div id="mycarousel" class="jcarousel-skin-asturiana">
        <ul>
          <li><a href="/images/personal/foto1-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto1-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto2-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto2-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto3-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto3-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto4-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto4-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto5-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto5-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto6-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto6-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto7-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto7-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto8-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto8-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto9-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto9-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto10-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto10-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto11-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto11-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto12-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto12-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto13-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto13-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto14-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto14-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto15-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto15-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto16-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto16-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto17-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto17-c.jpg" alt="" /></a></li>
          <li><a href="/images/personal/foto18-g.jpg"><img class="foto" width="150" height="112" src="/images/personal/foto18-c.jpg" alt="" /></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  $('img.foto').mouseover(function(){
    $('img.foto').css('cursor', 'pointer');
    $(this).css('opacity','0.4');    
  });
  $('img.foto').mouseout(function(){
    $(this).css('opacity','1');    
  });

  $('#mycarousel ul li a').click(function(ev){
    ev.preventDefault();
    $('.foto-grande').css('background', 'url("'+this.href+'") no-repeat center center');
    }
  );
 

/**
 * We use the initCallback callback
 * to assign functionality to the controls
 */
function mycarousel_initCallback(carousel) {
    jQuery('.jcarousel-control a').bind('click', function() {
        carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });

    jQuery('.jcarousel-scroll select').bind('change', function() {
        carousel.options.scroll = jQuery.jcarousel.intval(this.options[this.selectedIndex].value);
        return false;
    });

    jQuery('#mycarousel-next').bind('click', function() {
        carousel.next();
        return false;
    });

    jQuery('#mycarousel-prev').bind('click', function() {
        carousel.prev();
        return false;
    });
};

  

  

// Ride the carousel...
jQuery(document).ready(function() {
    jQuery("#mycarousel").jcarousel({
        scroll: 5,
        initCallback: mycarousel_initCallback,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null,
        animation: "slow"
    });
});

</script>

