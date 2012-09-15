<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>



<div class="postal-wrapper">
  <div class="postal-contenedora">
    <div class="foto-postal">
      <?php a_slot("imagen-postal", 'aImage', array("width" => 429,"height" => 312, "resizeType" => "s", "FlexHeight" => "false","defaultImage" => "/images/foto_servicios1.jpg")) ?>
    </div>              
    <div class="titulo">
      <?php a_slot("tit-postal", 'aText', array('tool' => 'basic')) ?>
    </div>
    <div class="descripcion">
      <?php a_slot("desc-postal", 'aText', array('multiline' => true)) ?>
    </div>
    <?php if($page->hasChildren() || $page['level']==3 ) include_component('aNavigation', 'tabs', array('root' => $page['slug'],'active' => $page['slug'],  'name' => 'postal', 'draggable' => true, 'dragIcon' => false));?>
  </div>
</div>




