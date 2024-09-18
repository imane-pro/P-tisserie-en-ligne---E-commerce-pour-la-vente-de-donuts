<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .center{
            margin: auto;
            width: 80%;
            border: 2px solid wheat;
            text-align: center;
            margin-top: 40px;
            padding: 20px;
        }
        .font_size{
            text-align: center;
            font-size: 30px;
            padding-top: 20px;
        }
        .img_size{
            width: 100px;
        }
        .th_color{
            background-color: beige;
        }
        .th_color th{
            color: black;
            padding: 10px;
        }
        .center {
    margin: auto;
    width: 90%; /* Réduire légèrement la largeur pour un meilleur ajustement */
    border: 2px solid #f0f0f0; /* Légèrement plus clair pour une meilleure lisibilité */
    text-align: center;
    margin-top: 40px;
    padding: 20px;
    border-radius: 10px; /* Ajouter une bordure arrondie */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ajouter une légère ombre pour la profondeur */
}

.font_size {
    text-align: center;
    font-size: 36px; /* Légèrement plus grande taille de police pour le titre */
    padding-top: 20px;
    color: #333; /* Couleur du texte pour le titre */
}

.th_color th {
    background-color: #f5f5f5; /* Couleur de fond légèrement plus claire pour les en-têtes */
    color: #333; /* Couleur du texte pour les en-têtes */
    padding: 15px; /* Ajouter un peu plus de rembourrage pour les en-têtes */
}

img.img_size {
    max-width: 100px; /* Limiter la largeur maximale de l'image */
    max-height: 100px; /* Limiter la hauteur maximale de l'image */
    border-radius: 50%; /* Ajouter une bordure arrondie aux images */
}

    </style>
  </head>
  <body>
    <div class="container-scroller">
     
     @include('admin.sidebar')
   
      @include('admin.header')
    <div class="main-panel">
        <div class="content-wrapper">
            @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"  aria-hidden='true'>x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
            <h2 class="font_size">All Products</h2>
            <table class="center">
                <tr class="th_color" >
                    <th >Title</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount Price</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</</td>
                    <td><img src="/product/{{$product->image}}" alt="product_image" class="img_size"></</td>
                    <td>{{$product->category}}</</td>
                    <td>{{$product->quantity}}</</td>
                    <td>{{$product->price}}</</td>
                    <td>{{$product->discount_price}}</</td>
                    <td><a href="{{url('delete_product',$product->id)}}" class="btn btn-danger" onclick="return confirm('Are you Sure to Delete this')">Delete</a></td>
                    <td><a href="{{url('/update_product',$product->id)}}" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    
    @include('admin.script')

  </body>
</html>