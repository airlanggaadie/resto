<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Repository\UserRepository;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repo = new UserRepository();
        $user = $repo->getAll();
        return view('User.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;
        return view('User.form',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $repo = new UserRepository();
        $user = $repo->insert([
            'name' => $request->get('name'),
            'phonenumber' => $request->get('phonenumber'),
            'gender' => $request->get('gender'),
            'email' => $request->get('email'),
            // 'email_verified_at' => $request->get('email_verified_at'),
            'password' => $request->get('password'),
        ]);
            
        return redirect('user')->with(['success' => 'Data berhasil di create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repo = new RoomRepository();
        $room = $repo->show($id);
        return view('Room.form',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $repo = new RoomRepository();
        $room = $repo->update($id,[
            'name'=>$request->get('name')
        ]);
        return redirect('room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('room');
    }
}
