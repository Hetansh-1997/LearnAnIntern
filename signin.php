<?php
    require_once "config.php";
    if(isset($_SESSION['access_token'])){
        header('Location : index.php');
        exit();
    }

    $loginURL=$gClient->createAuthUrl();

?>
<html>
    <head>
        <title>Login with google Signin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Please click the following button to login with your Somaiya.edu page
              </div>
              <div class="modal-footer">
                <input type="button" value="Login with Google" class="btn btn-danger" onclick="window.location = '<?php echo $loginURL ?>'">
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#exampleModalCenter").modal('show');
            });
        </script>
    </body>
</html>