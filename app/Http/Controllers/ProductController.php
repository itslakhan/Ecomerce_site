<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductDetail;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
         $products= Product::get();
        return view('admin.Product.ProductList', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     
        $categories = Category::whereNotNull('category_id')->get();

        return view('admin.Product.ProductCreate', compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $data = array(
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
        );
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            
        
            $imagePath = $request->file('image')->storeAs('public/image', $imageName);
        
            $data['image'] = 'image/' . $imageName;
        }
               Product::create($data);
 
   
          return redirect()->route('Product.create')->with('success', 'Product added successfully');
}    
         

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
            $products= Product::find($id);
            $categories= Category::whereNotnull('category_id')->get();
              return view('admin.Product.ProductEdit',compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price'=>'required',
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product =  Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        if ($request->hasFile('image')) {
           
            // Save the new image
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('public/image', $imageName);
            $product->image = 'image/' . $imageName;
        } else {
            // If no new image is provided, retain the old image
            $product->image = $request->image;
        }
    
        $product->save();
        return   redirect()->route('Products.list');
    
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product ,string $id)
    {
         $product= Product::find($id);
         $product->delete();
         return back();
    }

    public function extradetails(Request $request){
        $id = $request->id;
          $product= Product::where('id',$id)->with('productdetail')->first();
        return   view('admin.Product.extradetails', compact('id','product'));
    }
    public function extradetailstore(Request $request, $id)
    {
        $request->validate([
            // 'product_id' => 'required',
            'title' => 'required',
            'total_items' => 'required',
            'description' => 'required',
        ]);
    
        // Assuming you have a Product model with a 'details' relationship
        $product = Product::find($id);
    
        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->back()->with('error', 'Product not found');
        }
    
        // Create or update the product details
        $productdetails = $product->details ?? new ProductDetail();
        $productdetails->product_id = $id;
        $productdetails->title = $request->title;
        $productdetails->total_items = $request->total_items;
        $productdetails->description = $request->description;
        $productdetails->save();
    
       
    


            return redirect()->route('Products.list');
        }
}



