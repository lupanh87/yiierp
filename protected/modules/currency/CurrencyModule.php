<?php

class CurrencyModule extends CWebModule
{
	public $layout = 'currency.views.layouts.main';
	public $appLayout = 'application.views.layouts.main';
	
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
		$this->defaultController = 'currency';
		// import the module-level models and components
		$this->setImport(array(
			'currency.models.*',
			'currency.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
