<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            color: #f00e4e;
            padding-bottom: 30px;
        }
        
        .table_deg tr td{
            padding: 7px;
            border: 2px solid white;
        }
        table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}


        .th_deg{
            background-color: beige;
            color: black;
            border: 2px solid white;
        }
        
    </style>
  </head>
  <body>
    <div class="container-scroller">

     @include('admin.sidebar')

      @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All Orders</h1>

                <div style="padding-left: 400px ;padding-bottom:30px ">
                    <form action="{{url('search')}}" method="GET">
                        @csrf
                        <input type="text" placeholder="Search For Something" name="search">
                        <input type="submit" value="search" class="btn btn-outline-primary">
                    </form>
                </div>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        <th>Print Pdf</th>
                        <th>Send Email</th>
                    </tr>
                    @forelse($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}MAD</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img style="width: 100px" src="/product/{{$order->image}}" alt="">
                        </td>
                        <td>
                            @if($order->delivery_status=='processing')
                            <a onclick="return confirm('Are you Sure this Product is Delivered !!!')" href="{{url('delivered',$order->id)}}" class="btn btn-primary">Delivered</a>
                            @else
                            <p style="color: green">Delivered ✅</p>
                            @endif
                        </td>
                       <td><a href="{{url('print_pdf',$order->id)}}"  class="btn btn-secondary">Print PDF</a></td>
                       <td><a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send Email</a></td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="13" style="color: #f00e4e">No Data Found !</td>
                        </tr>
                    @endforelse 
                </table> 
            </div>
        </div>  

    
    @include('admin.script')

  </body>
</html>