<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <style>
        .welcome-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 40px;
}

.welcome-container img {
    width: 250px;
    margin-right: 20px;
    animation: slideFromLeft 3s ease infinite;
    opacity: 0; /* Définit l'image à l'état invisible au début de l'animation */
}

@keyframes slideFromLeft {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(0);
        opacity: 1; /* Rend l'image visible à la fin de l'animation */
    }
}

h3 {
    position: relative;
    font-size: 25px;
    font-family: Courier, monospace;
}

h3::before {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    color: rgb(248, 0, 153);
    font-family: Courier, monospace;
    border-right: 2px solid rgb(236, 52, 138);
    overflow: hidden;
    animation: animate 6s linear infinite;
}

@keyframes animate {
    0%,10%,100% {
        width: 0;
    }
    70%,90% {
        width: 50%;
    }
}

    </style>
</head>
<body>
    <div class="welcome-container">
        <img src="donuts-box.jpg">
        <div>
            <b><h3 data-text="Welcome To Our Shop!">Welcome To Our Shop!</h3></b><br>
            <p>Welcome to Donuts Delight! <br>Indulge in our delectable selection of freshly made donuts and artisanal beverages. <br> Experience sweet moments with us!</p>
        </div>
    </div>
</body>
</html>


