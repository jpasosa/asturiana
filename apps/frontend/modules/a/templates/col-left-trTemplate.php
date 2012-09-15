<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>



<div class="col-left-tr-wrapper">
  <div class="cuadro">
    <div class="titulo">  
      <?php a_slot("cl-tr-titulo", 'aRichText', array('tool' => 'Main')) ?>
    </div>
    <div class="contenido">
      <?php a_slot("cl-tr-contenido", 'aText', array('multiline' => true)) ?>
    </div>
  </div>
</div>


