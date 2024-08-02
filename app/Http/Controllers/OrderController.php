<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function list(){
        //table show korsi 
        $page = 'Order list';
        $allOrder = Order::all();
        return view ('backend.order_list',compact('page','allOrder'));
    }

    public function form()
    {
        //form ta show korsi
        $page = 'Order form';
        return view ('backend.order_form',compact('page'));
    }

    
    public function store(Request $request){
        // dd($request->all());
        // //validation
        // $validation = Validator::make($request->all(),[
        //     'email'=> 'required|email',
        //     'password' => 'required|password'
        // ]);

        // if($validation->fails()){

        //    //
        // }
        
        // data store
        Order::create([
            //bam pasey column er name dan pasey holo value
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        

        return redirect()->route('order.list');
        
    }
}
