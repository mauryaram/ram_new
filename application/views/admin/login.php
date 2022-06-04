<!DOCTYPE html>
<html lang="en">

<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   
    
    <title>Tour And Travel</title>

    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="<?=ADMINASSESTS;?>css/stylesheets.css" rel="stylesheet" type="text/css" />
   
    <link rel='stylesheet' type='text/css' href='<?=ADMINASSESTS;?>css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/jquery/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/jquery/jquery-migrate-1.2.1.min.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/pnotify/jquery.pnotify.min.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/ibutton/jquery.ibutton.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins/scrollup/jquery.scrollUp.min.js'></script>
    
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/cookies.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/actions.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/charts.js'></script>
    <script type='text/javascript' src='<?=ADMINASSESTS;?>js/plugins.js'></script>
    
</head>
<body>
    
    <div class="loginBlock" id="login" style="display: block;">
        <h1>Welcome Please Sign In</h1>
        <?=notification(); errors();?>
       
        <div class="dr"><span></span></div>
        <div class="loginForm">
            <form class="form-horizontal" action="<?=ADMINURL.'Login/check'?>" method="POST" >
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="text" id="inputEmail" name="txt_email" placeholder="Email" class="form-control"/>
                    </div>                
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" id="inputPassword" name="txt_password" placeholder="Password" class="form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-default btn-block">Sign in</button>       
                    </div>
                </div>
            </form>  
            <div class="dr"><span></span></div>
            
        </div>
    </div>  
</body>

</html>
