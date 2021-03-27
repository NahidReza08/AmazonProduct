<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use DB;


class ProductController extends Controller
{
    //
    public function home()
    {
        $products = DB::table('products')->get();
        foreach($products as &$product) {
           $product->price = number_format($product->price*84.58, 2);
           $product->shipping_cost = number_format($product->shipping_cost*84.58,2);
        }
        return view('home',compact('products'));
    }

    public function addProduct()
    {
        return view('add_product');
    }

    public function storeProduct(Request $request)
    {
        $validatedData = $request->validate([
            'productName' => 'required',
            'productCategory' => 'required',
            'companyName' => 'required',
            'rating' => 'required',
            'totalVote' => 'required',
            'productPrice' => 'required',
            'shippingCost' => 'required',
            'imageId' => 'required',
            'productURL' => 'required',
        ]);
        $data=array();
        $data['product_name']=$request->productName;
        $data['product_category']=$request->productCategory;
        $data['company_name']=$request->companyName;
        $data['rating']=$request->rating;
        $data['total_vote']=$request->totalVote;
        $data['price']=$request->productPrice;
        $data['shipping_cost']=$request->shippingCost;
        $data['description']=$request->productDescription;
        $data['image']=$request->imageId;
        $data['url']=$request->productURL;
        //return response()->json($request->productName);
        //return response()->json($data);
        $product = DB::table('products')->insert($data);
        if($product){
            return Redirect()->back()->with('success','Successfully Added');
        }else{
            return Redirect()->back()->with('error','Something Went Wrong!!!');
        }
    }

    public function viewProduct($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $product->price = number_format($product->price*84.58, 2);
        $product->shipping_cost = number_format($product->shipping_cost*84.58,2);
        return view('single_product', compact('product'));
    }

    public function searchProduct(Request $request)
    {
        //echo "Here";
        $validatedData = $request->validate([
            'keyword' => 'required',
        ]);
        
        //echo $request->searchType;
        $products = null;
        if($request->searchType == 0){
            $products = Products::query()
                    ->where('product_name', 'LIKE', "%{$request->keyword}%") 
                    ->orwhere('product_category', 'LIKE', "%{$request->keyword}%") 
                    ->orwhere('company_name', 'LIKE', "%{$request->keyword}%") 
                    ->get();
        }
        else if($request->searchType == 1){
            $products = Products::query()
                    ->where('product_name', 'LIKE', "%{$request->keyword}%") 
                    ->get();
        }
        else if($request->searchType == 2){
            $products = Products::query()
                    ->where('product_category', 'LIKE', "%{$request->keyword}%") 
                    ->get();
        }
        else if($request->searchType == 3){
            $products = Products::query()
                    ->where('company_name', 'LIKE', "%{$request->keyword}%") 
                    ->get();
        }
        //$products = DB::table('products')->where('company_name','LIKE', '%'.$request->keyword.'%')->get();
    
        //return response()->json($products);
        if($products){
            return view('home',compact('products'));
        }else{
            return Redirect()->back()->with('error','Something Went Wrong!!!');
        }
    }

    public function sortProduct($key)
    {
        $products = Products::all();
        foreach($products as &$product) {
            $product->price = number_format($product->price*84.58, 2);
            $product->shipping_cost = number_format($product->shipping_cost*84.58,2);
        }
        $sortedProducts = $products->sortBy($key);
        $products = $sortedProducts;
        return view('home', compact('products'));
    }


}
