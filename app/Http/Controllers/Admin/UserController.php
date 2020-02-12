<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\UserRepository;
use Illuminate\Http\Request;


class UserController extends Controller
{
    private $repo;

    public function __construct(UserRepository $user) {
        $this->repo = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = $this->repo->getAllPaginate();
        return view('pages.admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = null;
        return view('pages.admin.user.form',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $this->repo->insert([
            'name' => $request->get('name'),
            'phonenumber' => $request->get('phonenumber'),
            'gender' => $request->get('gender'),
            'email' => $request->get('email'),
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
        $user = $this->repo->show($id);
        return view('pages.admin.user.form',compact('user'));
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
        $user = $this->repo->update($id,[
            'name'=>$request->get('name'),
            'phonenumber'=>$request->get('phonenumber'),
            'gender'=>$request->get('gender'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ]);
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->delete($id);
        return redirect('user');
    }
}
