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
            border-radius: 15px;
            overflow: hidden;
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
            font-size: 20px;
            padding: 10px;
            color: azure;
            background: rgba(209, 52, 102, 0.719);
        }
        .total_deg {
            font-size: 30px;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
            color: #D14D72;
        }
        .button {
            display: inline-block;
            padding: 8px 15px;
            background-color: rgba(245, 113, 155, 0.979);
            color: white;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: rgba(245, 113, 155, 0.8);
        }
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 20px;
            transition: background-color 0.3s;
            margin: 10px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    @include('home.header')

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="center">
        <table style="text-align: center">
            <tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Product Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>
            <?php $totalprice = 0; ?>
            @foreach($cart as $cart)
            <tr>
                <td>{{ $cart->product_title }}</td>
                <td>{{ $cart->quantity }}</td>
                <td>{{ $cart->price }} MAD</td>
                <td><img style="width: 100px" src="/product/{{ $cart->image }}" ></td>
                <td><a class="button" onclick="return confirm('Are you sure to remove this product?')" href="{{ url('/remove_cart', $cart->id) }}">Remove <i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php $totalprice += $cart->price; ?>
            @endforeach
        </table>
        <div>
            <h1 class="total_deg">Total Price: {{ $totalprice }} MAD</h1>
        </div>
        <div>
            <h1 style="font-size: 30px; padding-bottom: 15px">Proceed to Order</h1>
            <a href="{{ url('/cash_order') }}" class="btn btn-primary">Cash On Delivery</a>
            <a href="{{ url('stripe', $totalprice) }}" class="btn btn-primary">Pay Using Card</a>
        </div>
    </div>

    <!-- jQuery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>
</html>
