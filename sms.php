<?php

 require_once 'vendor/autoload.php';
if (isset($_POST["submit"])) 
{
    $receiver = $_POST["receiver"];
    $subject = $_POST["subject"];
    $msg = $_POST["message"];

    $messagebird = new MessageBird\Client('AEudVw4wdRarGw7wXfPmYRHSP');
    $message = new MessageBird\Objects\Message;
    $message->originator = '+639566720525';
    $message->recipients = [$receiver];
    $message->body = $msg;
    $response = $messagebird->messages->create($message);
   ($response);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
    
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-6">
    
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>  SMS NOTIF </title>
            
    </head>
        <body>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded"> 
                        <h2 class="text-center fw-bold mb-3">SMS NOTIFICATION</h2>
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="receiver" class="form-label">Receiver</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" required name="receiver" id="receiver">
                            </div>
                            <div class="form-group mb-3">
                                <label for="receiver" class="form-label">Subject</label>
                                <input type="text" class="form-control" placeholder="Enter Subject" required name="subject" id="subject">
                            </div>
                            <div class="form-group mb-3">
                                <label for="receiver" class="form-label">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Enter Message" required name="message" id="message"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" name="submit">Send</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>




    </div>
   
  
    <div class="col-md-6">
    
     
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Send Email</title>
  </head>
  <body>
  <div class="container py-5">
                <div class="row">
                    <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded"> 
                        <h2 class="text-center fw-bold mb-3">EMAIL NOTIFICATION</h2>

    
                <form method="post" action="send_email_process.php">
                    <div class="mb-3">
                    
                      <label for="exampleInputEmail1" class="form-label">Receiver</label> 
                        <input type="email" class="form-control" name="send_to_email" placeholder="Enter Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter Subject" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Message</label>
                        <textarea rows="5" class="form-control" name="message" placeholder="Enter Message" rows="3"></textarea>
                    </div>
                    <div>
                                <button type="submit" class="btn btn-primary" name="submit">Send</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                </form>
        <div class="col-md-3"> </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>






  <!---  </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>  SMS NOTIF </title>
            
    </head>
        <body>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded"> 
                        <h2 class="text-center fw-bold mb-3">SMS NOTIFICATION</h2>
                        <form action="" method="POST">
                            <div class="foem-group mb-3">
                                <label for="receiver" class="form-label">Receiver</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" required name="receiver" id="receiver">
                            </div>
                            <div class="foem-group mb-3">
                                <label for="receiver" class="form-label">Subject</label>
                                <input type="text" class="form-control" placeholder="Enter Subject" required name="subject" id="subject">
                            </div>
                            <div class="foem-group mb-3">
                                <label for="receiver" class="form-label">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Enter Message" required name="message" id="message"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" name="submit">Send</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>

        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
 <!--   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
 <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Send Email</title>
  </head>
  <body>
  <div class="container py-5">
                <div class="row">
                    <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded"> 
                        <h2 class="text-center fw-bold mb-3">EMAIL NOTIFICATION</h2>

    <div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <form method="post" action="send_email_process.php">
                    <div class="mb-3">
                    
                      <label for="exampleInputEmail1" class="form-label">Send to Email</label> 
                        <input type="email" class="form-control" name="send_to_email" placeholder="Enter Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Enter Subject" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Message</label>
                        <textarea class="form-control" name="message" placeholder="Enter Message" rows="3"></textarea>
                    </div>
                    <div>
                                <button type="submit" class="btn btn-primary" name="submit">Send</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                </form>
        <div class="col-md-3"> </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
