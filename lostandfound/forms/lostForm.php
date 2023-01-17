<?php
require_once "../dbconnection.php";
require_once "../session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
{
   $item_name = $_POST['item'];
   $uemail =$_POST['uemail'];
   $item_cat = $_POST['item_cat'];
   $qry= "SELECT `cid` FROM `category` WHERE `cname` = '$item_cat'";
   $result = mysqli_query($dbcon,$qry);
   $check =mysqli_num_rows($result);
   if($check > 0){
    $id= $row[0];
   }
   $location = $_POST['location'];
   $ddate = $_POST['ddate'];
   $item_desc = $_POST['item_desc'];
   $image_name = $_FILES["filename"]["name"];
   $temp_name = $_FILES["filename"]["tmp_name"];
   $message =$_POST['message'];
   $query = "INSERT INTO limages(url) VALUES('$image_name')";
   $x = mysqli_query($dbcon, $query);
   $ref= mysqli_insert_id($dbcon);
   move_uploaded_file($temp_name, "../uploads/limages/$image_name");
   echo $id;
   $detail_query = "INSERT INTO lthings(`cat_ref`,`discription`,`location`,`uemail`,`imgid`,`postdate`,`message`,`item`) VALUES('$id','$item_desc','$location',$uemail','$ref','$ddate','$message','$item_name')";
   if ($dbcon->query($detail_query) === TRUE){
   ?>
      <script type="text/javascript">
        alert('Reported Successfully.');
        window.open('../home.php','_self');
        </script>
      <?php
   }else
   {
    ?>
    echo "$error";
    <script type="text/javascript">
        alert('Error Storing in Database');
        window.open('./lostForm.php','_self');
        </script>
        <?php
   }
}
?>
<!Doctype html>
<php lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="foundForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <title>Lost Form</title>
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
    <!-- <h1>Hello, world!</h1> -->
    <main>
        <section>
            <div class="container" id="main-container">
                <div class="image">
                    <img src="../images/found.jpg" alt="">
                </div>

                <div class="container p-5 mt-5" id="form-container">

                    <h1 class="text-center">Report Here</h1>
                    <form class="mt-4" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Email*</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Item" name="uemail" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Item*</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Item" name="item" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Item Category*</span>
                            </div>
                            <label for="cars"></label>
                            <select id="items" name="item_cat" required>
                            <?php
                             $sql = "SELECT `cid`, `cname` FROM `category`";
                             $retval = mysqli_query($dbcon, $sql);
                             while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
                                $x = $row['cid'];
                                $y = $row['cname'];
                                echo "  <option value=\"$x\"  class=\"\" >$y</option>";
                            }
                            ?>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Location</span>
                            </div>
                            <input type="text" placeholder="If you remember" name="location" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Date*</span>
                            </div>
                            <input type="date" class="form-control" name="ddate" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary">Item Description*</span>
                            </div>
                            <textarea class="form-control" name="item_desc" placeholder="It is black in color..." aria-label="With textarea" required></textarea>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary">Item Picture</span>
                            </div>
                            <input type="file" id="myFile" name="filename">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary">Reward</span>
                            </div>
                            <textarea class="form-control" name="message" placeholder="Not mandatory..." aria-label="With textarea"></textarea>
                        </div>

                        <div class="form-check mb-5">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"><a href="#">Agree terms and conditions</a></label>
                        </div>
                        <div class="submit-button text-center">
                            <button type="submit" name="submit" class="btn btn-outline-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
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
    <script src="../JS/app.js"></script>
</body>

</php>
