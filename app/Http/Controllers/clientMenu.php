<?php

namespace App\Http\Controllers;
use App\Models\Repas;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class clientMenu extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $starters = Repas::where('type','starters')->get();
        $lunches = Repas::where('type','lunch')->get();
        $dinners = Repas::where('type','dinner')->get();
        return view('client.menu.starters',compact('starters','lunches','dinners', 'cartItems'));
    }

    public function index_main()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $main = Repas::where('type','main')->get();
        $lunches = Repas::where('type','lunch')->get();
        $dinners = Repas::where('type','dinner')->get();
        return view('client.menu.main',compact('main','lunches','dinners', 'cartItems'));
    }

    public function index_drinks()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $drinks = Repas::where('type','drink')->get();
        $lunches = Repas::where('type','lunch')->get();
        $dinners = Repas::where('type','dinner')->get();
        return view('client.menu.drinks',compact('drinks','lunches','dinners', 'cartItems'));
    }

    public function index_desserts()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        $desserts = Repas::where('type','dessert')->get();
        $lunches = Repas::where('type','lunch')->get();
        $dinners = Repas::where('type','dinner')->get();
        return view('client.menu.desserts',compact('desserts','lunches','dinners', 'cartItems'));
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
