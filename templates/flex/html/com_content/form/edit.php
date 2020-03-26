<?php
/**
 * Flex @package Helix Framework
 * @author Aplikko http://www.aplikko.com
 * @copyright Copyright (c) 2020 Aplikko
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;

//Load Helix
$helix3_path = JPATH_PLUGINS . '/system/helix3/core/helix3.php';

if (file_exists($helix3_path)) {
    require_once($helix3_path);
    $this->helix3 = helix3::getInstance();
} else {
    die('Please install and activate helix plugin');
}

JHtml::_('stylesheet', 'system/frontediting.css', array(), true);
JHtml::_('script', 'system/frontediting.js', false, true);
helix3::addCSS('templates/flex/css/frontend-edit.css');
helix3::addJS('templates/flex/js/frontend-edit.js');

JHtml::_('behavior.tabstate');
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
JHtml::_('behavior.calendar');
JHtml::_('behavior.modal', 'a.modal_jform_contenthistory');
JHtml::_('formbehavior.chosen', '#jform_catid', null, array('disable_search_threshold' => 0));
JHtml::_('formbehavior.chosen', 'select');
$this->tab_name = 'com-content-form';
$this->ignore_fieldsets = array('image-intro', 'image-full', 'jmetadata', 'item_associations');

// Create shortcut to parameters.
$params = $this->state->get('params');
//$images = json_decode($this->item->images);
//$urls = json_decode($this->item->urls);

// This checks if the editor config options have ever been saved. If they haven't they will fall back to the original settings.
$editoroptions = isset($params->show_publishing_options);
if (!$editoroptions)
{
	$params->show_urls_images_frontend = '0';
}

JFactory::getDocument()->addScriptDeclaration("
	Joomla.submitbutton = function(task)
	{
		if (task == 'article.cancel' || document.formvalidator.isValid(document.getElementById('adminForm')))
		{
			" . $this->form->getField('articletext')->save() . "
			Joomla.submitform(task);
		}
	}
");
?>
<div class="edit item-page<?php echo $this->pageclass_sfx; ?>">
	<?php if ($params->get('show_page_heading', 1)) { ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($params->get('page_heading')); ?>
		</h1>
	</div>
	<?php } ?>

	<form action="<?php echo JRoute::_('index.php?option=com_content&a_id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate form-vertical com-content-adminForm">
		<div class="btn-toolbar">
			<button type="button" class="btn btn-success" onclick="Joomla.submitbutton('article.save')">
				<i class="fas fa-check"></i> <?php echo JText::_('JSAVE') ?>
			</button>
			<?php
				if ($params->get('save_history', 0)) {
					$contenthistory = str_replace( 'btn', 'btn btn-primary', $this->form->getInput('contenthistory') );
					echo ( str_replace('icon-archive', 'fas fa-archive', $contenthistory) );
				}
			?>
			<button type="button" class="btn btn-danger" onclick="Joomla.submitbutton('article.cancel')">
				<i class="fas fa-times"></i> <?php echo JText::_('JCANCEL') ?>
			</button>
		</div>

		<fieldset>
			<ul class="nav nav-tabs">
				<li class="active"><a href="#editor" data-toggle="tab"><?php echo JText::_('COM_CONTENT_ARTICLE_CONTENT') ?></a></li>
				<?php if ($params->get('show_urls_images_frontend') ) : ?>
				<li><a href="#images" data-toggle="tab"><?php echo JText::_('COM_CONTENT_IMAGES_AND_URLS') ?></a></li>
				<?php endif; ?>
				<li><a href="#sppostformats" data-toggle="tab"><?php echo JText::_('BLOG_OPTIONS') ?></a></li>
				<li><a href="#publishing" data-toggle="tab"><?php echo JText::_('COM_CONTENT_PUBLISHING') ?></a></li>
				<li><a href="#language" data-toggle="tab"><?php echo JText::_('JFIELD_LANGUAGE_LABEL') ?></a></li>
				<li><a href="#metadata" data-toggle="tab"><?php echo JText::_('COM_CONTENT_METADATA') ?></a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="editor">
					<?php echo $this->form->renderField('title'); ?>

					<?php if (is_null($this->item->id)) : ?>
						<?php echo $this->form->renderField('alias'); ?>
					<?php endif; ?>

					<?php echo $this->form->getInput('articletext'); ?>
                    
                    <?php if ($this->captchaEnabled) : ?>
						<?php echo $this->form->renderField('captcha'); ?>
                    <?php endif; ?>

				</div>

				<?php if ($params->get('show_urls_images_frontend')): ?>
				<div class="tab-pane row-fluid" id="images">
                	<div class="col-md-6">
					<?php echo $this->form->renderField('image_intro', 'images'); ?>
					<?php echo $this->form->renderField('image_intro_alt', 'images'); ?>
					<?php echo $this->form->renderField('image_intro_caption', 'images'); ?>
					<?php echo $this->form->renderField('float_intro', 'images'); ?>
                    <hr />
					<?php echo $this->form->renderField('image_fulltext', 'images'); ?>
					<?php echo $this->form->renderField('image_fulltext_alt', 'images'); ?>
					<?php echo $this->form->renderField('image_fulltext_caption', 'images'); ?>
					<?php echo $this->form->renderField('float_fulltext', 'images'); ?>
                    </div>
                    <div class="col-md-6">
					<?php echo $this->form->renderField('urla', 'urls'); ?>
					<?php echo $this->form->renderField('urlatext', 'urls'); ?>
                    
					<div class="control-group">
						<div class="controls">
							<?php echo $this->form->getInput('targeta', 'urls'); ?>
						</div>
					</div>
                    <hr />
					<?php echo $this->form->renderField('urlb', 'urls'); ?>
					<?php echo $this->form->renderField('urlbtext', 'urls'); ?>
					<div class="control-group">
						<div class="controls">
							<?php echo $this->form->getInput('targetb', 'urls'); ?>
						</div>
					</div>
                    <hr />
					<?php echo $this->form->renderField('urlc', 'urls'); ?>
					<?php echo $this->form->renderField('urlctext', 'urls'); ?>
					<div class="control-group">
						<div class="controls">
							<?php echo $this->form->getInput('targetc', 'urls'); ?>
						</div>
					</div>
                    </div>

				</div>
			<?php endif; ?>

			<div class="tab-pane" id="sppostformats">
				<?php $attribs = json_decode($this->item->attribs); ?>
				<?php echo $this->form->renderField('spfeatured_image','attribs', (isset($attribs->spfeatured_image)? $attribs->spfeatured_image: '')); ?>
                <?php echo $this->form->renderField('spfeatured_image_alt','attribs', (isset($attribs->spfeatured_image_alt)? $attribs->spfeatured_image_alt: '')); ?>
				<?php echo $this->form->renderField('post_format','attribs', (isset($attribs->post_format)? $attribs->post_format: '')); ?>
				<?php echo $this->form->renderField('gallery','attribs', (isset($attribs->gallery)? $attribs->gallery: '')); ?>
				<?php echo $this->form->renderField('audio','attribs', (isset($attribs->audio)? $attribs->audio: '')); ?>
				<?php echo $this->form->renderField('video','attribs', (isset($attribs->video)? $attribs->video: '')); ?>
				<?php echo $this->form->renderField('link_title','attribs', (isset($attribs->link_title)? $attribs->link_title: '')); ?>
				<?php echo $this->form->renderField('link_url','attribs', (isset($attribs->link_url)? $attribs->link_url: '')); ?>
				<?php echo $this->form->renderField('quote_text','attribs',(isset($attribs->quote_text)? $attribs->quote_text: '')); ?>
				<?php echo $this->form->renderField('quote_author','attribs',(isset($attribs->quote_author)? $attribs->quote_author: '')); ?>
				<?php echo $this->form->renderField('post_status','attribs',(isset($attribs->post_status)? $attribs->post_status: '')); ?>
                <?php echo $this->form->renderField('custom_post','attribs',(isset($attribs->custom_post)? $attribs->custom_post: '')); ?>
			</div>

				<div class="tab-pane row-fluid" id="publishing">
               	 <div class="col-md-6">
					<?php echo $this->form->renderField('catid'); ?>
					<?php echo $this->form->renderField('tags'); ?>
					<?php if ($params->get('save_history', 0)) : ?>
						<?php echo $this->form->renderField('version_note'); ?>
					<?php endif; ?>
					<?php echo $this->form->renderField('created_by_alias'); ?>
                </div>
                <div class="col-md-6">
					<?php if ($this->item->params->get('access-change')) : ?>
						<?php echo $this->form->renderField('state'); ?>
						<?php echo $this->form->renderField('featured'); ?>
						<?php echo str_replace( 'icon-calendar', 'far fa-calendar-alt', $this->form->renderField('publish_up') ); ?>
						<?php echo str_replace( 'icon-calendar', 'far fa-calendar-alt', $this->form->renderField('publish_down') ); ?>
					<?php endif; ?>
					<?php echo $this->form->renderField('access'); ?>
					<?php if (is_null($this->item->id)):?>
						<div class="control-group">
							<div class="control-label">
							</div>
							<div class="controls">
								<?php echo JText::_('COM_CONTENT_ORDERING'); ?>
							</div>
						</div>
					<?php endif; ?>
                 </div>
				</div>
				<div class="tab-pane row-fluid" id="language">
                	<div class="col-md-6">
					<?php echo $this->form->renderField('language'); ?>
                    </div>
				</div>
				<div class="tab-pane" id="metadata">
					<?php echo $this->form->renderField('metadesc'); ?>
					<?php echo $this->form->renderField('metakey'); ?>

					<input type="hidden" name="task" value="" />
					<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
					<?php if ($this->params->get('enable_category', 0) == 1) :?>
					<input type="hidden" name="jform[catid]" value="<?php echo $this->params->get('catid', 1); ?>" />
					<?php endif; ?>
				</div>
			</div>
			<?php echo JHtml::_('form.token'); ?>
		</fieldset>
	</form>
</div><div style="min-height:35px;" class="clearfix"></div>