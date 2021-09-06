<?php
$con=mysqli_connect('localhost','root','','contact');
if(!$con){
  echo'not connected';
}
if(isset($_POST['okay']))
{
  $name = $_POST['username'];
  $email = $_POST['email'];
  $mobno = $_POST['mobno'];
  $insert = mysqli_query($con,"INSERT INTO `detail` (`username`, `email`, `mobno`) VALUES ('$name','$email','$mobno')");

  if(mysqli_affected_rows($con)>0){
    echo '<script>alert("insert data successfully")</script>';
  }
  else{
    echo '<script>alert("data not insert")</script>';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
    <title>school</title>
</head>
<style>

</style>
<body>
  <!-- header section-->
    <section class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
         <img src="images/kids.png" alt="" class="src">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
             
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Events</a>
              </li>
              
            </ul>
            <div class="icon">
             <i class="fa fa-facebook"></i>
             <i class="fa fa-instagram"></i>
             <i class="fa fa-twitter"></i>
            </div>
            <div class="contact">
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Contact
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get in touch</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control">
          
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" >
          </div>

          <div class="mb-3">
            <label  class="form-label">Mobno.</label>
            <input type="text"  name="mobno" class="form-control" >
          </div>
          <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
          <button type="submit" class="btn btn-primary" name="okay">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
            </div>
          </div>
        </div>
      </nav>

      <div class="container text-center">
        <div class="gap">
        <div class="row ">
        <div class="col-sm-6">
        <h2 class="text-1 animate__fadeInUp">When should i begin to<br> look at school?</h2>
        <p class="text-2">Preschoolers for the application,testing and<br> enrollment process for the public and private school in the city</p>
        <div class="btn1">
        <a href="#" class="btn btn-primary">Learn more</a>
        </div>
        </div>
          <div class="col-sm-6">
         <img src="images/kids1.jpg" alt="" class="src2">
          </div>
        </div>
        </div>
      </div>
      <img src="images/wave5.PNG" alt="" class="src1">
    </section>
     <!-- end header secrion -->
    <section class="smarty text-center">
      <h1 class="progrm">Smarty Programs</h1>
      <div class="container">
        <div class="crd">
        <div class="row">
          <div class="col-sm-3">
          <div class="card" style="width:100%;text-align:justify">
  <div class="card-body">
    <i class="fa fa-child"></i>
    <h4 style="font-family:cursive;">Toddler</h4>
    <h5 class="card-title text-dark" style="font-family:cursive;">(1,5-3years)</h5>
    <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
          </div>
          <div class="col-sm-3">
          <div class="card" style="width:100%;text-align:justify">
  <div class="card-body">
    <i class="fa fa-child"></i>
    <h4 style="font-family:cursive;">Toddler</h4>
    <h5 class="card-title text-dark" style="font-family:cursive;">(1,5-3years)</h5>
    <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
          </div>
          <div class="col-sm-3">
          <div class="card" style="width:100%;text-align:justify">
  <div class="card-body">
    <i class="fa fa-child"></i>
    <h4 style="font-family:cursive;">Toddler</h4>
    <h5 class="card-title text-dark" style="font-family:cursive;">(1,5-3years)</h5>
    <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
          </div>
          <div class="col-sm-3">
          <div class="card" style="width:100%;text-align:justify">
  <div class="card-body">
    <i class="fa fa-child"></i>
    <h4 style="font-family:cursive;">Toddler</h4>
    <h5 class="card-title text-dark" style="font-family:cursive;">(1,5-3years)</h5>
    <p class="card-text text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
  </div>
</div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- OUR VALUE SECTION START -->
    <section class="value my-5">
    <h1 style="text-align:center; font-family:cursive; margin-top:10%;">Our Core Values</h1> 
    
    <div class="container">
      <div class="row my-5">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
           <img src="images/kids2.jpg" width="100%" alt="">
            </div>
            <div class="col-sm-8">
             <h2 style="font-family:cursive;">Learning & fun</h2>
             <P>Prissy expectant involuntarily limpet until cobra less dear so overabundant contagion</P>
            </div>
          </div>
          <div class="row my-4">
            <div class="col-sm-4">
           <img src="images/kids2.jpg" width="100%" alt="">
            </div>
            <div class="col-sm-8">
             <h2 style="font-family:cursive;">Learning & fun</h2>
             <P>Prissy expectant involuntarily limpet until cobra less dear so overabundant contagion</P>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
           <img src="images/kids2.jpg" width="100%" alt="">
            </div>
            <div class="col-sm-8">
             <h2 style="font-family:cursive;">Learning & fun</h2>
             <P>Prissy expectant involuntarily limpet until cobra less dear so overabundant contagion</P>
            </div>
          </div>
          <div class="row my-4">
            <div class="col-sm-4">
           <img src="images/kids2.jpg" width="100%" alt="">
            </div>
            <div class="col-sm-8">
             <h2 style="font-family:cursive;">Learning & fun</h2>
             <P>Prissy expectant involuntarily limpet until cobra less dear so overabundant contagion</P>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- our value section end -->

    <!-- event section start -->
    <section class="event">

    
    </section>
    <!-- event section end -->
  </body>
</html>