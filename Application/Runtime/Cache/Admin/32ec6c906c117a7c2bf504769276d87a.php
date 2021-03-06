<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo ((isset($web_title ) && ($web_title !== ""))?($web_title ):"ThinkShop v0.0.1"); ?></title>
        
        <link rel="stylesheet" href="/thinkshop/Public/lib/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/thinkshop/Public/lib/bootstrap/dist/css/sticky-footer.css">
        <link rel="stylesheet" href="/thinkshop/Public/css/common.css">
        <link rel="stylesheet" href="/thinkshop/Public/css/signin.css">
        
        <script src="/thinkshop/Public/lib/jquery/dist/jquery.min.js"></script>
        <script src="/thinkshop/Public/lib/bootstrap/dist/js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        #main {
            margin-top: 80px;
        }
        #main .product-list img{
            opacity:0.4;
            filter:alpha(opacity=40); /* 针对 IE8 以及更早的版本 */
        }
        #main .product-list img:hover{
            opacity:1.0;
            filter:alpha(opacity=100); /* 针对 IE8 以及更早的版本 */
        }
        </style>
    </head>
    <body>
<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">请登录</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control input-username" placeholder="请输入管理员账号" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="请输入管理员密码" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>

    </div> <!-- /container -->
                <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy;2015 cnNewYork.com</p>
      </div>
    </footer>
        <script>
        </script>
    </body>
</html>