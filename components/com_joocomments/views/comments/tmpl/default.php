<?php
/*
 * v1.0.0
 * Friday Sep-02-2011
 * @component JooComments
 * @copyright Copyright (C) Abhiram Mishra www.bullraider.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License version 2 or later;
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php 

$user =JFactory::getUser();
$name='';
$email='';
if(!$user->guest){
   $name=$user->name;
   $email=$user->email;
   }
$app= JFactory::getApplication();
$params= $app->getParams();
$captchaEnabled=$params->get( 'captcha_enabled', '0' );
		
 ?>
<div id="comments"></div>

<div id="comments_form" class="clearfix">



<form id="myForm"
	action="<?php echo JURI::base();?>index.php?option=com_joocomments&task=postComment"
	method="post" onsubmit="return false;">
<fieldset><legend><?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_TELL_US');?></legend>

<ul>
	<li>
	<div id="wmd-button-bar" class="wmd-panel"></div>
	<div id="input-panel"><textarea tabindex="1" id="wmd-input"
		name="userComment"
		title="<?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_COMMENT_REQUIRED');?>"
		class="required wmd-panel"></textarea></div>
	</li>
	<li id="progress"></li>
	<li><input type="text" tabindex="2" size="20" name="userName"
		id="userName" class="required"
		title="<?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_NAME_REQUIRED');?>"
		value="<?php echo $name;?>" /></li>
	<li><input type="text" tabindex="3" name="userEmail" id="userEmail"
		class="required validate-email"
		title="<?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_EMAIL_REQUIRED');?>"
		value="<?php echo $email;?>" /></li>
	<li><input type="text" tabindex="4" name="url"
		title="<?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_WEBSITE_BLOG');?>" /></li>
		<?php if($captchaEnabled=='0' || ($captchaEnabled=='2' && $user->guest) ){?>
	<li><img id="captcha_image" onclick="refreshCaptcha();"
		title="<?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_CAPTCHA_TOOLTIP');?>"
		alt="Captcha Image"><input type="text" value=""
		class="required captchaValidator" tabindex="5" id="captchaText"
		class="field text inputbox " name="captchaText"></li>
		<?php }?>
	<li><input type="submit"
		value="<?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_SUBMIT_COMMENT');?>"
		id="btlAddNewComment"
		title="<?php echo JText::sprintf('COM_JOOCOOMENTS_COMMENTS_FORM_SUBMIT_COMMENT_TOOLTIP');?>"
		tabindex="6" class="btTxt" onclick="commentWait();" /> </li>
</ul>
</fieldset>
		<?php echo JHTML::_( 'form.token' );?></form>
</div>
<?php
die();
?>