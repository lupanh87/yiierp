<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Blog Demo',
	 'theme'=>'bootstrap',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.rights.*',
		
        'application.modules.rights.components.*',
	),

	'defaultController'=>'post',
	'modules'=>array(
        'user'=>array(
                'tableUsers' => 'res_users',
                'tableProfiles' => 'res_profiles',
                'tableProfileFields' => 'res_profiles_fields',
        ),
        'rights'=>array(
              //  'install'=>true,
        ),
		'gii' => array(
			'class'=>'system.gii.GiiModule',
            'password'=>'admin',
            'generatorPaths' => array('bootstrap.gii'),
        ),
        'currency',
		'PartnerBank'
	),
	// application components
	'components'=>array(
		'bootstrap' => array(
            'class'=>'bootstrap.components.Bootstrap', 
        ),
		// 'user'=>array(
			// // enable cookie-based authentication
			// 'allowAutoLogin'=>true,
		// ),
		'user'=>array(
                'class'=>'RWebUser',
                // enable cookie-based authentication
                'allowAutoLogin'=>true,
                'loginUrl'=>array('/user/login'),
        ),
        'authManager'=>array(
                'class'=>'RDbAuthManager',
                'connectionID'=>'db',
                'defaultRoles'=>array('Authenticated', 'Guest'),
        ),
		// 'db'=>array(
			// 'connectionString' => 'sqlite:protected/data/blog.db',
			// 'tablePrefix' => 'tbl_',
		// ),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yiicms',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '', 
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'post/<id:\d+>/<title:.*?>'=>'post/view',
				'posts/<tag:.*?>'=>'post/index',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);