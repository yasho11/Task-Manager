<?php

include "Backend/function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $confirmPassword = $_POST["cpass"];

    // Call the registerUser function from "function.php"
    $result = registerUser($name, $email, $password, $confirmPassword);

    // Display the result to the user or handle further actions based on the result
   
        
        if ($result === true) {
            header('Location: login.php?registration=success');
            exit();
        } else {
            showMessage("Registration failed", 'error');
        }
        
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    
<meta charset="UTF-8">

    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    
<title>Register Now</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="images/logo.png"
                    style="width: 80px; height: 80px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Sort It: More than a Website, Your Task Mastery Partner!"</h4>
                </div>

                <form action="register.php" method="post">
                  <p>Please Register Here</p>

                  <div class="form-outline mb-4">
                    <input type="text" name="name"  class="form-control"
                      placeholder="Username" />
                    <label class="form-label" >Username</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control"
                      placeholder=" email address" />
                    <label class="form-label" >Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="pass"  class="form-control" />
                    <label class="form-label" >Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input  type="password" name="cpass" class="form-control" />
                    <label class="form-label" >Confirm Password</label>
                  </div>


                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="Register Here"></input><br>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have a account?</p>
                    <button type="button" href = "login.php" class="btn btn-outline-danger">Login Here</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Sort It: More than a Website, Your Task Mastery Partner!"</h4>
                <p class="small mb-0">At "Sort It," we are more than just a Website. 
                    We are your trusted partner in task management, helping you stay organized, focused, and in control of your tasks and projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>