<body>
    <div class="wrapper"> 
            
        <div class="header">
            <a class="logo" href="<?=FRONTURL?>"><img src="<?=ADMINASSESTS?>img/logo.png" alt="" title=""/></a>
            
        </div>

        <div class="menu">                

            <div class="breadLine">            
                <div class="arrow"></div>
                <div class="adminControl active">
                    Hi, Admin
                </div>
            </div>

            <div class="admin">
                <div class="image">
                    <img src="<?=ADMINASSESTS?>img/user.png" class="img-thumbnail"/>                
                </div>
                <ul class="control">                
                    <li><span class="glyphicon glyphicon-cog"></span> <a href="<?=ADMINURL?>">Settings</a></li>
                    <li><span class="glyphicon glyphicon-share-alt"></span> <a href="<?=ADMINURL.'logout'?>">Logout</a></li>
                </ul>
            </div>

            <ul class="navigation">            
                <li class="<?php echo isset($menu)&&$menu=='dashboard'?'active':''; ?>">
                    <a href="<?=ADMINURL?>">
                        <span class="isw-grid"></span><span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="openable <?php echo isset($menu)&&$menu=='package'?'active':''; ?>">
                    <a href="#">
                        <span class="isw-list"></span><span class="text">Tour Package</span>
                    </a>
                    <ul>
                        <li class="<?php echo isset($submenu)&&$submenu=='packageadd'?'active':''; ?>">
                            <a href="<?=ADMINURL.'Add_package'?>">
                                <span class="glyphicon glyphicon-th"></span><span class="text">Add Package</span>
                            </a>                  
                        </li>          
                        <li class="<?php echo isset($submenu)&&$submenu=='packageview'?'active':''; ?>">
                            <a href="<?=ADMINURL.'View_package'?>">
                                <span class="glyphicon glyphicon-th-large"></span><span class="text">View Package</span>
                            </a>                  
                        </li>                    
                    </ul>                
                </li>
