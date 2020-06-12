<?php
namespace App;
require 'vendor/autoload.php';
include 'Project.php';

use Project\Table as ProjectTable;
use Rych\Random\Random;

class Table {
    public static function get()
    {
        echo "App.Table.get";
    }
}

ProjectTable::get();

echo (new Random())->getRandomInteger(1,5);