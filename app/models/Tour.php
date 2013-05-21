<?php

class Tour extends Eloquent {

   public function tourItem()
   {
       return $this->hasMany('TourItem');
   }

}