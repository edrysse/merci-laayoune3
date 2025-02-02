<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile=Profil::where('id_user',Auth::id())->first();
        return view('Admins.admin',compact('profile'));

        // if(Auth::check()){
        //     if(Auth::user()->role == "1"){
        //         return redirect('admin');
        //     }else{
        //         return redirect('auth.passwords.login');
        //     }
        // }else{
        //  return   redirect('auth.passwords.login');
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
