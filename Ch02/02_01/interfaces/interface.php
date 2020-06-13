<?php
interface TableInterface {
    public function save(array $data);
}

class Table implements TableInterface {
    public function save(array $data)
    {
        echo "Foo bar\n";
    }
}

(new Table())->save([]);