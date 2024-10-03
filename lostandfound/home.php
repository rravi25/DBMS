<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./CSS/homestyle.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- mdbootstrap -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="node_modules/mdbootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css" />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css" />
    <title>Home</title>
    
      <!--font Awesome ... for button icon-->
      <script src="https://kit.fontawesome.com/6718503f77.js" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/9973cec642.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand grow" href="#"><img src="./images/33-removebg-preview.png" alt="logo"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item grow">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="./forms/lostForm.php">LOST</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="./forms/foundForm.php">FOUND</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="./about_us.php">About Us</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="./forms/contactus.php">Contact Us</a>
          </li>
          <li class="nav-item grow">
            <a class="nav-link" href="./forms/admin.php">Admin</a>
          </li>
        </ul>
        <a class="logout" href="./register.php"><i class="fa-solid fa-right-from-bracket grow"></i>Logout</i></a>
      </div>
    </nav>
    <!-- <h1>Hello, world!</h1> -->
    <main>
      <section class="discovery container section-1">
        <div
          class="
            text
            col-lg-6 col-md-6 col-12
            w-50
            d-flex
            flex-column
            align-items-center
            justify-content-center
            profile
          "
        >  <!-- profile-->
        <div class="image">
          <img src="./images/WhatsApp Image 2021-10-15 at 11.22.36 PM.jpeg" alt="pfp">
        </div>

        </div>

        <div class="img col-lg-6 col-md-6 col-12">
          <img
            src="images/lost-and-found.png"
            alt="image"
            class="img-fluid lost-found"
          />
        </div>
      </section>
      <section class="section-4">
        <div class="heading text-center mb-4 pt-5">
          <h2 class="heading pt-5">
            RECENT RETURNS
            <div class="d-flex justify-content-center">
              <hr />
            </div>
          </h2>
        </div>
        <div class="container">
          <div class="card-group">
            <div class="card">
              <img src="images/phone.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">CELLPHONE</h5>
                <p class="card-text">
                  Return By : <strong>Ishan Mishra</strong>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card mx-2">
              <img src="images/watch.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">WRIST WATCH</h5>
                <p class="card-text">
                  Return By : <strong>Rawat Senpai</strong>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 2 days ago</small>
              </div>
            </div>
            <div class="card">
              <img
                src="images/water-bottle.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">WATER BOTTLE</h5>
                <p class="card-text">
                  Return By : <strong>Srishti Shukla</strong>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 days ago</small>
              </div>
            </div>
          </div>
          <div class="card-group mt-2">
            <div class="card">
              <img src="images/airpods.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">AIRPPODS</h5>
                <p class="card-text">
                  Return By : <strong>MR. PALINDROME</strong>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 5 days ago</small>
              </div>
            </div>
            <div class="card mx-2">
              <img src="images/football.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">FOOTBALL</h5>
                <p class="card-text">Return By : <strong>MESSI</strong></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 7 days ago.</small>
              </div>
            </div>
            <div class="card">
              <img src="images/headphone.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">HEADPHONE</h5>
                <p class="card-text">
                  Return By : <strong>CHRISTENSON</strong>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 8 days ago</small>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom text-center mt-5 pb-5">
          <div class="shrink">
            <a class="learn-more px-5" href="gallery.html">View More</a>
          </div>
        </div>
      </section>
      <section class="discovery-col-ak section-2">
        <div class="container">
          <div class="img col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
            <img
              src="images/community.png"
              alt="image"
              class="img-fluid border-top-20"
            />
          </div>
          <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
            <h2 class="title mb-3">
              WHAT WE DO
              <hr />
            </h2>

            <p class="mb-5">
              We try to reduce students stress somewhat by heping them if they
              lost something precious on the college/hostle grounds. <br />
              There are two sections where you can go to one is the
              <b><a href="forms/lostForm.html">LOST</a></b> section and the
              other is the
              <b><a href="forms/foundForm.html">FOUND</a></b> section. You can
              inform other people about what precious belonging you’ve lost and
              ask your fellow students for help and if you’ve found something
              then you can be of help to somebody else. Both the sections have
              their respective instructions. <br />
              And the faculty involvement in this procedure is about nill, so it
              also helps in creating a strong bond between the kids and also to
              maintain transparency.
            </p>
            <div class="shrink d-inline-block">
              <a class="learn-more px-5" href="about_us.html">Learn More</a>
            </div>
          </div>
        </div>
      </section>
      <section class="service section-3">
        <div class="col mx-auto align-items-center pt-5">
          <div class="heading text-center mb-5 pt-3">
            <h2 class="heading">
              OUR SERVICES
              <div class="d-flex justify-content-center">
                <hr />
              </div>
            </h2>
          </div>
          <div
            class="d-flex flex-row-reverse justify-content-between container"
          >
            <div class="card-image w-50 col-lg-6 col-md-3 col-12 text-right">
              <img class="img-fluid w-100" src="images/lost-card.png" alt="" />
            </div>
            <div
              class="
                one
                col-lg-6 col-md-3 col-12
                w-50
                m-2
                align-items-center
                lost-found-card
              "
            >
              <h5 class="card-title">Lost</h5>
              <ul class="my-3">
                <li class="text-left mb-3">
                  Only the property lost on College or Hostel can be reported.
                </li>
                <li class="text-left mb-3">
                  Maximum time for filing any lost report should be 2 days.
                </li>
                <li class="text-left mb-3">
                  Try to be as much detailed as you can be.
                </li>
                <li class="text-left mb-5">
                  Head towards the form below if you have lost your property.
                </li>
              </ul>

              <div class="shrink">
                <a class="learn-more px-5" href="forms/lostForm.html">Next</a>
              </div>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between container mt-5 pb-5"
          >
            <div class="card-image w-50 col-lg-6 col-md-3 col-12 text-left">
              <img class="img-fluid w-100" src="images/found-card.png" alt="" />
            </div>
            <div
              class="
                one
                col-lg-6 col-md-3 col-12
                w-50
                m-2
                align-items-center
                lost-found-card
              "
            >
              <h5 class="card-title">Found</h5>
              <ul class="my-3">
                <li class="text-left mb-3">
                  Below is the form, if you've found a lost property on
                  college/hostel.
                </li>
                <li class="text-left mb-3">
                  Please try to report as soon as possible so that you can help
                  someone in need.
                </li>
                <li class="text-left mb-3">
                  The involvement of faculty will be kept as minimum as possible
                  by our side, so that this might also help in student's ability
                  to build connections.
                </li>
                <li class="text-left mb-5">
                  If nobody comes forward for the property you found, only then
                  the faculty will get involved.
                </li>
              </ul>

              <div class="shrink">
                <a class="learn-more px-5" href="forms/foundForm.html">Next</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- RECENT RETURNS -->

     
      <section class="service section-5">
        <div class="row align-items-center container mx-auto py-5">
          <div class="img col-lg-6 col-md-6 col-12 w-75">
            <img src="images/mission.png" alt="image" class="img-fluid" />
          </div>
          <div class="text col-lg-6 col-md-6 col-12 w-75">
            <h2 class="title mb-3">
              OUR MISSION
              <hr />
            </h2>
            <p class="mb-5">
              Our mission is to make the students community more trustworthy and
              faithful and this place a safe space for all of your precious
              belongings. <br />
              We all know the students have to bring many sorts of precious
              belongings to college for many reasons and there are many chances
              of loosing it which might give the students some permanent scars
              because who knows what insane amount of value a little thing might
              hold in a person’s life but don’t worry that’s where our page and
              your fellow collegemates come forward to help you ! We don’t want
              you to be stressed if you’ve lost something on the college and
              hostel grounds we just want you to fill the form under the
              <b><a href="forms/lostForm.html">LOST</a></b> section so that we
              can get you out of this stress ASAP. <br />
              Even this page is created and managed by some of the students, so
              your fellow collegemates have already started helping you in a
              way.
            </p>
            <div class="shrink d-inline-block">
              <a class="learn-more" href="about_us.html">Learn More</a>
            </div>
          </div>
        </div>
      </section>
     
    </main>
    
    <footer id="page-footer" class="py-2 bg-dark">
      <div class="brand">
        <a class="navbar-brand" href="#"><img src="./images/33-removebg-preview.png" alt="logo"></a>
      </div>
      <div class="copyright">
        <small>
          <span>Copyright &copy;</span> <span>All Rights Reserved</span>
          <span>Terms of Use</span> and <span>Privacy Policy</span></small
        >
      </div>
<br>
<hr>
      <div class="favicon">
        <i class="social-media fab fa-facebook-f fa-2x"></i>
        <i class="social-media fab fa-twitter fa-2x"></i>
        <i class="social-media fab fa-instagram fa-2x"></i>
        <i class="social-media fas fa-envelope fa-2x"></i>
      </div>

      <div class="BackToTop">
        <a id="back-to-top" href="#"  role="button"><i class="back fas fa-chevron-up fa-2x"></i></a>
        <h4>Back To Top</h4>
        </div>
        
    </footer>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- mdbootstrap -->
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/popper.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/bootstrap.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/mdb.min.js"
    ></script>
  </body>
</html>
