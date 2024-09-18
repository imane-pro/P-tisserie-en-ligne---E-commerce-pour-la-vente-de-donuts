<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            color: #e7e2e5;
        }
        .text-color {
            color: black;
            padding-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin-top: 30px;
            color: rgb(255, 3, 121);
        }
        input[type="text"],
        input[type="number"],
        select,
        input[type="file"],
        input[type="submit"] {
            display: block;
            padding: 5px 10px;
            width: fit-content;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .div_center {
    text-align: center;
    padding-top: 40px;
    margin: auto;
    width: fit-content;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

.font-size {
    font-size: 40px;
    padding-bottom: 30px;
    color: #333; /* Couleur du texte pour le titre */
}

.text-color {
    color: #666; /* Couleur du texte pour les champs */
}

label {
    display: block;
    text-align: left;
    margin-top: 30px;
    color: #e74c3c; /* Couleur du texte pour les étiquettes */
}

input[type="text"],
input[type="number"],
select,
input[type="file"],
input[type="submit"] {
    display: block;
    padding: 10px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 10px;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="number"]:focus,
select:focus,
input[type="file"]:focus,
input[type="submit"]:focus {
    outline: none;
    border-color: #3498db; /* Couleur de la bordure lorsqu'un champ a le focus */
}

input[type="submit"] {
    background-color: #2ecc71; /* Couleur de fond du bouton */
    color: #fff; /* Couleur du texte du bouton */
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #27ae60; /* Couleur de fond du bouton au survol */
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
                    <h2 class="font-size">Add Product</h2>
                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Product Title</label>
                            <input type="text" name="title" class="text-color" placeholder="write a title" required>
                        </div>
                        <div>
                            <label>Product Description</label>
                            <input type="text" name="Description" class="text-color" placeholder="write a Description" >
                        </div>
                        <div>
                            <label>Product Price</label>
                            <input type="number" name="Price" class="text-color" placeholder="write a Price" required>
                        </div>
    
    
                       
    
                        <div>
                            <label>Product Category</label>
                            <select class="text_color" name="category" required>
                                <option value="" selected="">Add a Category here</option>
                                @foreach($Category as $Category)
                                <option value="{{$Category->category_name}}" >{{$Category->category_name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div>
                            <label>Product Image Here:</label>
                            <input type="file" name="image" required>
                        </div>
    
                        <div>
                            <input type="submit" class="btn btn-primary" value="Add Product">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    
    @include('admin.script')
  </body>
</html>
