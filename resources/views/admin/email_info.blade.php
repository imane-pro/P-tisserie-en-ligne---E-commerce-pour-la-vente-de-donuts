<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
        }

        input{
            color: black;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">

     @include('admin.sidebar')
    
      @include('admin.header')
        <div class="main-panel">
            <div class="content-wrapper">
                <h2 style="text-align: center ; color:rgb(231, 66, 143)">Send Email to {{$order->email}}</h2>
                <form action="{{url('send_user_email',$order->id)}}" method="POST">
                    @csrf

                <div style="padding-left: 35%; padding-top:30px;">
                    <label>Email Greeting :</label>
                    <input type="text" name="greeting">
                </div>

                <div style="padding-left: 35%; padding-top:30px;">
                    <label>Email FirstLine :</label>
                    <input type="text" name="firstline">
                </div>

                <div style="padding-left: 35%; padding-top:30px;">
                    <label>Email Body :</label>
                    <input type="text" name="body">
                </div>

                <div style="padding-left: 35%; padding-top:30px;">
                    <label>Email Button name :</label>
                    <input type="text" name="button">
                </div>

                <div style="padding-left: 35%; padding-top:30px;">
                    <label>Email Url :</label>
                    <input type="text" name="url">
                </div>

                <div style="padding-left: 35%; padding-top:30px;">
                    <label>Email Last Line :</label>
                    <input type="text" name="lastline">
                </div>

                <div style="padding-left: 35%; padding-top:30px;">
                    <input type="submit" value="Send Email " class="btn btn-primary">
                </div>

            </form>
            </div>
        </div>
    
    @include('admin.script')

  </body>
</html>