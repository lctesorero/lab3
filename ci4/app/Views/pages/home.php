<!DOCTYPE html>
<html lang="en"></html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Personal Website</title>
  <link rel="stylesheet" href="style.css" title="type" />
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Amita&family=Cinzel+Decorative:wght@400;700&family=Clicker+Script&family=Delius+Unicase&family=Irish+Grover&family=Itim&family=Mountains+of+Christmas:wght@400;700&family=Nunito:wght@500&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">

    </head>

<body>
  <style>

    .cat {
    position: relative;
    height: 200px;
    width: 195.1px;
    bottom: -50px;
  }
  
  .ear {
    position: absolute;
    top: -28%;
    height: 60%;
    width: 27.5%;
    background: #c89595;
  }
  
  .ear::before, .ear::after{
    content: "";
    position:absolute;
    bottom: 24%;
    height: 20%;
    width: 8%;
    border-radius: 50%;
    background: #161616;
  }
  
  .ear::after {
    transform-origin: 50% 100%;
  }
  
  .ear--left {
    left: -7%;
    border-radius: 70% 30% 0% 0%/ 100% 100% 0% 0%;
    transform: rotate(-15deg);
  }
  
  .ear--left::before, .ear--left::after {
    right: 10%;
  }
  
  .ear--left::after {
    transform: rotate(-45deg);
  }
  
  .ear--right {
    right: -7%;
    border-radius: 30% 70% 0% 0%/ 100% 100% 0% 0%;
    transform: rotate(15deg);
  }
  
  .ear--right::before, .ear--right::after {
    left: 10%;
  }
  
  .ear--right::after {
    transform: rotate(45deg);
  }
  
  .face {
    position:absolute;
    height: 100%;
    width: 105%;
    background: #161616;
    border-radius: 50%;
  }
  
  .eye {
    position: absolute;
    top: 35%;
    height: 30%;
    width: 31%;
    background: #fff;
    border-radius: 50% 50% 50% 50%/60% 60% 40% 40%;
  }
  
  .eye::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 0;
    width: 100%;
    border-radius: 0 0 50% 50%/0 0 40% 40%;
    background: #161616;
    -webkit-animation: blink 2s infinite ease-in;
    animation: blink 5s infinite ease-in;
  }
  
  @keyframes blink {
    0%
    {
      height: 0;
    }
    90%
    {
      height: 0%;
    }
    92.5%
    {
      height: 100%;
    }
    95%
    {
      height: 0;
    }
    97.5%
    {
      height: 100%;
    }
    100%
    {
      height: 0;
    }
  }
  .eye::before {
    content: "";
    position: absolute;
    top: 60%;
    height: 10;
    width: 15%;
    background: rgb(238, 66, 66);
    border-radius: 50%;
  }
  
  .eye--left {
    left: 0;
  }
  
  .eye--left::before {
    right: -5%;
  }
  
  .eye--right {
    right: 0;
  }
  
  .eye--right::before {
    left: -5%;
  }
  
  .eye-pupil {
    position: absolute;
    top: 55%;
    height: -10;
    width: 20%;
    background: #161616;
    border-radius: 30%;
    -webkit-animation: look-around 5s infinite;
    animation: look-around 5s infinite;
  }
  
  @keyframes look-around {
    0%
    {
      transform: translate(0);
    }
    5%
    {
      transform: translate(50%, -25%);
    }
    10%
    {
      transform: translate(50%, -25%);
    }
    15%
    {
      transform: translate(-100%, -25%);
    }
    20%
    {
      transform: translate(-100%, -25%);
    }
    25%
    {
      transform: translate(0, 0);
    }
    100%
    {
      transform: translate(0, 0);
    }
  }
  
  .eye--left .eye-pupil {
    right: 30%;
  }
  
  .eye--right .eye-pupil {
    left: 30%;
  }
  
  .eye--pupil::after {
    content: "";
    position: absolute;
    top: 30%;
    right: -5%;
    height: 20%;
    width: 35%;
    border-radius: 50%;
    background: #fff;
  }
  
  .muzzle {
    position: absolute;
    top: 60%;
    left: 50%;
    height: 6%;
    width: 10%;
    background: #fff;
    transform: translateX(-50%);
    border-radius: 50% 50% 50% 50%/ 30% 30% 70% 70%;
  }
  
  html {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--primary-color);
  }

  </style>
      <center>
        <style>
          a {
            font-family: 'Mountains of Christmas', cursive;
            color: var(--secondary-color);
            font-size: 50px;
            text-align: center;
            margin-left: 5px ;
            margin-right: 5px;
          }
          </style>
        <a href="About Me.php">Bonjour, Bienvenue sur Mon Site Web!</a></button>
        </br>
        </br>
        </br>
        <div class="cat">
          <div class="ear ear--left"></div>
          <div class="ear ear--right"></div>
          <div class="face">
            <div class="eye eye-left">
              <div class="eye-pupil"></div>
          </div>
          <div class="eye eye--right">
            <div class="eye-pupil"></div>
          </div>
          <div class="muzzle"></div>
        </div>
        </div>
      </br>
    </br>
  </br>
</br>
        
        <button type="button"
          onclick="document.getElementById('demo').innerHTML = Date()">
          Click me to display Date and Time.</button>
          <p id="demo"></p>
      </center>
</br>
</br>
    </body>
</html>