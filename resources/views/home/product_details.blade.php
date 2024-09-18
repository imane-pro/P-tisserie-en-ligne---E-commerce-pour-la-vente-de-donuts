<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <base href="/public">
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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <style>
        body{
            background-color: #f8d1d7af;
         }
         .rate {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rate:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rate:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rated:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rate:not(:checked) > label:before {
         content: '★ ';
         }
         .rate > input:checked ~ label {
         color: #ffc700;
         }
         .rate:not(:checked) > label:hover,
         .rate:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rate > input:checked + label:hover,
         .rate > input:checked + label:hover ~ label,
         .rate > input:checked ~ label:hover,
         .rate > input:checked ~ label:hover ~ label,
         .rate > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         .star-rating-complete{
            color: #c59b08;
         }
         .rating-container .form-control:hover, .rating-container .form-control:focus{
         background: #fff;
         border: 1px solid #ced4da;
         }
         .rating-container textarea:focus, .rating-container input:focus {
         color: #000;
         }
         .rated {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rated:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rated:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ffc700;
         }
         .rated:not(:checked) > label:before {
         content: '★ ';
         }
         .rated > input:checked ~ label {
         color: #ffc700;
         }
         .rated:not(:checked) > label:hover,
         .rated:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rated > input:checked + label:hover,
         .rated > input:checked + label:hover ~ label,
         .rated > input:checked ~ label:hover,
         .rated > input:checked ~ label:hover ~ label,
         .rated > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         /* rating */
         .rating-css div {
         color: #ffe400;
         font-size: 30px;
         font-family: sans-serif;
         font-weight: 800;
         text-align: center;
         text-transform: uppercase;
         padding: 20px 0;
         }
         .rating-css input {
         display: none;
         }
         .rating-css input + label {
         font-size: 60px;
         text-shadow: 1px 1px 0 #8f8420;
         cursor: pointer;
         }
         .rating-css input:checked + label ~ label {
         color: #b4afaf;
         }
         .rating-css label:active {
         transform: scale(0.8);
         transition: 0.3s ease;
         }
         .customer-reviews {
         margin-top: 30px;
         }
         .customer-reviews h2 {
         text-align: center;
         font-size: 24px;
         color: #333;
         }
         .rating {
         margin-bottom: 20px;
         }
         .stars {
         font-size: 20px;
         color: #ffc700;
         }
         .comment {
         font-size: 16px;
         color: #666;
         margin-top: 10px;
         }
                input[type='number'] {
                    width: 40px;
                    height: 30px;
                    border-radius: 50px;
                    border: 1px solid #ffecec;
                    padding: 5px 10px;
                    font-size: 16px;
                    outline: none;
                    background-color: #ffffff00;
                    }

        /* Au survol */
        input[type='number']:hover {
            background-color: #e0e0e0; /* Changement de couleur de fond */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2); /* Ombre légère plus prononcée */
        }

        /* Lorsque l'input a le focus */
        input[type='number']:focus {
            outline: none; /* Pas de contour lorsqu'il a le focus */
            background-color: #fff; /* Couleur de fond blanche */
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.3); /* Ombre plus prononcée lorsqu'il a le focus */
        }
        .detail-box {
            margin-top: 90px;
        border-radius: 5px;
        padding: 20px;
        background-color: rgb(255 255 255 / 58%);
        box-shadow: 0 0 90px rgb(193 17 33 / 21%);
}

.detail-box h5 {
    text-align: center;
    font-size: 30px;
    color: rgb(54, 3, 3);
    margin-bottom: 20px;
}

.detail-box h6 {
    font-size: 18px;
    margin-bottom: 10px;
}

.detail-box h6 span {
    font-weight: bold;
    color: #333;
}

.detail-box form {
    margin-top: 20px;
}

.detail-box input[type="number"] {
    width: 49px;
    height: 30px;
    border-radius: 38px;
    border: 1px solid #b9b6b6;
    padding: 5px 10px;
    font-size: 16px;
    outline: none;
    background-color: #ffffff00;
}


