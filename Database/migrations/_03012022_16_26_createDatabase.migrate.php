<?php

use Helper\Database;

class generateDatabase extends Database
{
    public function __construct()
    {
        $tables = [];
        foreach ($tables as $table) {
            $sql = "[IF NOT EXIST] CREATE TABLE $table";
            $this->connect()->query($sql);
        }
    }
}
