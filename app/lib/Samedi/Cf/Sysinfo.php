<?php namespace Samedi\Cf;

class Sysinfo {

    public $database_path;
    public $database_size;

    public function __construct()
    {
        $this->database_path = \Config::get('database.connections')['sqlite']['database'];
        $this->database_size = number_format(filesize($this->database_path), 0, '', '.') . ' Bytes';
    }

}