.detail-box input[type="submit"] {
    width: 120px;
    border: none;
    text-align: center;
    padding-left: 5px;
    padding: 10px ;
    border-radius: 10px;
    background-color: rgba(245, 172, 223, 0.623);
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.detail-box input[type="submit"]:hover {
    background-color: #53090910;
}
/* Style pour les étoiles de notation */
.rate {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px; /* Ajout de marge en bas */
}

.rate label {
    font-size: 30px;
    color: #aaa;
    cursor: pointer;
    transition: color 0.3s;
    margin-right: 10px; /* Ajout de marge à droite pour espacer les étoiles */
}

/* Style pour le champ de commentaire */
.form-group.textarea {
    margin-bottom: 20px; /* Ajout de marge en bas */
}

/* Style pour le bouton de soumission */
.btn-info {
    margin-top: -20px;
    margin-right: 608px;
    background-color: #ff008d;
    border-color: pink;
}

/* Style pour la section d'évaluation globale */
.global-ratings {
    margin-top: 30px;
    text-align: center;
    margin-bottom: 20px; /* Ajout de marge en bas */
}

/* Style pour la section des avis des clients */
.customer-reviews {
    margin-top: 30px;
    margin-bottom: 20px; /* Ajout de marge en bas */
   margin-left: 100px;
}
/* Style pour la section d'évaluation globale */
.global-ratings {
    margin-top: 30px;
    text-align: center;
    margin-bottom: 20px;
}

.global-ratings h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 15px;
}

.global-ratings p {
    font-size: 18px;
    color: #666;
}

/* Style pour la section des avis des clients */
.customer-reviews {
    margin-top: 30px;
}

.customer-reviews h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.rating {
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
}

.stars {
    font-size: 20px;
    color: #f716be;
}

.comment {
    font-size: 16px;
    color: #666;
    margin-top: 10px;
}

.comment strong {
    color: #333;
}

/* Style pour les étoiles de notation */
.rating .stars .fa-star {
    color:  #f716be;
    margin-right: 5px;
}

/* CSS pour centrer le tableau et ajuster la largeur */
.customer-reviews {
    margin-top: 30px;
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    text-align: center; /* Centrer le contenu */
    width: 90%;
}

.customer-reviews h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

.custom-table {
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    width: 90%; /* Réduire la largeur */
    margin: 0 auto; /* Centrer le tableau */
}

.custom-table th, .custom-table td {
    vertical-align: middle;
    padding: 12px;
    font-size: 16px;
    color: #555;
    border-bottom: 1px solid #f0f0f0;
}

