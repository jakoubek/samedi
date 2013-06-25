<?php

class Account extends Eloquent {

    protected $softDelete = true;

    protected $guarded = array();

    public static $rules = array();

    public function __toString()
    {
        return $this->name1;
    }

}
