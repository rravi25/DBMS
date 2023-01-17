<?php
require_once "../dbconnection.php";
require_once "../session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $feedback =$_POST['feedback'];

   $detail_query ="INSERT INTO feedback(`name`,`email`,`phone`,`feedback`) VALUES('$name','$email','$phone','$feedback')";
   if ($dbcon->query($detail_query) === TRUE){
   ?>
      <script type="text/javascript">
        alert('Feedback Submitted !!!.');
        window.open('../home.php','_self');
        </script>
      <?php
   }else
   {
    ?><script type="text/javascript">
        alert('Error');
        window.open('../home.php','_self');
        </script>
        <?php
   }
}
?><!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../CSS/contact.css">
    <script src="https://kit.fontawesome.com/6718503f77.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>

<body style="background-color:rgb(146, 82, 148);">
    <header>

        <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand grow" href="../home.php"><img class="img1" src="../images/33-removebg-preview.png" alt="logo"></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link grow" href="../home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="lostForm.php">Lost</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="foundForm.php">Found</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="../about_us.php">About Us</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link grow" href="#">Contact Us</a>
                    </li>
                </ul>
            <a class="logout" href="../register.php"><i class="fa-solid fa-right-from-bracket grow"></i>Logout</i></a>
            </div>
        </nav>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#b100cd " fill-opacity="1" d="M0,192L48,213.3C96,235,192,277,288,288C384,299,480,277,576,234.7C672,192,768,128,864,96C960,64,1056,64,1152,74.7C1248,85,1344,107,1392,117.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>
        <div class="heading text-center" style="margin-top: 2rem;">
         <h1 class="font-weight-bold text-light">CONTACT US</h1>
</div>
        <section class="discovery py-5">
            <div class="row align-items-center container  mx-auto">
                <div class="img col-lg-6 col-md-6 col-12 w-50 ">
                    <img src="../images/contactus.jpg" alt="image" class="img-fluid">

                </div>

                <div class="text col-lg-6 col-md-6 col-12 w-50 ">

                    <div class="container mt-4" id="form-container">

                    <h2 class="text-center" style="color:ivory;">Feel free to contact us using this form <i class="far fa-smile-beam"></i></h2>
                        <form action="contactus.php" class="text-center" method="POST">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-darker" id="inputGroup-sizing-default">Name</span>
                                </div>
                                <input type="text" name="name" placeholder="Name" class="form-control" id="name"
                                    aria-describedby="emailHelp">
                                
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Email</span>
                                </div>
                                <input type="email" name="email" placeholder="john@gmail.com" class="form-control" id="email"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Phone No.</span>
                                </div>
                                <input type="text" name="phone" class="form-control" placeholder="+91 " />
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Subject</span>
                                </div>
                                <textarea name="feedback" class="form-control" id="desc" placeholder="Write Here..." cols="30" rows="2"></textarea>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
                        </form>
                    </div>

                </div>


            </div>
        </section>
    </header>
    <footer id="sticky-footer" class=" py-2 bg-dark">
        <div class="brand">
    <a class="navbar-brand grow" href="../home.php"><img class="img1" src="../images/33-removebg-preview.png" alt="logo"></a>
            
        </div>
        <div class="copyright">
            <small> <span>Copyright &copy;</span> <span>All Rights Reserved</span> <span>Terms of Use</span> and <span>Privacy Policy</span></small>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>
