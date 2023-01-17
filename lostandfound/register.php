<?php
require_once "dbconnection.php";
require_once "session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignUp']))
{
    $fullname = $_POST['uname'];
    $email = $_POST['uemail'];
    $phno = $_POST['phno'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($password==$confirm_password)
    {
            $pass= md5($password);
            $psqry = "INSERT INTO `users` (`uname`,`uemail`,`password`,`pnumber`) VALUES ('$fullname', '$email','$pass','$phno')";
            $psrun = mysqli_query($dbcon,$psqry);
                        ?> <script>
            alert('Registration Successfull!'); 
            window.open('home.php','_self');
            </script> <?php
    }
    else{
            if($password!=$confirm_password){
               ?> <script>
                alert('Password does not match!')
                </script> <?php
            }
    }
  }
  else if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignIn'])) 
  {
    $email = $_POST['uemail'];
    $password = $_POST['password'];
    $pass = md5($password);
    $qry = "SELECT * FROM `users` WHERE `uemail`='$email' AND `password`='$pass'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1)
      {
       ?> <script>
            alert("Opps! Please Enter Your Details again");
            window.open('register.php', '_self');
        </script>
        <?php
      } 
      else 
       {
       /* $data = mysqli_fetch_assoc($run);
        $id = $data['u_id'];    //fetch id value of user
        $email = $data['email'];
        $_SESSION['uid'] = $id;   //now we can use it until session destroy
        $_SESSION['emm'] = $email;*/
        ?> <script>
            alert("Welcome🙏");
            window.open('home.php', '_self');
        </script> <?php
        }
}
?>
<?php
$success = "";
$error_message = "";
$conn = mysqli_connect("localhost","root","","");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./CSS/SignUpstyle.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" name="SignIn" class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uemail" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="SignIn" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uname" placeholder="Full Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="uemail" placeholder="Email" />
            </div>
            <div class="input-field">
            <i class="fas fa-phone"></i>
            <input type="phone" name="phno" placeholder="Phone Number" />
          </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_password" placeholder="Confirm Password" />
            </div>
            
            <input type="submit" class="btn" name="SignUp" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
             Be a part of the community !! Be a HERO !!!                  
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="./images/5498791-removebg-preview.png" class="image img1" alt="community" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
             Hey
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="./images/2111.w037.n003.19A.p1.19-removebg-preview.png" class="image img2" alt="back" />
        </div>
      </div>
    </div>
    <script src="./JS/app.js"></script>
  </body>
</html>
