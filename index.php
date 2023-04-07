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
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
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
    <script type="text/javascript" src="js/index.js"></script>
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
          <a href="www.josephbhorowitz.com"><h1>Joseph Horowitz</h1></a>
          <h2>Ar Designer</h2>
        </div>
        <div class="menu-info">
          <h1>Menu</h1>
          <a href="www.josephbhorowitz.com"><h2>Home</h2></a>
          <a href="www.josephbhorowitz.com/about"><h2>About</h2></a>
        </div>
        <div class="menu-proj">
          <h1>Projects</h1>
          <a href="www.josephbhorowitz.com"><h2>Title</h2></a>
          <a href="www.josephbhorowitz.com"><h2>Title</h2></a>
          <a href="www.josephbhorowitz.com"><h2>Title</h2></a>
          <a href="www.josephbhorowitz.com"><h2>Title</h2></a>
        </div>
      </div>
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div> 
    </nav>

    <a href="#Top"><nav id="ToTop"><h3>↑</h3></nav></a>
    <header id="Top">
      <div>
        <h1 id="title">Hello,<br> I'm Joe.</h1>
        <h2 id="projectLink">AR Designer  -  Prototyper  -  Creative Technologist</h2>
      </div>  
    </header>
    <section id="Projects">
      <div class="Project_Preview" style="background-image: url('img/projects/fasara.png');">
        <a href="#">
          <div class="background_fade">
            <div class="text_wrapper">
              <span>
                <h1>Title</h1>
                <h2>Tag - Tag - Tag - Tag</h2>
                <p>Short Description of the project that I have created, mostly talking about stuff like the form the project takes and what it helps with.</p>
              </span>
            </div>
          </div>
        </a>
      </div>
      <div class="Project_Preview" style="background-image: url('img/projects/post-it.png');">
        <a href="#">
          <div class="background_fade">
            <div class="text_wrapper">
              <span>
                <h1>Title</h1>
                <h2>Tag - Tag - Tag - Tag</h2>
                <p>Short Description of the project that I have created, mostly talking about stuff like the form the project takes and what it helps with.</p>
              </span>
            </div>
          </div>
        </a>
      </div>
      <div class="Project_Preview" style="background-image: url('img/projects/Color_Render.png');">
        <a href="#">
          <div class="background_fade">
            <div class="text_wrapper">
              <span>
                <h1>Title</h1>
                <h2>Tag - Tag - Tag - Tag</h2>
                <p>Short Description of the project that I have created, mostly talking about stuff like the form the project takes and what it helps with.</p>
              </span>
            </div>
          </div>
        </a>
      </div>
      <div class="Project_Preview" style="background-image: url('img/projects/SliderRender.png');">
        <a href="#">
          <div class="background_fade">
            <div class="text_wrapper">
              <span>
                <h1>Title</h1>
                <h2>Tag - Tag - Tag - Tag</h2>
                <p>Short Description of the project that I have created, mostly talking about stuff like the form the project takes and what it helps with.</p>
              </span>
            </div>
          </div>
        </a>
      </div>
    </section>
    <footer>&#x3c \ &#x3e & Shaders by yours truly!</footer>
  </body>
</html>
