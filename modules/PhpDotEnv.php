<?php

namespace Modules;

use Dotenv\Dotenv;

class PhpDotEnv
{
   public static function load()
   {
      if (getenv('DATABASE') == false) {
         $path = __DIR__ . '../../';
         $env = Dotenv::create($path);
         $env->load();
      }
   }
}
