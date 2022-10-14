<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Models\Fabrica;

class ShopController extends Controller
{

    public function fabricaF(Fabrica $fabrica){
        $shop = $fabrica->shop;
        return view('shops.index', ['shop'=>$shop, 'fabrica'=>Fabrica::all()]);

    }

    public function index()
    {
        $all = Shop::with('fabrica')->get();
        return view('shops.index', ['shop' => $all, 'fabrica'=>Fabrica::all()]);
    }

    public function edit()
    {
        return view('shops.edit');
    }

    public function create(){

        return view('shops.create', ['fabrica'=>Fabrica::class]);
    }

    public function store(Request $request){

        $validated = $request->validate([
           'name' => 'required|string',
           'price' => 'required|numeric',
           'size' => 'required',
            'fabrica_id' => 'required'
        ]);

        return view('shops.index');
    }

    public function update(Request $request, Shop $shop){

        $shop->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'size' => $request->input('size'),
            'fabrica_id' => $request->input('fabrica_id')
        ]);

        return view('shops.index');
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return view('shops.index');
    }

    public function show(Shop $shop)
    {
        return view('shops.index', ['shop'=>$shop, 'fabrica'=>Fabrica::all()]);
    }
}
