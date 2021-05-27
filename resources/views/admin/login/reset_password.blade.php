
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Who Cares Today</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="http://myprojectstaging.com/custom/whocares_dev/assets/admin/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
  <style>
  .white{background-color:#ffffffd6;padding: 36px;border: 1px solid red;}.btn{border-radius: 0px;}.center{text-align: center;}
  .gap{padding-top:110px;}.form-control{border-radius: 0px !important;border: 1px solid #675e5e;}
  .toast-top-right{ top:43% !important; right:39% !important;background-color: #20a9d2!important}
  .vl {border-left: 3px solid green;height:100px;}
</style>
</head>
<body class="hold-transition login-page" style="background-image: url(http://myprojectstaging.com/custom/whocares_dev/assets/img/loginback.jpg);background-repeat:no-repeat;background-size: cover;background-position: center;">
   <div class="container gap">
    <div class="col-md-offset-4 col-sm-offset-4  col-sm-4 col-md-4 white">
      <div align="center">
        <img class="img-responsive" src="http://myprojectstaging.com/custom/whocares_dev/uploads/settings/logo1.png">
      </div>
      <h2 class="center"><b><span style="color:red;">Password</span> Recovery</b></h2>
      <p class="login-box-msg center"><b>Enter Your Email Address, You Will Get Email Shortly</b></p>
      <form action="http://myprojectstaging.com/custom/whocares_dev/admin/forgot-password" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" required name="email" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-4 col-xs-offset-8">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
