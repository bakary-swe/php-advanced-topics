<?php
interface TableInterface {
	public function save(array $data);
}

class Table implements TableInterface {
	public function save(array $data) {
		return 'foo';
	}
}
echo (new Table())->save([]);