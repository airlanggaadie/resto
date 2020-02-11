<?php

namespace App\Repository;
use App\User;

class UserRepository {
    public function getAll()
    {
        return User::paginate(1);
    }

    public function insert($data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->phonenumber = $data['phonenumber'];
        $user->gender = $data['gender'];
        $user->email = $data['email'];
        // $user-> = $data['email_verified_at'];
        $user->password = $data['password'];
        $user->save();
        // dd($data);
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
        // $user->name = $data['email_verified_at'];
        $user->password = $data['password'];
        $user->save();
        return $user;

    }
}