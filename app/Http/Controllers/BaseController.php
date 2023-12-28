<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use APP\Models\ProductDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class BaseController extends Controller
{
    public function Home(){
        $products= Product::get();
        $new_products=Product::limit(6)->latest()->get();
        return view('fronten.home' ,compact('products', 'new_products'));
    }

    public function specialoffer(){
        return view('fronten.specialoffer');
    }

    public function contact(){
        return view('fronten.contact');
    }

    public function delivery(){
        return view('fronten.delivery');
    }

    public function cart(){ 
        $carts = [];
        if(Auth::user()){
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();

        }

        return view('fronten.cart',compact('carts'));
    }

    public function productView(Request $request){
        $id = $request->id;
        $products = Product::with('productDetail')->find($id);
        
       $category_id = $products->category_id;
       $related_products= Product::where('category_id',$category_id)->get();

       
    
        return view('fronten.productView', compact('products', 'related_products'));
    }

    public function login(){
        return view('fronten.userlogin');
    }

    public function userstore(Request $request){
        $request->validate([
              'name' => 'required',
              'email' => 'required|unique:users,email',
              'password' => 'required',   
              

        ]);

           $user = new User;
           $user->name = $request->name;
           $user->email = $request->email;
           $user->password = Hash::make($request->password);
           $user->role = 'user';
           if ($user->save()) {
             return redirect()->route('userlogin');
             

     }else{
        return redirect()->back();
     }
  }


  public function userlogin(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        
    ]);
        // $credentials = $request->only('email', 'password');

       
        $credentials = $request->only('email', 'password');
   
        if(Auth::attempt($credentials)) {
        return redirect()->route('home');
           }else{
            return back()->withErrors(['message' => 'Invalid credentials']);
      
  };
}

     public function userlogout(){
        Auth::logout();
        return redirect()->route('home');
     }
}