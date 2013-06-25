<?php namespace Samedi\Cf;

class Sysinfo {

    public $database_path;
    public $database_size;
    public $table_info;

    public function __construct()
    {
        $this->database_path = \Config::get('database.connections')['sqlite']['database'];
        $this->database_size = number_format(filesize($this->database_path), 0, '', '.') . ' Bytes';
        $this->tableInfo();
    }

    protected function tableInfo()
    {
        $tables = \DB::select('SELECT name FROM sqlite_master WHERE type = \'table\' AND name NOT LIKE \'sqlite%\' ORDER BY name');
        foreach ($tables as $table) {
            $count = \DB::table($table->name)->count();
            $table_info[] = array(
                'name'              => $table->name,
                'number_of_records' => $count,
            );
        }
        $this->table_info = $table_info;
    }

}