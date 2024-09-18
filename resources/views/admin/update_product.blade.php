<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
            margin: auto;
            width: fit-content;
        }
        .font-size {
            font-size: 40px;
            padding-bottom: 30px;
        }
        .text-color {
            color: black;
            padding-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
        }
        input[type="text"],
        input[type="number"],
        select,
        input[type="file"],
        input[type="submit"] {
            display: block;
            margin: 0 auto;
            padding: 5px 10px;
            width: fit-content;
            margin-bottom: 10px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"  aria-hidden='true'>x</button>
                    {{session()->get('message')}}
                </div>
            @endif
                <div class="div_center">
                    <h2 class="font-size">Update Product</h2>
                    <form action="{{route('product.update.confirm', ['id' => $product->id ?? 0])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Product Title</label>
                            <input type="text" name="title" class="text-color" placeholder="write a title" required value="{{$product->title}}">
                        </div>
                        <div>
                            <label>Product Description</label>
                            <input type="text" name="Description" class="text-color" placeholder="write a Description" required  value="{{$product->description}}">
                        </div>
                        <div>
                            <label>Product Price</label>
                            <input type="number" name="Price" class="text-color" placeholder="write a Price" required  value="{{$product->price}}">
                        </div>
    
                        <div>
                            <label>Discount price</label>
                            <input type="number" name="Dis_price" class="text-color" placeholder="write a Discount price" required  value="{{$product->discount_price}}">
                        </div>
                        <div>
                            <label>Product Quantity</label>
                            <input type="number" name="Quantity" min="0" class="text-color" placeholder="write a Quantity" required  value="{{$product->quantity}}">
                        </div>
    
                        <div>
                            <label>Product Category</label>
                            <select class="text_color" name="category" required>
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach($Category as $Category)
                                <option value="{{$Category->category_name}}" >{{$Category->category_name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div>
                            <label>Current Product Image Here:</label>
                            <img height="100" width="100" src="/product/{{$product->image}}">
                        </div>
                        <div>
                            <label>Change Product Image Here:</label>
                            <input type="file" name="image" >
                        </div>
    
                        <div>
                            <input type="submit" class="btn btn-primary" value="Update Product">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>