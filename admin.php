
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>login</title>

    <!-- Bootstrap core CSS -->
    <link href="build/css/bootstrap.min.css" rel="stylesheet">
    <link href="build/css/font-awesome.min.css" rel="stylesheet">
    <link href="build/css/style.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">



          <div class="flip">
        <div class="card"> 
          <div class="face front"> 
              


            <div class="panel panel-default">

              <form class="form-horizontal" action="adm_log.php" method="post">
                
                <br>

                <h1 class="text-center"><img src="images/admin.jpg"height="95" width="95"></a></h1>

                <br>
                
                <input class="form-control" name="username" placeholder="Username"/>
                <input class="form-control" name="password" placeholder="Password" type="password" required />
                <p class="text-right"><a href="forgotpw.php"style="color:#fb6e14">Forgot Password ?</a></p>
                <button class="btn btn-primary btn-block" style="background-color:#fb6e14">LOG IN</button>

                <!--<p class="blue" style="color:#fb6e14">Sign in with</p>

                <p><a href="http://www.facebook.com"><i class="fa fa-facebook-f fa-lg" style="color:#fb6e14"></a></i><a href="http://www.gooleplus.com"><i class="fa fa-google-plus fa-lg"style="color:#fb6e14"></a></i><a href="http://www.twitter.com"><i class="fa fa-twitter fa-lg"style="color:#fb6e14"></a></i></p>
                <hr>
                <p class="text-center">
                  <a href="#" class="fliper-btn" style="color:#fb6e14">Create new account?</a>
                </p>
              </form>

            </div>


          </div> 
          <div class="face back"> 
            

              <div class="panel panel-default">

              <form class="form-horizontal" action="adm_res.php" method="post">
                
                <br>

                <h1 class="text-center"><img src="salate.png"height="95" width="95"></h1>

                <br>
                <label>Basic Information</label>
                <input class="form-control" name="name" placeholder="Fullname"/>
                <input class="form-control" name="emailid" placeholder="Email"/>
                <label>Private Information</label>
                <input class="form-control" name="password" placeholder="Password"/>
                <input class="form-control" name="phoneno" placeholder="Mobile Number"/>
                <button class="btn btn-primary btn-block" style="background-color:#fb6e14" >SIGN UP</button>


                <p class="text-center">
                  <a href="#" class="fliper-btn" style="color:#fb6e14">Already have an account?</a>
                </p>
                
              </form>

            </div>




          </div>
        </div>   
      </div> -->




        </div>
        <div class="col-md-4"></div>

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="build/js/jquery.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>
    <script>

    $('.fliper-btn').click(function(){
    $('.flip').find('.card').toggleClass('flipped');

});
    </script>
  </body>
</html>




      