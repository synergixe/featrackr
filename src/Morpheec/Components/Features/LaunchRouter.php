<?php

/**
 * @copyright Copyright (c) 2018 Oparand Ltd - Synergixe
 *
 * @version v0.0.1
 *
 * @author Ifeora Okechukwu (https://twitter.com/isocroft)
 *
 * @license MIT
 *
 */
 
namepsace Synergixe\Morpheec\Components\Features;

 
class LaunchRouter {
  
   protected $storage;
     
     public function __construct(Storage $storage){
          
         $this->storage = $storage;
     }
  
     public function getConfig($env = null){
     
         $config = $this->storage->getConfig();
         
         return array_key_exists($config, $env) ? $config[$env] : $config;
     }
 }


/*


use Illuminate\Database\Connection | $app['db.connection']  
use Illuminate\Redis\Connections\Connection | $app['redis.connection']


$app['config']['morpheec'];

$storage = new Storage($app);


protected: $storage->addHandler(BackendHandlerInterface $handler);

$redisHandler->setConnection($app['redis.connection']);
$databaseHandler->setConnection($app['db.connection']);

->persist();
->retrieve();
->erase([$featureName = null]);
->toggle();


new LaunchRouter($storage);

$router->setEnv($app['environment']);

$manager = new Manager($router);

$manager->set

$manager->getRouter()->getStorage()->persist();

Morpheec::createToggle($manager);

*/


/*

$morpheec->launch("new_feature")->using("markets"); // retrieves the manager | launches a feature and locks it

$morpheec->feature("old_feature")->getOrCreate(); // instantiates a feature | creating a new feature if it's not available


Morpheec::aim("markets")->with([
'Lagos', 'Abuja'
])->atFeature("incomplete_feature"); // instantiates an aim | creates a new aim

Morpheec::defineStrategy(function(LaunchContext $context){
   
   if($context->hasUser()){
      $ip = $context->getClientRequest()->ip();
   }
   
   $belongsToMarket = in_array(
          $context->getAim()
                    ->getData(), 
                  $context->getUser()->market
          );
       
   return $context->getUser()->isAdmin() || $belongsToMarket;
})->as("markets"); // instantiates a strategy


|$this->getStrategy()

*/
