<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Donuts_Delight</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="home/css/style.css" rel="stylesheet" />
    <link href="home/css/responsive.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5c8cf67;
            color: #333;
        }
        .about_section {
            padding: 50px 0;
        }
        .about_taital_main {
            padding: 20px;
        }
        .about_taital_main h2 {
            font-size: 48px;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
            color: black;
        }
        .about_taital_main h5 {
            font-size: 45px;
            color: rgb(255, 0, 179);
            font-family: Tangerine;
            margin-top: 10px;
        }
        .about_taital_main p {
            font-size: 18px;
            line-height: 1.8;
            margin-top: 20px;
        }
        .chef-img {
            height: 200px;
            width: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .chef-info {
            text-align: center;
            margin-bottom: 30px;
            padding: 0 15px;
        }
        .video-container {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 15px;
        }
        .chef-images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }
        @media (max-width: 768px) {
            .about_taital_main h2 {
                font-size: 36px;
            }
            .about_taital_main h5 {
                font-size: 35px;
            }
            .about_taital_main p {
                font-size: 16px;
            }
            .chef-img {
                height: 150px;
                width: 150px;
            }
        }
        @media (max-width: 480px) {
            .about_taital_main h2 {
                font-size: 28px;
            }
            .about_taital_main h5 {
                font-size: 28px;
            }
            .about_taital_main p {
                font-size: 14px;
            }
            .chef-img {
                height: 120px;
                width: 120px;
            }
        }
    </style>
</head>
<body>
    @include('home.header')

    <div class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <h2>About us</h2>
                        <h5>Donuts Delight</h5>
                        <p>
                            At Donuts Delight, we believe that every sweet delight tells a story. Since our inception, we have been committed to creating unforgettable moments through our artisanal pastries, crafted with passion and dedication.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-container">
                        <video controls autoplay loop>
                            <source src="{{ asset('aboutvideo.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3 style="text-align: center;margin-bottom:30px; color: rgb(255, 36, 109); text-decoration: underline;">Our Chefs</h3>
                </div>
                <div class="chef-images">
                    <div class="col-md-4">
                        <div class="chef-info">
                            <img src="{{ asset('chef1.png') }}" alt="Chef 1" class="chef-img">
                            <h4>Nihad</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chef-info">
                            <img src="{{ asset('chef2.png') }}" alt="Chef 2" class="chef-img">
                            <h4>Anas</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="chef-info">
                            <img src="{{ asset('chef3.png') }}" alt="Chef 3" class="chef-img">
                            <h4>Imane</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')

    <!-- Scripts -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.js"></script>
    <script src="home/js/custom.js"></script>
</body>
</html>
