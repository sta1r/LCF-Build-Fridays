<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">
 
	<?php $mb->the_field('imgurl'); ?>
	<?php $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('Use as banner'); ?>
 
	<p>
		<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
		<?php echo $wpalchemy_media_access->getButton(array('label' => 'Select banner image')); ?>
	</p>
 
	<p>
		<?php $mb->the_field('description'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
		<span>Enter a description</span>
	</p>
	
	<?php //$mb->the_field('imgurl2'); ?>
	<?php //$wpalchemy_media_access->setGroupName('nn2')->setInsertButtonLabel('Insert This')->setTab('gallery'); ?>
 
<!--	<p>
		<?php //echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
		<?php //echo $wpalchemy_media_access->getButton(array('label' => 'Add Image From Library')); ?>
	</p>
-->	
 
</div>