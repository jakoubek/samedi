<?php namespace Samedi\Rm;

abstract class AccountType {

    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return $this->id;
    }

}