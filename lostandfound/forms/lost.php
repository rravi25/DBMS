


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
    <link rel="stylesheet" href="lostForm.css">
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
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
		<div class="slider"></div>
		<div class="btn">
			<button class="login">Login</button>
			<button class="signup">Signup</button>
		</div>

		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">

			<!-- gallery -->
			<div class="gallery">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele"
					placeholder="password">
				<button class="clkbtn">Login</button>
			</div>

			<!-- Lost Form Fill-->
			<div class="lost-form">
            <div class="image">
                    <img src="../images/lost-2.jpg" alt="">
                </div>

                <div class="container p-5 mt-5" id="form-container">

                    <h1 class="text-center">Lost Something?</h1>
                    <h3 class="text-center">Help us to help you out!</h3>
                    <form class="mt-4">
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Item*</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Item Name" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Item Category*</span>
                            </div>
                            <label for="cars"></label>
                            <select id="items" name="item">
                            <option value="elec">Electronic Gadgets</option>
                            <option value="doc">Documents</option>
                            <option value="pets">Pets</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Location</span>
                            </div>
                            <input type="text" placeholder="If you remember" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Date*</span>
                            </div>
                            <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary">Item Description*</span>
                            </div>
                            <textarea class="form-control" placeholder="It is black in color..." aria-label="With textarea"></textarea>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary">Item Picture*</span>
                            </div>
                            <input type="file" id="myFile" name="filename">
                        </div>
                        <div class="input-group mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Reward</span>
                            </div>
                            <input type="text" placeholder="Not Necessary" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="form-check mb-5">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Agree terms and conditions</label>
                        </div>
                        <div class="submit-button text-center">
                            <button type="submit" class="btn btn-outline-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
			</div>
		</div>
	</div>
	<script src="./lost.js"></script>
</body>

</html>
