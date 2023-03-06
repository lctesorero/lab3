<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Personal Website</title>
  <link rel="stylesheet" href="Gallery.css" title="type" />
  <script>Resources.js</script>

  <link href="https://fonts.googleapis.com/css2?family=Amita&family=Cabin+Sketch:wght@700&family=Cinzel+Decorative:wght@400;700&family=Clicker+Script&family=Delius+Unicase&family=Fredoka+One&family=Irish+Grover&family=Itim&family=Macondo&family=Mountains+of+Christmas:wght@400;700&family=Nunito:wght@500&family=Signika+Negative:wght@700&display=swap" rel="stylesheet">
</head>

<body>

</br>
  <style>
    .list {
      font-size: 20px;
	     }

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-weight: sans-serif;
  background-color: #161616;
}

audio {
  width: 10%;
  opacity: 0.1;
}

a {
  font-family: 'Times New Roman', Times, serif;
  color: #c89595;
  font-size: 20px;
  text-align: center;
  margin-left: 5px ;
  margin-right: 5px;
  }
  
nav ul {
  flex: 1;
  text-align: right;
  }
  
.L {
  height: 10vh;
  width: 100%;
  background: #161616;
  font-family:'Times New Roman', Times, serif;
  position: relative;
  }
  
nav {
  width: 84;
  margin: auto;
  padding: 20px 0;
  display:flex;
  align-items: center;
  justify-content: space-between;
  }

nav ul li {
  display: inline-block;
  list-style: none;
  margin: 10px 20px;
  font-size: 21px;
  }
  
nav ul li a {
  text-decoration: none;
  color: whitesmoke;
  }
  
nav ul li a:hover {
  color: #ff4321;
  }

input {
  display: none;
}

.container {
  width: 100%;
  text-align: center;
}

h1 {
  color: whitesmoke;
  font-weight: normal;
  font-size: 35px;
  position: relative;
  margin: 40px 0;
}

h1::before {
  content: "";
  position: absolute;
  width: 100px;
  height: 3px;
  background-color: #c89595;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  animation: animate 4s linear infinite;
}

@keyframes animate {
  0% {
    width: 100px;
  }
  50% {
    width: 200px;
  }
  100% {
    width: 100px;
  }
}

h3 {
  height: 100%;
  background-color: whitesmoke;
  line-height: 60px;
  padding: 0 50px;
  color: #8a3a3a;
}

label {
  display: inline-block;
  height: 100%;
  margin: 0 30px;
  line-height: 60px;
  font-size: 18px;
  color: black;
  cursor: pointer;
  transition: .5s;;
}

.photo-gallery {
  width: 90%;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
}

.pic {
  position: relative;
  height: 230px;
  border-radius: 10px;
  box-shadow: 3px 3px 5px rgb(10, 10, 10);
  cursor: pointer;
  transition: .5s;
}

.pic img {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  transition: .5s;
}

.pic::before {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgb(26, 24, 24);
  font-size: 22px;
  font-weight: bold;
  width: 100%;
  margin-top: -100px;
  opacity: 0;
  transition: .3s;
  transition-delay: .2s;
  z-index: 1;
}

.pic::after {
  content: "";
  position: absolute;
  width: 100%;
  bottom: 0;
  left: 0;
  border-radius: 10px;
  height: 0;
  background-color: none;
  transition: .3s;
}

.pic:hover::after {
  height: 100%;
}

.pic:hover::before {
  margin-top: 0;
  opacity: 1;
}

#check1:checked ~ .container .photo-gallery .pic {
  opacity: 1;
  transform: scale(1);
  position: relative;
  transition: .5s;
}
p.double {border-style: double; border-color: whitesmoke; padding: 10px; height: 335px; width: 225px;}
p.dotted {border-style: dotted; border-color: whitesmoke; padding: 15px; height: 320px; width: 1200px; align-items: center; }
  </style>

      <div class="L">
        <nav>
            <ul>
            <li><a href="Home">Home</a></li>
            <li><a href="AboutMe">About</a></li>
                  <li><a href="Gallery">Gallery</a></li>
                  <li><a href="Form">Form</a></li>
                  <li><a href="Resources">Resources</a></li>
            </ul> 
        </nav>
      </div>
    </br>

<center>
  <hr width="100%" color="8a3a3a" size="3" />
          </br> </br>
          <hr width="100%" color="#c89595" size="3" />
          </br>
 <input type="radio" name="Photos" id="check1" checked>

 <div class ="container">
    <h1>My Gallery</h1>

    </div>
  </center>
    <div class="photo-gallery">
      <div class="pic moments">
        <img src="images/mm1.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam1.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc1.jpg">
      </div>
      <div class="pic church">
        <img src="images/c1.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm2.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam2.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc2.jpg">
      </div>
      <div class="pic church">
        <img src="images/c2.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm3.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam3.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc3.jpg">
      </div>
      <div class="pic church">
        <img src="images/c3.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm4.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam4.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc4.jpg">
      </div>
      <div class="pic church">
        <img src="images/c4.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm5.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam5.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc5.jpg">
      </div>
      <div class="pic church">
        <img src="images/c5.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm6.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam6.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc6.jpg">
      </div>
      <div class="pic church">
        <img src="images/c6.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm7.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam7.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc7.jpg">
      </div>
      <div class="pic church">
        <img src="images/c7.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm8.jpg">
      </div>
      <div class="pic family">
        <img src="images/fam8.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc8.jpg">
      </div>
      <div class="pic church">
        <img src="images/c8.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm9.jpg">
      </div>
      <div class="pic moments">
        <img src="images/mm4.jpg">
      </div>
      <div class="pic school">
        <img src="images/sc9.jpg">
      </div>
      <div class="pic church">
        <img src="images/c9.jpg">
      </div>

    </div>
 </div>
</br>

</br>
</body>
</html>


