<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product ;


class ProductController extends Controller
{

    public function createproduct(Request $request ){
        $incomingfields = $request->validate([
            'name' => 'required',
            'number' => 'required'
        ]);

        $incomingfields['name'] = strip_tags($incomingfields['name']);
        $incomingfields['number'] = strip_tags($incomingfields['number']);
        $incomingfields['user_id'] = auth()->id();
        Product::create($incomingfields);
        return redirect('/' );

    }

    public function actuallyedit(Product $product , Request $request ){

        if (auth()->user()->id !== $product['user_id']){
            return redirect('/');
        }

        $incomingfields = $request->validate([
            'name' => 'required',
            'number' => 'required'
        ]);

        $incomingfields['name'] = strip_tags($incomingfields['name']);
        $incomingfields['number'] = strip_tags($incomingfields['number']);

        $product->update($incomingfields);
        return redirect('/');

    }

    public function deleteproduct(Product $product){
        if (auth()->user()->id === $product['user_id']){
            $product->delete();
        }
        return redirect('/');

    }

    public  function showeditproduct(Product $product ){

        if (auth()->user()->id !==$product['user_id'] ){
            return redirect('/');
        }
        return view('edit-product' , ['product' => $product] );

    }






}
