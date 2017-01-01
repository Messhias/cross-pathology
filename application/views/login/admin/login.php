<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SYSTEM LOGIN </title>

    <!-- Bootstrap -->
    <link href="<?=site_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=site_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=site_url('assets/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=site_url('assets/build/css/animate.min.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=site_url('assets/build/css/custom.min.css') ?>" rel="stylesheet">
    <link href="<?=site_url('assets/build/css/loading.css') ?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form name="frmLoginAdmin" method="post" id="frmLoginAdmin" action="<?=site_url('ajax/login'); ?>">
              <h1>Login Form</h1>
              <input type="hidden" name="type" id='type' value="admin">
              <div>
                <input type="email" name="username" id="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type='sbumit' class="btn btn-default submit"> Log in </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2016 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="<?=site_url('assets/js/jquery-3.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?=site_url('assets/js/functions.js') ?>"></script>
    

    <script type="text/javascript" src="<?=site_url('assets/js/jquery.form.min.js') ?>"></script>

    <script type='text/javascript'>
      $(document).ready(function() {
        var login = {
          beforeSend:function(){
            $(".loadingMask").css('display', 'block');
          },
          error:function(e){

          },
          success:function(success){
            if(success.results.num_rows > 0 ){
              window.location = url_development + 'admin/dashboard';
            }else{
              alert('User and / or password incorrect');
            }
          },
          complete:function(){

          }
        }

        $("#frmLoginAdmin").ajaxForm(login);
      });
    </script>

    <div class='loadingMask'>
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>

  </body>
</html>