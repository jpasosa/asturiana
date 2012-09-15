<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>

<?php slot('a-subnav') ?>
  <?php include_component('aNavigation', 'tabs', array('root' => '/empresa', 'name' => 'sub-main', 'draggable' => true, 'dragIcon' => false)) # Top Level Navigation ?>
<?php end_slot() ?> 


<div class="home-wrapper">
  <div class="parte_izq">
    <div class="botones">
      <div class="nuestro_cafe">
        <?=link_to(image_tag('/images/home_nuestrocafe.jpg', array('width'=>'49', 'height'=>'49', 'alt'=>'imagen')), '@el_cafe') ?>        
        <h2> <?=link_to('NUESTRO CAFE', '@el_cafe', array('class'=>'titulo')) ?> </h2>
        <p class="contenido"> Nuestros Productos </p>
      </div>
      <div class="recetas">
        <?=link_to(image_tag('/images/home_receta.jpg', array('width'=>'49', 'height'=>'49', 'alt'=>'imagen')), '@recetas') ?>        
        <h2> <?=link_to('RECETAS', '@recetas', array('class'=>'titulo')) ?> </h2>
        <p class="contenido"> Preparación con Café </p>
      </div>
      <div class="preparacion">
        <?=link_to(image_tag('/images/btn_preparacion.jpg', array('width'=>'49', 'height'=>'49', 'alt'=>'imagen')), '@preparacion') ?>        
        <h2> <?=link_to('PREPARACION', '@preparacion', array('class'=>'titulo')) ?> </h2>        
        <p class="contenido"> El mejor café </p>
      </div>
    </div>
    <div class="texto_centrado">
      <p> Desde hace 50 años trabajamos a diario para ofrecerle la máxima calidad y el servicio más eficaz. </p>
      <p>Para ello contamos con instalaciones y recursos humanos que junto a nuestra basta experiencia, permiten alcanzar los más altos niveles de calidad. </p>
    </div>
    <img src="/images/home_lacompania.png" width="178" height="47" alt="imagen" />
  </div>
</div>