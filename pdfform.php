<?php
    session_start();
    if(!isset($_SESSION['access_token'])){
        header('Location: signin.php');
        exit();
    }
?>
<html>
<head>
  <title> Upload Project PDF Here </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style>
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 5%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: black;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}


</style>
<body style="background-color: black">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <h3><b>Welcome <br> To <br> LearnAnIntern</b></h3><br>
                <br>        <p>KJ Somaiya Institute of Engineering and Information Technology's Digital Library</p> <br>
                <p> <b>Please note: </b>Project Once Uploaded Can Not Be Changed or Updated </p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                                <h3 class="register-heading">Kindly Upload The Project Documented PDF Here</h3>
                                <form action="pdfuploadform.php" method="POST" enctype="multipart/form-data">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name of Member 1" value="" name="NameOfMember1"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name of Member 2" value="" name="NameOfMember2"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name of Member 3" value="" name="NameOfMember3"/>
                                        </div>
                                        <div class="form-group" >
                                            <select class="form-control" name="AccYear">
                                                <option class="hidden"  selected disabled style="font-size: 3.5em">Accademic Year:</option>
                                                <option>2018-2019</option>
                                                <option>2019-2020</option>
                                                <option>Later//Earlier</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name of the Faculty" value="" name="FacultyName"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Project Problem Statement" value="" name="problemstatement"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-mail id of Member 1" value="" name="emailofmem1"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-mail id of Member 2" value=""  name="emailofmem2"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="E-mail id of Member 3" value=""  name="emailofmem3"/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="probcomesunder">
                                                <option class="hidden"  selected disabled>This Project Comes Under:</option>
                                                <option>Information Technology</option>
                                                <option>Computer Science</option>
                                                <option>Electronics Engineering</option>
                                                <option>Electronics and Telecommunication</option>
                                                <option>Basic of Sciences and Humanity</option>
                                                <option>Cells and Committee</option>
                                                <option>Insituitonal And Research Projects</option>
                                            </select>
                                        </div>

                                      <br>  <div class="form-group">
                                          <label for="exampleFormControlFile1">Click here to Upload PDF</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                                        </div>
                                        <input type="submit" class="btnRegister"  value="SUBMIT"/>
                                    </div>
                                </div> </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            </html>
