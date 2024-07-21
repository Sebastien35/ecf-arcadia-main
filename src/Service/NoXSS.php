<?php

 namespace App\Service;

 use HTMLPurifier;
 use HTMLPurifier_Config;

 class NoXSS
 {
     public function nettoyage($text): string
     {
         $config = HTMLPurifier_Config::createDefault();
         $purifier = new HTMLPurifier($config);

         return $purifier->purify($text);
     }

 }
