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
 
namespace Synergixe\Morpheec\Components;

use Closure;
use Synergixe\Morpheec\Components\Aim;

class Startegy {

      
      private function __construct($name, Closure $callback){
          
      }

      public runDefinition(Aim $aim){
          
      }
      
      public static function create($name, Closure $callback){
          $strategy = new static($name, $callback);
          
          return $strategy;
      }
}