.custom-table th {
    background-color: #f5f5f5;
    font-weight: bold;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.custom-table tbody tr:hover {
    background-color: #f0f0f0;
}

.stars {
    color:  #f716be;
    font-size: 18px;
}

.stars .fa-star {
    margin-right: 2px;
}
#rateFormContainer {
    display: none;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.rate {
    display: flex;
    justify-content: center;
}

.rate input {
    display: none;
}

.rate label {
    font-size: 24px;
    color: #f716be; /* Couleur jaune pour les étoiles */
    cursor: pointer;
    transition: color 0.3s;
}

.rate input:checked ~ label {
    color: #f716be; /* Couleur orange pour les étoiles cochées */
}

textarea.form-control {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
    font-size: 16px;
    resize: vertical;
}

.btn-info {
    background-color: #ee67d1; /* Couleur de fond personnalisée */
    color: #fff;
    border: none;
    transition: background-color 0.3s;
}

.btn-info:hover {
    background-color: #dfbde6; /* Couleur de fond au survol */
}


         /* End of Star Rating */
      </style>
   </head>
   <body>
      <div class="hero_area">
         @include('home.header')
         <div class="container">
            <div class="row">
               <!-- Colonne pour l'image du produit -->
               <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="img-box" style="padding: 20px">
                     <img src="product/{{$product->image}}" alt="product image" style="width:400px">
                     <h6>Product Description : {{$product->description}}</h6>
                  </div>
               </div>


               

               <!-- Colonne pour les détails du produit -->
               <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="detail-box" style="padding: 20px">
                     <h5 style="text-align: center;font-size:30px;color:rgb(255, 0, 128)">{{$product->title}}</h5>
                     @if($product->discount_price != null)
                     <h6>Discount price {{$product->discount_price}}MAD</h6>
                     <h6 style="text-decoration: line-through; color:rgb(255, 48, 245)">Price<br>{{$product->price}}MAD</h6>
                     @else
                     <h6 style="color: rgb(0, 0, 0)">Price <span style="margin-left: 300px;color:#ff0e87;text-decoration:underline">{{$product->price}} MAD</span></h6>
                     @endif
                     <h6>Product Category : {{$product->category}}</h6>
                     <h6>{{$product->quantity}}</h6>
                     <form action="{{url('add_cart',$product->id)}}" method="POST">
                        @csrf
                        <div class="row">
                           <div class="col-md-4">
                              <input type="number" value="1" min="1"  width="100px" name="quantity">
                           </div>
                           <div class="col-md-4">
                            <button type="submit" class="add-to-cart-btn" style="background-color: pink;
                            border-radius: 6px;
                            padding: 5px;
                            border-color: pink;
                            margin-left: 160px;
                            width: 150px">
                                Add to cart <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                        
                        
                           <button id="rateButton" style="margin-top: 57px;
                           margin-left: -2px;
                           background-color: #fffffff5;
                           border-radius: 5px;
                           border-color: #db2a52;
                       }">Rate {{ $product->title }} <i class="fa-regular fa-star"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="rateFormContainer" class="container" style="display: none;">
         <div class="row">
            <div class="col mt-4">
               <form action="{{ route('add_rate') }}" method="POST" style="text-align: center">
                  @csrf
                  <h2>Rate {{ $product->title }}</h2>
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <div class="form-group row">
                     <div class="col">
                        <div class="rate">
                           <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                           <label for="star5" title="text">5 stars</label>
                           <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                           <label for="star4" title="text">4 stars</label>
                           <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                           <label for="star3" title="text">3 stars</label>
                           <input type="radio" id="star2" class="rate" name="rating" value="2">
                           <label for="star2" title="text">2 stars</label>
                           <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                           <label for="star1" title="text">1 star</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group row mt-4" >
                     <div class="col">
                        <textarea class="form-control" style="width:500px;height:150px " name="comment" rows="6" placeholder="Comment" maxlength="200"></textarea>
                     </div>
                  </div>
                  <div class="mt-3 text-right">
                     <button class="btn btn-sm py-2 px-3 btn-info" type="submit" style="text-align: center">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Affichage des informations globales sur les évaluations -->
      <div class="customer-reviews mt-5">
        <h2 class="mb-4">Visitors Reviews</h2>
        <div class="table-responsive">
            <table class="table table-striped text-center custom-table">
                <colgroup>
                    <col style="width: 35%;">
                    <col style="width: 50%;">
                    <col style="width: 15%;">
                </colgroup>
                <thead>
                    <tr>
                        <th>Visitor</th>
                        <th>Comment</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ratings as $rating)
                    <tr>
                        <td>{{ $rating->user ? $rating->user->name : 'Anonymous' }}</td>
                        <td>{{ $rating->comment }}</td>
                        <td>
                            <div class="stars">
                                @for ($i = 0; $i < $rating->rating; $i++)
                                <i class="fa fa-star"></i>
                                @endfor
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
   
        <div id="rateFormContainer" class="container" style="display: none;">
            <div class="row">
               <div class="col mt-4">
                  <form action="{{ route('add_rate') }}" method="POST" style="text-align: center">
                     @csrf
                   
                     <input type="hidden" name="product_id" value="{{ $product->id }}">
                     <div class="form-group row">
                        <div class="col">
                           <div class="rate">
                              <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                              <label for="star5" title="text">5 stars</label>
                              <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                              <label for="star4" title="text">4 stars</label>
                              <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                              <label for="star3" title="text">3 stars</label>
                              <input type="radio" id="star2" class="rate" name="rating" value="2">
                              <label for="star2" title="text">2 stars</label>
                              <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                              <label for="star1" title="text">1 star</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group row mt-4">
                        <div class="col">
                            <textarea class="form-control" style="width: 100%; height: 150px;" name="comment" rows="6" placeholder="Write Your Comment Here ..." maxlength="200"></textarea>
                        </div>
                    </div>
                    <div class="mt-3 text-left">
                        <button class="btn py-2 px-3 btn-info"  type="submit" style="width: 100%;background-color: rgb(172, 127, 45);">Send</button>
                    </div>
                   
                  </form>
               </div>
            </div>
         </div>
      @include('home.footer')
     
      <!-- jQery -->
      <script>
         document.getElementById('rateButton').addEventListener('click', function(event) {
         event.preventDefault(); // Prevent the default behavior of the button
         document.getElementById('rateFormContainer').style.display = 'block';
      });
      </script>
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
 
 