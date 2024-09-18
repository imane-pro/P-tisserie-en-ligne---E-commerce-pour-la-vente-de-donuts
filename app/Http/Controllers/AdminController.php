<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Notification;
use App\Notifications\SendEmailNotification;


class AdminController extends Controller
{
    public function view_category(){
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){
        $data = new Category;

        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function delete_category($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }

    public function view_product(){
        $Category = Category::all();
        return view('admin.product',compact('Category'));
    }
    public function add_product(Request $request){
        $product = new product;
        $product->title = $request->title;
        $product->description = $request->Description;
        $product->category= $request->category;
        $product->quantity = $request->Quantity;
        $product->price = $request->Price;
        $product->discount_price= $request->Dis_price;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }
    public function show_product(){
        $product = Product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }
    public function update_product($id){
        $product = Product::find($id);
        $Category= Category::all();
       return view('admin.update_product',compact('product','Category'));
    }
    public function update_product_confirm(Request $request, $id){

        $product = Product::query()->where('id', $id)->firstOrFail();
        
        $product->title = $request->title;
        $product->description = $request->Description;
        $product->price = $request->Price;
        $product->discount_price = $request->Dis_price;
        $product->quantity = $request->Quantity;
        $product->category = $request->category;
    
        // Vérifier si un fichier image a été téléchargé
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $product->image = $imagename;
        }
    
        $product->save();
        return redirect()->back()->with('message','Product Updated Successfull');
    }

    public function order(){
        $order = Order::all();
        return view('admin.order',compact('order'));
    }

    public function delivered($id){
        $order = Order::find($id);
        $order->delivery_status = "Delivered";
        $order->payment_status = "Paid";
        $order->save();
        return redirect()->back();
    }
    public function print_pdf($id){
        $order = Order::find($id);
        $pdf = PDF::loadView('admin.pdf',compact('order'));
        return $pdf->download('order_details.pdf');
    
    
    }

    public function send_email($id){
        $order = Order::find($id);
        return view('admin.email_info',compact('order'));
    }

    public function send_user_email(Request $request, $id){
        $order = Order::find($id);

        $details = [
            'greeting'=> $request->greeting,
            'firstline'=> $request->firstline,
            'body'=> $request->body,
            'button'=> $request->button,
            'url'=> $request->url,
            'lastline'=>$request->lastline,
        ];

        Notification::send($order,new SendEmailNotification($details));
        return redirect()->back();
      
    }

    public function searchdata(Request $request){
        $searchText = $request->search;
        $order = Order::where('name','LIKE',"%$searchText%")->orWhere('phone','LIKE',"%$searchText%")->orWhere('product_title','LIKE',"%$searchText%")->get();
        return view('admin.order',compact('order'));
     
}


}