<?php

include "function.php";
// Check if there's a success message in the URL
if (isset($_GET['registration']) && $_GET['registration'] === 'success') {
    showMessage("Registration successful", 'success');
}
?>

<!-- Your login page content here -->


<!DOCTYPE html>

<html lang="en">

<head>

    
<meta charset="UTF-8">

    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    
<title>Register Now</title>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
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
                  <img src="logo.png"
                    style="width: 80px; height: 80px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Sort It: More than a Website, Your Task Mastery Partner!"</h4>
                </div>

                <form>
                  <p>Please Log In Here</p>
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder=" email address" />
                    <label class="form-label" for="form2Example11">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <a class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log In</a><br>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Dont have a account?</p>
                    <a type="button" href = "register.php" class="btn btn-outline-danger">Register Here</a>
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