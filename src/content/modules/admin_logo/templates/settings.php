<?php echo ModuleHelper::buildMethodCallForm("AdminLogoController", "saveSettings");?>
<?php if (Request::getVar("save")) { ?>
<div class="alert alert-success alert-dismissable fade in">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php translate("changes_was_saved")?>
		</div>
<?php }?>
<?php 
$image = new FileImage();
$image->name = "admin_logo";
$image->title = get_translation("admin_logo");
echo $image->render(Settings::get("admin_logo"));
?>
<p>
	<button type="submit" class="btn btn-primary"><?php translate("save");?></button>
</p>
<?php echo ModuleHelper::endForm();?>
<?php 
	enqueueScriptFile(ModuleHelper::buildRessourcePath("admin_logo", "js/settings.js"));
	combinedScriptHtml();
?>