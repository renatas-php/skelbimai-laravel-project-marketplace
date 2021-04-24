<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserInfos;
use App\Models\ProductSold;
use Carbon\Carbon;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $monthSolds = ProductSold::where('seller_id', auth()->id())
        ->where('created_at', '>=', Carbon::now()->startOfMonth())
        ->where('created_at', '<=', Carbon::now()->endOfMonth())
        ->pluck('price')->sum();

        $userSolds = ProductSold::where('seller_id', auth()->id())->with('product', 'user')->latest()->get(); 
        return view('dashboard')->with(compact('userSolds', 'monthSolds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         return view('user.user-info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $shippingArr = ['city' => $request->city, 'adress' => $request->adress, 
        'post' => $request->post, 'phone' => $request->phone];

        $accountArr = ['account_nr' => $request->account_nr, 'bank' => $request->bank];

        $insertInfo = UserInfos::create([
            'shipping' => $shippingArr,
            'account' => $accountArr,
            'avatar' => 'kablet'
        ]);

        return back()->with('ok', 'Informacija pridėta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $userInfo = UserInfos::where('user_id', $id)->first();
        return view('user.user-info')->with(compact('userInfo'));
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
        $shippingArr = ['city' => $request->city, 'adress' => $request->adress, 
        'post' => $request->post, 'phone' => $request->phone];

        $accountArr = ['account_nr' => $request->account_nr, 'bank' => $request->bank];

        $userInfo = UserInfos::where('user_id', $id)->first();        
        
        $userInfo->update([
            'shipping' => $shippingArr,
            'account' => $accountArr,
            'avatar' => 'kablet'
        ]);

        return back()->with('ok', 'Informacija atnaujinta');
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
}
