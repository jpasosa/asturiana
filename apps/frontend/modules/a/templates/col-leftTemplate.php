<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>

<div class="col-left-wrapper">
  <?php a_slot("col-left-title", 'aRichText', array('tool' => 'Main')) ?>
  <?php a_slot("col-left-content", 'aText', array('multiline' => true)) ?>
</div>
