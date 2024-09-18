<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .product_section .box {
            border: 2px solid transparent;
            padding: 20px;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            transition: all 0.3s ease-in-out;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-bottom: 30px;
        }

        .product_section .box:before,
        .product_section .box:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            border: 2px solid #ff157f;
            transform: scale(0);
            transition: all 0.3s ease-in-out;
        }

        .product_section .box:after {
            border-color: #f00e4e;
            transition-delay: 0.15s;
        }

        .product_section .box:hover:before,
        .product_section .box:hover:after {
            transform: scale(1);
        }

        .product_section .box:hover {
            border-color: #ac4360;
        }

        .img-box img {
            width: 150px;
            height: auto;
        }

        .product-details {
            margin-top: 15px;
        }

        .product-details h5 {
            margin: 10px 0;
            font-size: 18px;
            color: black;
        }

        .product-details h6 {
            margin: 5px 0;
            font-size: 16px;
            color: #ff157f;
        }

        .product-details .original-price {
            text-decoration: line-through;
            color: #777;
        }

        .option1 {
            display: inline-block;
            border-radius: 50%;
            text-align: center;
            width: 100px;
            color: beige;
            background-color: #ac4360;
            padding: 10px 20px;
            text-decoration: none;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span style="color: #f00e4e">products</span>
                </h2>
            </div>
            <div class="row">
                @foreach ($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details',$products->id)}}" class="option1">Details</a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="product/{{$products->image}}" alt="product image">
                        </div>
                        <div class="product-details">
                            <h5>{{$products->title}}</h5>
                            @if($products->discount_price != null)
                            <h6 class="discount-price">Discount: {{$products->discount_price}} MAD</h6>
                            <h6 class="original-price">Price: {{$products->price}} MAD</h6>
                            @else
                            <h6>{{$products->price}} MAD</h6>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $product->links() }}
        </div>
    </section>
</body>
</html>
