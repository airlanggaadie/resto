<?php

namespace App\Repository;
use App\User;

class UserRepository 
{
    public function getAll()
    {
        return User::get();
    }

    public function getAllPaginate()
    {
        return User::paginate(5);
    }

    public function insert($data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->phonenumber = $data['phonenumber'];
        $user->gender = $data['gender'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
        return $user;
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function update($id,$data)
    {
        $user= User::findOrFail($id);
        $user->name = $data['name'];
        $user->phonenumber = $data['phonenumber'];
        $user->gender = $data['gender'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
        return $user;
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        // $user->detachRole();
        $user->delete();
        return $user;
    }
}