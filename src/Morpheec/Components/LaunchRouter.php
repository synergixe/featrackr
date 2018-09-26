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
 
 
 class LaunchRouter {
  
   protected $context;
     
     public function __construct(LaunchContext $context){
         $this->context = $context;
     }
 }


/*

Morpheec::launch("new_feature")->andLock(
  
);

Morpheec::feature("old_feature")->create(); // creating a new feature

Morpheec::aim("markets")->using([
'Lagos', 'Abuja'
])->atFeature("incomplete_feature");

Morpheec::defineStrategy("markets", function(LaunchContext $context){
   if($context->hasUser()){
      $ip = $context->getClientRequest()->ip();
   }
   
   foreach($context->currentFeature->getAims() as $aim){
      if(in_array($aim->getUsageSet(), $context->getUser()->market)
   }
   return $context->getAimsFor("")->isAdmin();
})->for("nice_feature");


|$this->getStrategy()

$user-
$user->canLaunchFeature($aim, $strategyName) */
