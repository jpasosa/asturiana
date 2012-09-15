<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?=$page?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>

<?php slot('a-subnav') ?>
  <?php include_component('aNavigation', 'tabs', array('root' => '/empresa', 'name' => 'sub-main', 'draggable' => true, 'dragIcon' => false)) # Top Level Navigation ?>
<?php end_slot() ?> 


<div class="col-left-wrapper">
  <?php a_slot("col-left-title", 'aRichText', array('tool' => 'Main')) ?>
  <?php a_slot("col-left-content", 'aText', array('multiline' => true)) ?>
</div>