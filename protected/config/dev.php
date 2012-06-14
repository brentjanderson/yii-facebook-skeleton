<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array(
            'modules' => array(
                // uncomment the following to enable the Gii tool
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => 'gii-password-here',
                    // If removed, Gii defaults to localhost only. Edit carefully to taste.
                    'ipFilters' => array('127.0.0.1', '::1'),
                ),
            ),
            'components' => array(
                'db' => array(
                    'connectionString' => 'mysql:host=localhost;dbname=sandbox',
                    'emulatePrepare' => true,
                    'username' => 'root',
                    'password' => 'root',
                    'charset' => 'utf8',
                ),
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
            ),
            'params' => array(
                'environment' => 'Development',
                'fb-app-name' => 'APP_FACEBOOK_NAMESPACE',
            ),
                )
);