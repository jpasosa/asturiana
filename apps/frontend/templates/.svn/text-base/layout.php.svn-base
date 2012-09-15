<?php use_helper('I18N') ?>
<?php // This is a copy of apostrophePlugin/modules/a/templates/layout.php ?>
<?php // It also makes a fine site-wide layout, which gives you global slots on non-page templates ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<?php use_helper('a') ?>
	<?php // If this page is an admin page we don't want to present normal navigation relative to it. ?>
	<?php $page = aTools::getCurrentNonAdminPage() ?>
<head>
  <?php include_http_metas() ?>
	<?php include_metas() ?>
	<?php include_title() ?>
	<?php // 1.3 and up don't do this automatically (no common filter) ?>
  <?php include_stylesheets() ?>
	<?php include_javascripts() ?>
	<link rel="shortcut icon" href="/images/cafe3.ico" />
  <script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
	<!--[if lt IE 7]>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			aIE6(<?php echo ($sf_user->isAuthenticated())? 'true':'false' ?>, <?php echo json_encode(__('You are using IE6! That is just awful! Apostrophe does not support editing using Internet Explorer 6. Why don\'t you try upgrading? <a href="http://www.getfirefox.com">Firefox</a> <a href="http://www.google.com/chrome">Chrome</a> 	<a href="http://www.apple.com/safari/download/">Safari</a> <a href="http://www.microsoft.com/windows/internet-explorer/worldwide-sites.aspx">IE8</a>', null, 'apostrophe')) ?>);
		});		
	</script>
	<![endif]-->	

	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" href="/apostrophePlugin/css/a-ie.css" />	
	<![endif]-->
		
</head>

<?php // body_class allows you to set a class for the body element from a template ?>
<body class="<?php if (has_slot('body_class')): ?><?php include_slot('body_class') ?><?php endif ?><?php if (($sf_user->isAuthenticated())): ?> logged-in<?php endif ?>">

  
  <?php $slug = $page['slug']; ?>
  <?php if($page['level']==2) $slug = $page->getParent()->getSlug(); ?>
  <?php if($page['level']==3) $slug = $page->getParent()->getParent()->getSlug(); ?>
  
  <!-- Desaparece la barra de administracion en secciones estaticas -->
  <?php if($page['level']==0 || $slug=="/empresa" || $slug=="/el-cafe" || $slug=="/contacto" || $slug=="/nuestros-clientes"
          || ($page['level']==1 && $slug=="/productos") || ($page['level']==1 && $slug=="/servicios") ): ?>
    <script type="text/javascript">   
      $(function() {
        $('.a-global-toolbar-buttons.a-controls').css('display','none');
      });    
    </script>
  <?php endif ?>
  <!-- Desaparece posible creacion de hijos en el nivel 3 --> 
  <?php if($page['level']==3): ?>
    <script type="text/javascript">   
      $(function() {
        //$('#a-page-settings-left').css('cssText', 'background-color: red !important');
        $('#a-page-settings-left').css('background-color', 'red'); //no me lo esta tomando  TODO:
      });    
    </script>
  <?php endif ?>


  <?php // Everyone gets this now, but internally it determines which controls you should ?>
  <?php // actually see ?>

  
  <?php include_partial('a/globalTools') ?>

	<div id="a-wrapper">
    <?php slot('a-search', '')  ?>
    <?php slot('a-header', '')  ?>
		<div id="a-header">
      <?php if (has_slot('a-search')): ?>
        <?php include_slot('a-search') ?>
      <?php else: ?>
        <?php include_partial('a/search') ?>
      <?php endif ?>
      
      <?php if (has_slot('a-header')): ?>
        <?php include_slot('a-header') ?>
      <?php else: ?>
          <?php if (has_slot('a-logo')): ?>
            <?php include_slot('a-logo') ?>
          <?php else: ?>
            <?php a_slot("logo", 'aButton', array("global" => true, "width" => 360, "flexHeight" => true, "resizeType" => "s", "link" => "/", "defaultImage" => "/apostrophePlugin/images/cmstest-sample-logo.png")) ?>
          <?php endif ?>
      <?php endif ?>


      <?php include_component('aNavigation', 'tabs', array('root' => '/', 'active' => $page['slug'], 'name' => 'main', 'draggable' => true, 'dragIcon' => false)) # Top Level Navigation ?>
      <div class="cafecito"> </div>
      <?php echo link_to('Home', '@homepage',array('id'=>'home_tab')) ?>





      <?php if ($page):
        $slug = $page['slug'];
        if($page['level']==2) $slug = $page->getParent()->getSlug();
        if($page['level']==3) $slug = $page->getParent()->getParent()->getSlug(); ?>
        <?php if ($page!='contacto' && $page!='Nuestros Clientes' && $page!='Home'): ?>
          <? include_component('aNavigation', 'tabs', array('root' =>$slug , 'active' => $page['slug'],  'name' => 'sub-main', 'draggable' => true, 'dragIcon' => false)); ?>
        <?php endif ?>
      <?php endif ?>
    </div>
    <?php if($page['level']>=2):?> 
            <?$b = explode('/',$page['slug']);
              $b = $b[2]; ?>
            <div id="a-content" class="<?=$b?>">      
    <?php else: ?>
            <? $a = implode(' ',explode('/',$page['slug'])); ?>
            <div id="a-content" class="<?=$a?>">
    <?php endif ?>
              <?php echo $sf_data->getRaw('sf_content') ?>
            </div>
	
    <div id="a-footer">
      <div class="cinta">
        <strong>CAFE 3 | Compañía Asturiana S.R.L. |  www.cafe3asturiana.com.ar </strong>
        <?php if($page['level']!=0): ?>
          <div class="logo"> </div>        
        <?php endif ?>
      </div>
     	<div class="comunicate">
        Comunicate con Nosotros al <strong>4757-5252 / 0072</strong> o al <strong>4712-4000</strong> Líneas rotativas | info@cafe3asturiana.com.ar
     	</div>
    </div>

	</div>

</body>
</html>
