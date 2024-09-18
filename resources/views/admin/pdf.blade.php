<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
            color: #333;
            margin: 20px;
        }

        h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        img {
            margin-top: 20px;
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h3>Customer Information:</h3>
    <p>Customer Name: {{$order->name}}</p>
    <p>Customer Email: {{$order->email}}</p>
    <p>Customer Phone: {{$order->phone}}</p>
    <p>Customer Address: {{$order->address}}</p>
    <p>Customer Id: {{$order->user_id}}</p>

    <h3>Product Information:</h3>
    <p>Product Name: {{$order->product_title}}</p>
    <p>Product Price: {{$order->price}}</p>
    <p>Product Quantity: {{$order->quantity}}</p>
    <p>Product Status: {{$order->payment_status}}</p>
    <p>Product Id: {{$order->product_id}}</p>

    <img src="{{ public_path('product/' . $order->image) }}" alt="Product_image">
</body>
</html>
