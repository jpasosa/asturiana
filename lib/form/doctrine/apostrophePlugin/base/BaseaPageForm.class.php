<?php

/**
 * aPage form base class.
 *
 * @method aPage getObject() Returns the current form's model object
 *
 * @package    asturiana
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseaPageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'slug'                  => new sfWidgetFormTextarea(),
      'template'              => new sfWidgetFormInputText(),
      'view_is_secure'        => new sfWidgetFormInputCheckbox(),
      'archived'              => new sfWidgetFormInputCheckbox(),
      'admin'                 => new sfWidgetFormInputCheckbox(),
      'author_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'add_empty' => true)),
      'deleter_id'            => new sfWidgetFormInputText(),
      'engine'                => new sfWidgetFormInputText(),
      'created_at'            => new sfWidgetFormDateTime(),
      'updated_at'            => new sfWidgetFormDateTime(),
      'lft'                   => new sfWidgetFormInputText(),
      'rgt'                   => new sfWidgetFormInputText(),
      'level'                 => new sfWidgetFormInputText(),
      'media_categories_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'aMediaCategory')),
      'blog_categories_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'aBlogCategory')),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'slug'                  => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'template'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'view_is_secure'        => new sfValidatorBoolean(array('required' => false)),
      'archived'              => new sfValidatorBoolean(array('required' => false)),
      'admin'                 => new sfValidatorBoolean(array('required' => false)),
      'author_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'required' => false)),
      'deleter_id'            => new sfValidatorInteger(array('required' => false)),
      'engine'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'            => new sfValidatorDateTime(),
      'updated_at'            => new sfValidatorDateTime(),
      'lft'                   => new sfValidatorInteger(array('required' => false)),
      'rgt'                   => new sfValidatorInteger(array('required' => false)),
      'level'                 => new sfValidatorInteger(array('required' => false)),
      'media_categories_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'aMediaCategory', 'required' => false)),
      'blog_categories_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'aBlogCategory', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('a_page[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'aPage';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['media_categories_list']))
    {
      $this->setDefault('media_categories_list', $this->object->MediaCategories->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['blog_categories_list']))
    {
      $this->setDefault('blog_categories_list', $this->object->BlogCategories->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveMediaCategoriesList($con);
    $this->saveBlogCategoriesList($con);

    parent::doSave($con);
  }

  public function saveMediaCategoriesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['media_categories_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->MediaCategories->getPrimaryKeys();
    $values = $this->getValue('media_categories_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('MediaCategories', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('MediaCategories', array_values($link));
    }
  }

  public function saveBlogCategoriesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['blog_categories_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->BlogCategories->getPrimaryKeys();
    $values = $this->getValue('blog_categories_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('BlogCategories', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('BlogCategories', array_values($link));
    }
  }

}
