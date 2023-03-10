<!DOCTYPE html>
<html lang="en"></html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Personal Website</title>
   <?php echo link_tag('css/style.css'); 
   echo script_tag('jscript/Resources.js');?>
   </head>
      
      <body>
        <style>
          .list {
            font-size: 30px;
          }
          ul.b {
            list-style-type: square;
          }
                    
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            body {
              min-height: 100%;
              background-color:#161616;
              background-size: 100%;
            }
            a.one:link {
              color:whitesmoke;
              text-decoration:none;
            }   
            a.one:visited {
              color:whitesmoke;
              text-decoration:none;
            }
            a.one:hover {
              color:#c89595; 
              text-decoration:underline;
              }
            p.double {border-style: double; border-color: whitesmoke; padding: 15px; width: 200px; }
            p.dotted {border-style: dotted; border-color: whitesmoke; padding: 50px; width: 450px; }
          </style>

          </br>
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

        <center>
          </br>
          <hr width="100%" color="8a3a3a" size="3" />
          </br></br>
          <hr width="100%" color="#c89595" size="4" />
          </br></br></br></br>
                 
          <b><p class="double">HTML & CSS</p></b>
          </br>
          <p class="dotted">
            <a class="one" href="https://codeigniter4.github.io/userguide/intro/index.html" target="_blank">CodeIgniter4 </br></a>
            <a class="one" href="https://www.w3schools.com/php/php_form_complete.asp" target="_blank">Form</br></a>
            <a class="one" href="https://www.youtube.com/watch?v=U-CujW5OlW0" target="_blank">Gallery</br></a>
            <a class="one" href="https://fonts.google.com/?preview.size=45&preview.text=Bonjour!&preview.text_type=custom" target="_blank">Google Fonts</br></a>
            <a class="one" href="https://www.youtube.com/watch?v=Y-NlvkKO90o&t=1s" target="_blank">Minimal Cat Animation</br></a>
            <a class="one" href="https://www.w3schools.com/css/default.asp" target="_blank">W3Schools CSS Tutorial </br> </a>
            <a class="one" href="https://www.w3schools.com/html/default.asp" target="_blank">W3Schools HTML Tutorial</br></a>
            <a class="one" href="https://www.w3schools.com/js/default.asp" target="_blank">W3Schools JavaScript Tutorial </br> </a>
            <a class="one" href="https://www.w3schools.com/php/php_mysql_intro.asp" target="_blank">W3Schools MySQL Tutorial </br> </a>
            <a class="one" href="https://www.w3schools.com/php/default.asp" target="_blank">W3Schools PHP Tutorial </br> </a>
          </p>
      </center>
      
</br>
</br>
    </body>
</html>
