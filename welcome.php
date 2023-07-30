<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agumentic Assignment</title>
  <link rel="stylesheet" href="index.css">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>

<body>

  <!-- navbar content  -->
  <div id="NavBarSection">
    <div id="NavLeftContentContainer">
      <a href="#">
        <li>Home</li>
      </a>
      <a href="#">
        <li>About</li>
      </a>
      <a href="#">
        <li>Contact</li>
      </a>
    </div>
    <div id="NavCenterContentContainer">
      <div id="NavCenterContent">
        <div id="ImageContainer">
          <img src="Images\heptagon.png" alt="Image not found">
        </div>
        <p id="MainHeading">Comsay</p>
      </div>
    </div>
    <div id="NavRightContentContainer">
      <div id="SearchContainer">
        <div id="SearchIcon">
          <img src="Images\search.png" alt="Image not found">
        </div>
        <input type="text" placeholder="Search">
      </div>
      <div id="verticalLine"> </div>
      <div id="CartContainer">
        <div id="CartImage">
          <img src="Images\bag.png" alt="">
        </div>
        <div id="LogoutContainer">
          <a href="logout.php" class="float-right btn btn-outline-info mt-1 ml-3">Log out</a>
        </div>
      </div>
    </div>
  </div>

  <!-- home page content  -->
  <div id="HomePageContent">
    <div id="LeftSideHomeContainer">
      <div id="HomeDetailContainer">
        <h1>It takes more than one sale to get <span style="color: rgb(91, 209, 255);">sucsessful</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dolorum repudiandae consequuntur
          accusamus, deserunt animi soluta earum aliquam quas quasi excepturi, eligendi modi!</p>
      </div>
      <div id="ExploreButtonContainer">
        <button>Explore More</button>
      </div>
      <div id="RatingContainer">
        <div id="StarImage">
          <img src="Images\star.png" alt="Image not found">
          <img src="Images\star.png" alt="Image not found">
          <img src="Images\star.png" alt="Image not found">
          <img src="Images\star.png" alt="Image not found">
          <img src="Images\star.png" alt="Image not found">
        </div>
        <div id="ratingDeatils">Rated 4.9 on App Store & Plays Store</div>
      </div>
    </div>
    <div id="RightSideHomeContainer">
      <div id="RightSideImage">
        <img src="Images\rightImage.png" alt="Image not found">
      </div>
    </div>
  </div>

  <!-- Trusted Partner Container -->

  <div id="TrustedPatnerContainer">
    <div id="ContainerHeading">
      <p>Trusted Partner</p>
    </div>
    <div id="ContainerSubHeading">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, esse.</p>
    </div>
    <div id="TrustedPartnerImages">
      <div class="PartnersImageConainer">
        <img src="Images/ifttt.svg" alt="Image not found">
      </div>
      <div class="PartnersImageConainer">
        <img src="Images/amazon.png" alt="Image not found">
      </div>
      <div class="PartnersImageConainer">
        <img src="Images/google.png" alt="Image not found">
      </div>
      <div class="PartnersImageConainer">
        <img src="Images/paypal.png" alt="Image not found">
      </div>
      <div class="PartnersImageConainer">
        <img src="Images/Airbnb.png" alt="Image not found">
      </div>
    </div>
  </div>

  <!-- Benifits Using Our Services Container  -->
  <div id="BenifitsUsingOurServicesContainer">
    <div id="LeftSideBenifitContainer">
      <div id="MainHeadingContainer">
        <h1>Benefits Using Our <span style="color: rgb(91, 209, 255);">Services</span></h1>
      </div>
      <div id="SubHeadingContainer">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore consectetur asperiores minima
          sapiente.
        </p>
      </div>
      <div id="ExploreMoreButtonContainer">
        <button>Explore More</button>
      </div>
    </div>

    <div id="RightSideBenifitContainer">

      <!-- service 1  -->
      <div class="Service">
        <div class="ServicesIcon">
          <img src="Images/guarantee.png" alt="Image not found">
        </div>
        <div class="ServiceName">
          <p>Best Quality</p>
        </div>
        <div class="ServiceDetails">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore expedita minus dolore fuga. Iusto
            commodi eum excepturi facere!</p>
        </div>
      </div>

      <!-- services 2  -->
      <div class="Service">
        <div class="ServicesIcon">
          <img src="Images/fast-delivery.png" alt="Image not found">
        </div>
        <div class="ServiceName">
          <p>Free Shipping</p>
        </div>
        <div class="ServiceDetails">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae repellendus distinctio ex vitae
            id consectetur sapiente quaerat voluptas!</p>
        </div>
      </div>
    </div>
  </div>

  <footer>

  </footer>
</body>

</html>