<?php
namespace App\Repository;

use App\Tables;

class TablesRepository
{
    protected $table;

    public function __construct(Tables $tables) {
        $this->table = $tables;
    }

    public function create($data)
    {
        $this->table->restaurants_id = $data['resto_id'];
        $this->table->name = $data['name'];
        $this->table->description = $data['description'];
        $this->table->save();
        return $this->table;
    }

    public function read()
    {
        return $this->table->get();
    }

    public function update($data,$id)
    {
        $tables = $this->table->findOrFail($id);
        $tables->restaurants_id = $data['resto_id'];
        $tables->name = $data['name'];
        $tables->description = $data['description'];
        $tables->save();
        return $tables;
    }

    public function delete($id)
    {
        $tables = $this->table->findOrFail($id);
        $tables->delete();
        return $tables;
    }
}
