<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

use App\Models\Product;
use App\Models\Offer;
use App\Models\User;
use App\Models\ProductSold;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Product();
        if(request()->filled('category_id')){
            $products = $products->where('category_id', request('category_id'));
        }
        if(request()->filled('subcategory_id')){
            $products = $products->where('subcategory_id', request('subcategory_id'));
        }
        if(request()->filled('search')){
            $products = $products->where('title', 'LIKE', '%' . request('search') . '%')
            ->orWhere('description', 'LIKE', '%' . request('search') . '%');
        }
        if(request()->filled('price_from')) {
            $products = $products->where('price', '>=', request('price_from'));
         }
        if(request()->filled('price_until')) {
            $products = $products->where('price', '<=', request('price_until'));
        }
        $products = $products->latest()->paginate(12)->appends([
            'category_id' => request('category_id'),
            'subcategory_id' => request('subcategory_id'),
            'search' => request('search'),
            'price_from' => request('price_from'),
            'price_until' => request('price_until')
        ]);

        return view('product.index')->with('products', $products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function byCat($category) {

        $products = Product::where('category_id', $category)->latest()->get();

        return view('product.byCategory')->with('products', $products);
    }

    public function bySubCat($category, $subcategory) {

        $products = Product::where('category_id', $category)->where('subcategory_id', $subcategory)->latest()->get();

        return view('product.bySubCategory')->with('products', $products);
    }

    public function myProducts() {

        return view('user.my-products');
    }

    public function mySoldProducts() {

        return view('user.my-sold-products');
    }

    public function myBuyedProducts() {
        
        return view('user.my-buyed-products');
    }

    public function priceOffers() {

        return view('user.price-offers');
    }

    public function priceOffersBy(Product $product) {

        $priceOffersBy = Offer::where('product_id', $product->id)->latest()->get();

        return view('user.price-offersBy')->with('priceOffersBy', $priceOffersBy);
    }

    public function create()
    {   
        if(!auth()->user()) {
            return redirect()->route('login')->with('error', 'Privalote prisijungti norėdami patalpinti skelbimą.');
        }
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $imageArray = [];
        //Images array insert
        if($request->hasFile('images')) { 
            $images = $request->file('images');   
            foreach($images as $image) {

                $name = $image->getClientOriginalName();
                $pushOriginalName = array_push($imageArray, $name);
                $image->storeAs('photos', $name, 'public');               
                                 
            }
        }

        $insertProduct = Product::create([
            'user_id' => 1,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'condition' => $request->condition,
            'qty' => $request->qty,
            'description' => $request->description,
            'price' => $request->price,
            'shipping_price' => $request->shipping_price,
            'shipping_length' => $request->shipping_length,
            'city_id' => 1,
            'images' => $imageArray,
        ]);

        return view('index')->with('Ok', 'Prekė sėkmingai patalpinta.');
                
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show')->with(compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.create')->with(compact('product'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function user(User $user) {

        return view('user.single')->with(compact('user'));
    }
    public function byUser($user) {

        $products = Product::where('user_id', $user)->latest()->get();

        return view('product.byCategory')->with('products', $products);
    }
}
