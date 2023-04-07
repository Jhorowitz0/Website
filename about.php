<!DOCTYPE html>
<html>
  <head>
    <title>Joe Horowitz</title>
    <meta name="author" content="Joseph B Horowitz">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;500;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="css/about.css" rel="stylesheet" type="text/css">
    
    <!-- GLSL -->
    <script name="shader" data-src="glsl/lib/easingFunctions.glsl" data-type="easing" data-version="v1"></script>
    <script name="shader" data-src="glsl/lib/perlin3D.glsl" data-type="perlin3D" data-version="v1"></script>
    <script name="shader" data-src="glsl/lib/utils.glsl" data-type="utils" data-version="v1"></script>
    <script name="shader" data-src="glsl/vertex.glsl" data-type="vertex" data-version="v1"></script>
    <script name="shader" data-src="glsl/fragment.glsl" data-type="fragment" data-version="v1"></script>
    <!-- JS -->
    <script type="text/javascript" src="js/lib/signals.js"></script>
    <script type="text/javascript" src="js/lib/glUtils.js"></script>
    <script type="text/javascript" src="js/lib/uiUtils.js"></script>
    <script type="text/javascript" src="js/lib/shaderSetup.js"></script>
    <script type="text/javascript" src="js/about.js"></script>
  </head>

  <body>
    <div>
      <form>
        <h1>Variables</h1>
        <h3>Color 1:</h3>
        <input type="color" id="color1" value="#E1F9D7">
        <h3>Color 2:</h3>
        <input type="color" id="color2" value="#B9DFBA">
        <h3>Color 3:</h3>
        <input type="color" id="color3" value="#333333">
        <h3>Color 4:</h3>
        <input type="color" id="color4">
        <h3>Value 1:</h3>
        <input type="range" id="v1" name="vol" min="0" max="100">
        <h3>Value 2:</h3>
        <input type="range" id="v2" name="vol" min="0" max="100">
        <h3>Value 3:</h3>
        <input type="range" id="v3" name="vol" min="0" max="100">
        <h3>Value 4:</h3>
        <input type="range" id="v4" name="vol" min="0" max="100">
      </form> 
    </div>
    <canvas id="glcanvas">
      Your browser doesn't appear to support the HTML5 <code>&lt;canvas&gt;</code> element.
    </canvas>
    <nav id="Hamburger">
      <input type="checkbox" name="checkbox" class="cm-toggle">
      <div class="slide-menu">
        <div class="menu-sig">
          <a href="index.php"><h1>Joseph Horowitz</h1></a>
          <h2>AR Designer</h2>
        </div>
        <div class="menu-info">
          <h1>Menu</h1>
          <a href="index.php"><h2>Home</h2></a>
          <a href="josephbhorowitz.com/about"><h2>About</h2></a>
        </div>
        <div class="menu-proj">
          <h1>Projects</h1>
          <a href="index.php"><h2>Title</h2></a>
          <a href="index.php"><h2>Title</h2></a>
          <a href="index.php"><h2>Title</h2></a>
          <a href="index.php"><h2>Title</h2></a>
        </div>
      </div>
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div> 
    </nav>
    <section id="About">
      <div id="Description">
        <h2>Pardon My Dust!</h2>
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vitae sapien pellentesque habitant morbi tristique. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis.<br><br> Nisl condimentum id venenatis a condimentum vitae sapien. Consequat interdum varius sit amet mattis vulputate enim nulla. Leo a diam sollicitudin tempor id eu nisl nunc.</h3>
        <h4>Lets Connect!</h4>
        <div id="social">
          <div id="icons">
            <a class="icon" target="_blank" href="https://www.linkedin.com/in/jhorowit/"><img src="./img/linkedIcon.png" alt=""></a>
            <a class="icon" id="email_icon" href="mailto:contact@josephbhorowitz.com"><img src="./img/mailIcon.png" alt=""></a>
          </div>
        </div>
      </div>
      <div id="ProfileImage">
        <img id="defaultProfileImg" class="profile_alt" src="./img/profile/profile_01.png" alt="">
        <img class="profile_alt" src="./img/profile/profile_02.png" alt="">
        <img class="profile_alt" src="./img/profile/profile_03.png" alt="">
        <img class="profile_alt" src="./img/profile/profile_04.png" alt="">
        <img class="profile_alt" src="./img/profile/profile_05.png" alt="">
      </div>
    </section>
    <footer>&#x3c \ &#x3e & Shaders by yours truly!</footer>
  </body>
</html>
