<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Great Application',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
    ),
    // application components
    'components' => array(
        'facebook' => array(
            'class' => 'ext.yii-facebook-opengraph.SFacebook',
            'appId' => 'APP_ID_GOES_HERE', // needed for JS SDK, Social Plugins and PHP SDK
            'secret' => 'APP_SECRET_GOES_HERE', // needed for the PHP SDK 
            'locale' => 'en_US', // override locale setting (defaults to en_US)
            'jsSdk' => true, // don't include JS SDK
            'frictionlessRequests' => true,
            'async' => true, // load JS SDK asynchronously
            'jsCallback' => true, // declare if you are going to be inserting any JS callbacks to the async JS SDK loader
            'status' => true, // JS SDK - check login status
            'cookie' => true, // JS SDK - enable cookies to allow the server to access the session
            'oauth' => true, // JS SDK -enable OAuth 2.0
            //'xfbml'=>true,  // JS SDK - parse XFBML / html5 Social Plugins
            'html5' => true, // use html5 Social Plugins instead of XFBML
            'ogTags' => array(// set default OG tags
                'title' => 'My Cool Facebook App!',
                'description' => 'The next big thing',
                'image'=>'URL_TO_WEBSITE_LOGO'
            ),
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=testdrive',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
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
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'environment' => 'Production',
        'fb-app-name' => 'APP_FACEBOOK_NAMESPACE',
        'google-analytics-id' => '',
        'mixpanel-id' => '',
    ),
);