<li class="a-admin-batch-actions-choice">
  <select name="batch_action">
    <option value=""><?php echo __('Choose an action', array(), 'apostrophe') ?></option>
    <option value="batchDelete"><?php echo __('Delete', array(), 'a-admin') ?></option>  </select>
  <input type="hidden" name="_csrf_token" value="d0f203b854e97ac40e40dd4c48c656e2" />
	<?php echo jq_link_to_function(__('Go', null, 'apostrophe'), '$("#a-admin-batch-form").submit();', array('class' => 'a-btn', )) ?>
</li>
