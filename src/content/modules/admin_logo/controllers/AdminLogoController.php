<?php
class AdminLogoController extends Controller{
	private $moduleName = "admin_logo";
	
	public function settings(){
		return Template::executeModuleTemplate($this->moduleName, "settings.php");
	}
	
	public function getSettingsHeadline(){
		return get_translation("admin_logo");
	}
	
	public function saveSettingsPost(){
		$admin_logo = Request::getVar("admin_logo");
		if($admin_logo){
			Settings::Set("admin_logo", $admin_logo);
		} else {
			Settings::delete("admin_logo");
		}
		Response::redirect(ModuleHelper::buildAdminURL($this->moduleName, "save=1"));
	}
}