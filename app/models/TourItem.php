<?php

class TourItem extends Eloquent {

    public function tour()
    {
        return $this->belongsTo('Tour');
    }

}