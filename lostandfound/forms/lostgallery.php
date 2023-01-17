<?php
require_once "../dbconnection.php";
require_once "../session.php";
?>
<!Doctype html>
<php lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="../css/gallery.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <title>Found Form</title>
    <script src="https://kit.fontawesome.com/6718503f77.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand grow" href="../home.php"><img class="img1" src="../images/33-removebg-preview.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link grow" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <a class="logout" href="../register.php"><i class="fa-solid fa-right-from-bracket grow"></i>Logout</i></a>
        </div>
    </nav>
   <main>
    <h1 style="color:black;">GALLERY</h1>
    <input class="searchbar" type="text" id="artistname" name="artistname">
     <input class="searchbtn" type="submit" name="search" value="Search">
     </p>
     </form>
    <?php
            $query_category="SELECT * FROM `fthings`";
            $result_category = mysqli_query($dbcon,$query_category);
 
            while($row=mysqli_fetch_array($result_category)){

                  echo ' <div class="space">
                            <table class="pic-table">
                                <tr>
                                    <td>
                                        <a  href= "../uploads/fimages/'.$row['img'].'"> <img class="photo" src="../uploads/fimages/'.$row['img'].'"> </a>'.

                                        '<br><a class="desc-title" href="lostgallery.php?id='.$row['item'].'">  '.$row['item'].' <br>'.$row['location'].' </a> <br>

                                        <a class="desc-content2" href="lostgallery.php?id='.$row['item'].'">  See More. . . </a>
                                    </td>
                                </tr>
                            </table>
                        </div>';
            }
          
      ?>
     </div>
   </main>
    <footer id="sticky-footer" class=" py-2 bg-dark">
        <div class="brand">
    <a class="navbar-brand grow" href="../home.php"><img class="img1" src="../images/33-removebg-preview.png" alt="logo"></a>
            
        </div>
        <div class="copyright">
            <small> <span>Copyright &copy;</span> <span>All Rights Reserved</span> <span>Terms of Use</span> and <span>Privacy Policy</span></small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</php>
