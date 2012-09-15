<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>col-left<?php end_slot() ?>
<?php slot('a-breadcrumb','') ?>

<div class="recetas-wrapper">
  <div class="lado-izq">
    <?php if(($page->hasChildren()) || ($page['level']=3)) include_component('aNavigation', 'tabs', array('root' => $page['slug'],'active' => $page['slug'],  'name' => 'colores', 'draggable' => true, 'dragIcon' => false));?>
    <script type="text/javascript">   
      $(function() {
        $('.a-nav-colores li').each(function(i){
          $(this).addClass('item-'+i);
        });
      });    
    </script>
  </div>
  <div class="lado-der">
    <div class="arriba">
      <div class="datos-receta">
        <div class="superior">
          <div class="titulo">
            <?php a_slot("recetas-tit-nombre", 'aText', array('tool' => 'basic')) ?>
          </div>
          <div class="descripcion">
            <?php a_slot("recetas-con-descripcion", 'aText', array('multiline' => true)) ?>
          </div>
        </div>
        <div class="inferior">      
          <div class="tit-ingredientes">
            <?php a_slot("recetas-tit-ingred", 'aText', array('tool' => 'Main')) ?>
          </div>
          <div class="cont-ingredientes">
            <?php a_slot("recetas-con-ingred", 'aText', array('multiline' => true)) ?>
          </div>
        </div>
      </div>
      <div class="foto-receta">
        <?php a_slot("imagen-receta", 'aImage', array("width" => 398,"height" => 368, "resizeType" => "c", "defaultImage" => "/images/receta1-asturiana.jpg")) ?>
      </div>
    </div>
    <div class="abajo">
      <div class="preparacion">
        <?php a_slot("recetas-tit-preparacion", 'aText', array('tool' => 'Main')) ?>
      </div>
      <div class="txt-preparacion">
        <?php a_slot("recetas-con-preparacion", 'aText', array('multiline' => true)) ?>
      </div>
    </div>
  </div>
</div>