<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>



<div class="servicio-wrapper">
  <div class="cuadro_transp">
    <div class="titulo"> NUESTROS SERVICIOS </div>
    <div class="descripcion">
      <?php a_slot("desc-postal", 'aText', array('multiline' => true)) ?>
    </div>
    <?php if($page->hasChildren()) include_component('aNavigation', 'tabs', array('root' => $page['slug'],'active' => $page['slug'],  'name' => 'servicios', 'draggable' => true, 'dragIcon' => false));?>
  </div>
</div>



