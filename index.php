<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Truqes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/css/truqesStyle.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Truqes</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">O que é</a></li>
        <li><a href="#services">Como funciona</a></li>
        <li><a href="#contact">Receba novidades</a></li>
      </ul>
    </div>
  </div>
</nav>


  <center><img src="../css/img/logo_truqes.png" alt="Truqes" style="width:300px;height:250px;""> </center>
  <Br>

</div>

</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>O que é</h2><br>
      <p>Um novo jeito de aprender tecnologia. Conteúdos organizados e refinados, pra você nunca mais ficar com dúvida de qual deve ser seu próximo passo.
      </p>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>




<div id="services" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Como funciona</h2><br>
      <h4><strong> O Truqes </strong> , organiza conteúdos em vídeos rápidos. Os vídeos se conectam através de palavras-chave e áreas. Você explora e se aprofunda navegando por conceitos e práticas.  </p>
    </div>
  </div>
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">
  <h2 class="text-center">Receba novidades</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Assine nossa newsletter e tenha acesso antecipado a essa nova maneira de descobrir o mundo. </p>
    </div>

        <div class="col-sm-6 form-group">
                         <div class="input-container">
                    <img src="../css/img/ico_mail.png" alt="e-mail" style="width:40px;height:20px;">
                  <input class="input-field" type="text" placeholder="Email" name="email">
                </div>

          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>




<div id="id01" class="modal">
  
  <form class="modal-content animate" action="\Projetos\Truqes\Login\home.html">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button class="btn default">Login</button>
    </div>


  </form>
</div>




<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
<div class="container-fluid">
  <img src="../css/img/logo_yt.png" alt="youtube">
  <img src="../css/img/logo_twitter.png" alt="twitter">
  <img src="../css/img/logo_medium.png" alt="medium">
  <img src="../css/img/logo_insta.png" alt="instagram">
   
</div>
</footer>

<script>

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
