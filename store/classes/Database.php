<?php

class Database
{
    public function __construct()
    {
        $connection = mysql_connect('localhost', 'root', '');

        if (!$connection) {
            return false;
        }

        if (!mysql_select_db('store')) {
            return false;
        }
        return true;
    }

}
