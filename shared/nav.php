<?php include 'head.php' ?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">ecommerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          offer
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/ecommerce/offers/addOffer.php/">add offer</a>
          <a class="dropdown-item" href="/ecommerce/offers/listOffer.php/">list offer</a>
         
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          feedback
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="/ecommerce/feedback/listfeedback.php/">list feedback</a>
         
      </li>
     
    </ul>
    
  </div>
</nav>

<?php include 'script.php' ?>