<!DOCTYPE html>
<html>
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
         body{
            background-color: #f5c8cf67;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
        @include('home.slider')
         <!-- end slider section -->
      </div>
      
      
      @include('home.welcome')
      @include('home.product')
      <!-- Ajoutez ceci à l'endroit où vous souhaitez afficher le message -->
      @if(isset($message))
      <div class="alert alert-warning" role="alert">
         {{ $message }}
      </div>
      @endif


      <!-- end product section -->

      <!--Comment and reply system starts here -->
        <!-- <div>
            <h1 style="font-size: 30px; text-align:center; color:black;padding-bottom:20px">Comments</h1>

            <form action="{{url('add_comment')}}" method="POST" style="text-align: center">
               @csrf

               <textarea style="height: 150px ; width:600px;" name="comment"  placeholder="Comment Something here.."></textarea>
               <br>
               <input type="submit" value="Comment" class="btn btn-primary">
            </form>
         </div>

         <div > 
            <h2 style="font-size: 20px; padding-bottom:30px; color:rgb(0, 0, 0); text-align:center">All Comments</h2>

            @if(isset($comment))
            @foreach($comment as $comment)
            <div style="padding-left: 20%">
               <b>{{$comment->name}}</b>
               <p>{{$comment->comment}}</p>
               <a style="color:blue" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>

              @foreach($reply as $rep)
              @if($rep->comment_id==$comment->id)
               <div style="padding-left: 3%; padding-bottom:10px">
                  <b>{{$rep->name}}</b>
                  <p>{{$rep->reply}}</p>
                  <a style="color:blue" href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{$comment->id}}">Reply</a>
               </div>
               @endif
              @endforeach

            </div>
            @endforeach
        @endif
        

            
            <!-- Reply Text Area -->
            <!-- <div style="padding-left: 20%; display:none;" class="replyDiv" >
               <form action="{{url('add_reply')}}" method="POST">
                  @csrf
               <input type="text" id="commentId" name="commentId" hidden>
               <textarea style="height: 100px; width:500px" name="reply" placeholder="write something here.."></textarea><br>
               
               <button type="submit" class="btn btn-warning">Reply</button>

               <a href="javascript::void(0);" class="btn" onclick="reply_close(this)">close</a><!-- javascript::void(0); kandirouha bach fach nclicker 3la had lbutton la page ga3ma trecharja!-->
                  </form>
            </div>

         </div>



  

      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2024 All Rights Reserved By Imane Arroub<br>
         
         
         </p>
      </div>

      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
      
      <script>
         function reply(caller){
            document.getElementById('commentId').value=$(caller).attr('data-Commentid');
            $('.replyDiv').insertAfter($(caller));
            $('.replyDiv').show();
         }

         function reply_close(caller){
      
            $('.replyDiv').hide();
         }
      </script>

      

   </body>
</html>
