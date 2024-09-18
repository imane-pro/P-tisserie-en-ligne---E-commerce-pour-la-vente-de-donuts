<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Donuts_Delight</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to right, #ffafbd, #ffc3a0);
            font-family: 'Arial', sans-serif;
            color: #333;
        }
        .center {
            margin: 50px auto;
            width: 80%;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #D14D72;
            color: white;
            font-size: 17px;
            font-weight: bold;
        }
        td {
            color: #555;
        }
        td img {
            border-radius: 10px;
        }
        .th_deg {
            padding: 10px;
            background-color: #D14D72;
            font-size: 17px;
            font-weight: bold;
        }
        .btn-cancel {
            display: inline-block;
            padding: 8px 15px;
            background-color: #ff4d4d;
            color: white;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s;
        }
        .btn-cancel:hover {
            background-color: #ff1a1a;
        }
        .not-allowed {
            color: rgb(255, 60, 0);
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('home.header')

    <div class="center">
        <table>
            <tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Payment Status</th>
                <th class="th_deg">Delivery Status</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Cancel Order</th>
            </tr>
            @foreach($order as $order)
            <tr>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td><img width="100px" src="/product/{{$order->image}}" alt="product image"></td>
                <td>
                    @if($order->delivery_status=='processing')
                    <a class="btn-cancel" onclick="return confirm('Are you sure to cancel this order?')" href="{{url('cancel_order', $order->id)}}">Cancel Order</a>
                    @else
                    <p class="not-allowed">Not Allowed</p>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- jQuery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- Popper JS -->
    <script src="home/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="home/js/bootstrap.js"></script>
    <!-- Custom JS -->
    <script src="home/js/custom.js"></script>
</body>
</html>
