<?php

trait Log {
    protected function log($msg) {
        return "{$msg}\n";
    }
}

class Table {

    use Log;

    public function save()
    {
        $this->log('Save Start');
    }

}

echo (new Table)->save();