<!--                <li class="openable <?php echo isset($menu)&&$menu=='packageconfig'?'active':''; ?>">
                    <a href="#">
                        <span class="isw-list"></span><span class="text">Tour Package Config</span>
                    </a>
                    <ul>       
                        <li class="<?php echo isset($submenu)&&$submenu=='packageconfigadd'?'active':''; ?>">
                            <a href="<?=ADMINURL.'Add_packageconfig'?>">
                                <span class="glyphicon glyphicon-th-large"></span><span class="text">Add Package Master</span>
                            </a>                  
                        </li> 
                        <li class="<?php echo isset($submenu)&&$submenu=='packageconfigview'?'active':''; ?>">
                            <a href="<?=ADMINURL.'View_packageconfig'?>">
                                <span class="glyphicon glyphicon-th-large"></span><span class="text">View Package Master</span>
                            </a>                  
                        </li> 
                    </ul>                
                </li>-->
                <li class="openable">
                    <a href="#">
                        <span class="isw-list"></span><span class="text">Slider</span>
                    </a>
                    <ul>       
                        <li>
                    <a href="<?=ADMINURL.'Add_slider'?>">
                        <span class="glyphicon glyphicon-picture"></span><span class="text">Add Slider</span>
                    </a>
                </li>                     
                        <li>
                    <a href="<?=ADMINURL.'View_slider'?>">
                        <span class="glyphicon glyphicon-picture"></span><span class="text">View Slider</span>
                    </a>
                </li>                        
                    </ul>                
                </li>
                <li class="openable <?php echo isset($menu)&&$menu=='routmst'?'active':''; ?>">
                    <a href="#">
                        <span class="isw-list"></span><span class="text">Rout Master</span>
                    </a>
                    <ul>
                        <li class="<?php echo isset($submenu)&&$submenu=='routmstadd'?'active':''; ?>">
                            <a href="<?=ADMINURL.'Add_routmst'?>">
                                <span class="glyphicon glyphicon-th"></span><span class="text">Add Rout Master</span>
                            </a>                  
                        </li>          
                        <li class="<?php echo isset($submenu)&&$submenu=='routmstview'?'active':''; ?>">
                            <a href="<?=ADMINURL.'View_routmst'?>">
                                <span class="glyphicon glyphicon-th-large"></span><span class="text">View Rout Master</span>
                            </a>                  
                        </li>                    
                    </ul>                
                </li>
                <li class="openable <?php echo isset($menu)&&$menu=='configrout'?'active':''; ?>">
                    <a href="#">
                        <span class="isw-list"></span><span class="text">Config Rout</span>
                    </a>
                    <ul>
                        <li class="<?php echo isset($submenu)&&$submenu=='configroutadd'?'active':''; ?>">
                            <a href="<?=ADMINURL.'Add_configrout'?>">
                                <span class="glyphicon glyphicon-th"></span><span class="text">Add Vehicle</span>
                            </a>                  
                        </li>          
                        <li class="<?php echo isset($submenu)&&$submenu=='configroutview'?'active':''; ?>">
                            <a href="<?=ADMINURL.'View_configrout'?>">
                                <span class="glyphicon glyphicon-th-large"></span><span class="text">View Vehicle</span>
                            </a>                  
                        </li>                    
                    </ul>                
                </li>
                
                <li class="openable <?php echo isset($menu)&&$menu=='fleet'?'active':''; ?>">
                    <a href="#">
                        <span class="isw-list"></span><span class="text">Fleet Details</span>
                    </a>
                    <ul>
                        <li class="<?php echo isset($submenu)&&$submenu=='fleetadd'?'active':''; ?>">
                            <a href="<?=ADMINURL.'Add_fleet'?>">
                                <span class="glyphicon glyphicon-th"></span><span class="text">Add Fleet</span>
                            </a>                  
                        </li>          
                        <li class="<?php echo isset($submenu)&&$submenu=='fleetview'?'active':''; ?>">
                            <a href="<?=ADMINURL.'View_fleet'?>">
                                <span class="glyphicon glyphicon-th-large"></span><span class="text">View Fleet</span>
                            </a>                  
                        </li>                    
                    </ul>                
                </li>
                  <li class="openable">
                    <a href="#">
                         <span class="isw-chat"></span><span class="text">Enquiry</span>
                    </a>
                    <ul>       
                        <li>
                    <a href="<?=ADMINURL.'View_enquiry'?>">
                        <span class="glyphicon glyphicon-comment"></span><span class="text">Feed Back Details</span>
                    </a>
                </li>   
                  
                </ul>                
                </li> 
                <li class="<?php echo isset($submenu)&&$submenu=='setting'?'active':''; ?>">
                    <a href="<?=ADMINURL.'Setting'?>">
                        <span class="isw-settings"></span><span class="text">Setting</span>
                    </a>
                </li>        
                                      
            </ul>

            

            


            

            <div class="dr"><span></span></div>

            

        </div>
        <div class="content">


            <div class="breadLine">

                <ul class="breadcrumb">
                    <li><a href="#">Simple Admin</a> <span class="divider">></span></li>                
                    <li class="active">Dashboard</li>
                </ul>

                <ul class="buttons">
                    <li>
                        <a href="#" class="link_bcPopupList"><span class="glyphicon glyphicon-user"></span><span class="text">Users list</span></a>

                        <div id="bcPopupList" class="popup">
                            <div class="head clearfix">
                                <div class="arrow"></div>
                                <span class="isw-users"></span>
                                <span class="name">List users</span>
                            </div>
                            <div class="body-fluid users">

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="<?=ADMINASSESTS?>img/users/aqvatarius_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Aqvatarius</a>                                    
                                        <span>online</span>
                                    </div>
                                </div>

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="<?=ADMINASSESTS?>img/users/olga_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Olga</a>                                
                                        <span>online</span>
                                    </div>
                                </div>                        

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="<?=ADMINASSESTS?>img/users/alexey_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexey</a>  
                                        <span>online</span>
                                    </div>
                                </div>                              

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="<?=ADMINASSESTS?>img/users/dmitry_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Dmitry</a>                                    
                                        <span>online</span>
                                    </div>
                                </div>                         

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="<?=ADMINASSESTS?>img/users/helen_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Helen</a>                                                                        
                                    </div>
                                </div>                                  

                                <div class="item clearfix">
                                    <div class="image"><a href="#"><img src="<?=ADMINASSESTS?>img/users/alexander_s.jpg" width="32"/></a></div>
                                    <div class="info">
                                        <a href="#" class="name">Alexander</a>                                                                        
                                    </div>
                                </div>                                  

                            </div>
                            <div class="footer">
                                <button class="btn btn-default" type="button">Add new</button>
                                <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                            </div>
                        </div>                    

                    </li>                
                    <li>
                        <a href="#" class="link_bcPopupSearch"><span class="glyphicon glyphicon-search"></span><span class="text">Search</span></a>

                        <div id="bcPopupSearch" class="popup">
                            <div class="head clearfix">
                                <div class="arrow"></div>
                                <span class="isw-zoom"></span>
                                <span class="name">Search</span>
                            </div>
                            <div class="body search">
                                <input type="text" placeholder="Some text for search..." name="search"/>
                            </div>
                            <div class="footer">
                                <button class="btn btn-default" type="button">Search</button>
                                <button class="btn btn-danger link_bcPopupSearch" type="button">Close</button>
                            </div>
                        </div>                
                    </li>
                </ul>

            </div>