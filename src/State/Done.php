<?php

namespace App\State;

use \App\State\State;

class Done extends State
{

   public function toOpen(): void
   {
      echo ("can't go to open! <br/>");
   }

   public function toRun(): void
   {
      echo ("can't go to running! <br/>");
   }

   public function toDone(): void
   {
      echo ("already done! <br/>");
   }
}
