<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();

        return view('index', compact('products'));
    }

    public function insert()
    {
       
        return view('insert');
    }

    public function addAll(Request $Request) {
        dd($Request->input('name'));
    }

    public function edit(Request $request) {
        $data = $request->select;

        if ($data != null) {
            foreach ($data as $d) {
                $var[] = Product::find($d);
            }
    
            return view('edit', compact('var'));
        } else {
            return redirect('/dashboard')->with('failed', 'Silahkan pilih salah satu data untuk di ubah!');
        }
    }

    public function editConfirm(Request $request) {
        for ($i=1; $i <= count($request->id); $i++) { 
            $product = Product::find($request->id[$i]);
            $product->name = $request->name[$i];
            $product->price = $request->price[$i];
            $product->save();
        }

        return redirect('/dashboard')->with('success', 'Produk yang terpilih berhasil diubah!');
    }

    public function delete(Request $request) {
        if ($request->select != null) {
            foreach ($request->select as $id) {
                Product::where('id', $id)->delete();
            }

            return redirect('/dashboard')->with('success', 'Produk yang terpilih berhasil di hapus!');
        } else {
            return redirect('/dashboard')->with('failed', 'Silahkan pilih salah satu data untuk di hapus!');
        }
    }
}
