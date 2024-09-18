<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
        }
        .centre{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid rgb(221, 221, 240);

        }
        /* Style pour le formulaire "Add Category" */
.div_center {
    text-align: center;
    padding-top: 40px;
    margin-left: auto;
    margin-right: auto;
    width: 50%; /* Largeur du formulaire */
}

.h2_font {
    font-size: 36px;
    padding-bottom: 20px;
    color: #333; /* Couleur du titre */
}

.input_color {
    color: #555; /* Couleur du texte des champs de saisie */
    background-color: #f9f9f9; /* Couleur de fond des champs de saisie */
    border: 1px solid #ccc; /* Bordure des champs de saisie */
    border-radius: 5px; /* Bordure arrondie des champs de saisie */
    padding: 10px; /* Espacement à l'intérieur des champs de saisie */
    width: 100%; /* Largeur des champs de saisie */
    box-sizing: border-box; /* Taille incluant la bordure et le padding */
    margin-bottom: 10px; /* Marge en bas des champs de saisie */
}

.btn-primary {
    background-color: #4CAF50; /* Couleur de fond du bouton "Add Category" */
    border: none; /* Supprimer la bordure du bouton */
    color: white; /* Couleur du texte du bouton */
    padding: 10px 20px; /* Espacement à l'intérieur du bouton */
    text-align: center; /* Alignement du texte au centre */
    text-decoration: none; /* Supprimer le soulignement du texte */
    display: inline-block; /* Affichage en ligne du bouton */
    font-size: 16px; /* Taille de la police du bouton */
    border-radius: 5px; /* Bordure arrondie du bouton */
    cursor: pointer; /* Curseur de la souris en pointeur au survol */
    margin-top: 20px; /* Marge en haut du bouton */
    margin-left: 0; /* Réinitialisation de la marge gauche */
}

.btn-primary:hover {
    background-color: #45a049; /* Couleur de fond du bouton au survol */
}

/* Style pour le tableau de catégories */
.centre {
    margin-left: auto;
    margin-right: auto;
    width: 90%; /* Largeur du tableau */
    border-collapse: collapse; /* Fusionner les bordures des cellules */
    margin-top: 40px; /* Marge en haut du tableau */
}

.centre th, .centre td {
    border: 1px solid #ddd; /* Bordure des cellules */
    padding: 8px; /* Espacement à l'intérieur des cellules */
    text-align: center; /* Alignement du texte au centre */
}

.centre th {
    background-color: #f2f2f2; /* Couleur de fond des cellules d'en-tête */
    color: #333; /* Couleur du texte des cellules d'en-tête */
    font-weight: bold; /* Texte en gras dans les cellules d'en-tête */
}

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"  aria-hidden='true'>x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input type="text" class="input_color" name="category"  placeholder="Write category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>
                <table class="centre">
                    <tr>
                        <td>Category Name</td>
                        <td>Action</td>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                       <td>{{$data->category_name}}</td>
                       <td>
                            <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                       </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>