<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Forum HC Kimia Farma',
	'theme'=>'yii-boostrap',

	// preloading 'log' component
	'preload'=>array('log'),

	// path aliases
    'aliases' => array(
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		// behaviors
		'bootstrap.behaviors.TbWidget',
		// components
		'bootstrap.components.TbApi',
		// form
		'bootstrap.form.TbForm',
		'bootstrap.form.TbFormButtonElement',
		'bootstrap.form.TbFormInputElement',
		// gii
		'bootstrap.form.BootstrapCode',
		'bootstrap.form.BootstrapGenerator',
		// helpers
		'bootstrap.helpers.TbHtml',
		'bootstrap.helpers.TbArray',
		// widgets
		'bootstrap.widgets.TbActiveForm',
		'bootstrap.widgets.TbAlert',
		'bootstrap.widgets.TbBreadcrumb',
		'bootstrap.widgets.TbButtonColumn',
		'bootstrap.widgets.TbCollapse',
		'bootstrap.widgets.TbDataColumn',
		'bootstrap.widgets.TbDetailView',
		'bootstrap.widgets.TbGridView',
		'bootstrap.widgets.TbHeroUnit',
		'bootstrap.widgets.TbListView',
		'bootstrap.widgets.TbNav',
		'bootstrap.widgets.TbNavbar',
		'bootstrap.widgets.TbPager',
		'bootstrap.widgets.TbPanel',
		'bootstrap.widgets.TbScrollspy',
		'bootstrap.widgets.TbTabs',
		'bootstrap.widgets.TbThumbnails',
		'bootstrap.widgets.TbTypeAhead',
		
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths' => array('bootstrap.gii'),
		),
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
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

		'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
