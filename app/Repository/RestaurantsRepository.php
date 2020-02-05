<?php
namespace App\Repository;

use App\Restaurant;

class RestaurantsRepository
{
    protected $restaurant;

    public function __construct(Restaurant $resto) {
        $this->restaurant = $resto;
    }

    public function create($data)
    {
        $this->restaurant->name = $data['name'];
        $this->restaurant->alamat = $data['address'];
        $this->restaurant->phonenumber = $data['phonenumber'];
        $this->restaurant->save();
        return $this->restaurant;
    }

    public function read()
    {
        return $this->restaurant->get();
    }

    public function update($data,$id)
    {
        $resto = $this->restaurant->findOrFail($id);
        $resto->name = $data['name'];
        $resto->alamat = $data['address'];
        $resto->phonenumber = $data['phonenumber'];
        $resto->save();
        return $resto;
    }

    public function delete($id)
    {
        $resto = $this->restaurant->findOrFail($id);
        $resto->tables()->delete;
        $resto->delete();
        return $resto;
    }
}
