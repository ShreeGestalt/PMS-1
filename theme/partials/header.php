<?php $pieces = explode('/',$_SERVER['REQUEST_URI']);  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cascade Flat , Responsive Bootstrap 3.0 Admin Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Loading Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Loading Stylesheets -->    
  <link href="css/font-awesome.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet" type="text/css"> 

  <link href="less/style.less" rel="stylesheet"  title="lessCss" id="lessCss">
  
  <!-- Loading Custom Stylesheets -->    
  <link href="css/custom.css" rel="stylesheet">

  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <![endif]-->
    </head>
    <body>
    <div class="site-holder">
      <!-- this is a dummy text -->
      <!-- .navbar -->
      <nav class="navbar" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><i class="fa fa-list btn-nav-toggle-responsive text-white"></i> <span class="logo">Cas<strong>ca</strong>de <i class="fa fa-bookmark"></i></span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav user-menu navbar-right ">

            <li><a href="#" class="user dropdown-toggle" data-toggle="dropdown"><span class="username"><img src="images/profiles/eleven.png" class="user-avatar" alt="">  Vijay Kumar </span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
                <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#" class="text-danger"><i class="fa fa-lock"></i> Logout</a></li>
              </ul>
              <li><a href="#" class="settings dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge bg-pink">4</span></a>
                <ul class="dropdown-menu inbox">
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/three.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">John Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/four.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">Jane Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/five.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">Mr Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="inbox.php">     
                      <img src="images/profiles/six.png" alt="" class="avatar">
                      <div class="message">
                        <span class="username">Miss Deo</span> 
                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                        <span class="time pull-right"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                      </div>
                    </a>
                  </li>
                  <li><a href="inbox.php" class="btn bg-primary">View All</a></li>
                </ul>
                <li><a href="#" class="settings dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell animated shake"></i><span class="badge bg-success">10</span></a>
                  <ul class="dropdown-menu notifications">
                    <li>
                      <a href="#">
                        <i class="fa fa-user noty-icon bg-primary"></i> 
                        <span class="description">10 Users are registered</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-danger">
                        <i class="fa fa-inbox noty-icon bg-pink"></i> 
                        <span class="description">Your disk space has been exceeeded</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-info">
                        <i class="fa fa-comment noty-icon bg-purple"></i> 
                        <span class="description">58 new comments</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-warning">
                        <i class="fa fa-user noty-icon bg-warning"></i> 
                        <span class="description">User deleted</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-success">
                        <i class="fa fa-bookmark-o noty-icon bg-seagreen"></i> 
                        <span class="description">You have a new badge</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-info">
                        <i class="fa fa-envelope noty-icon bg-info"></i> 
                        <span class="description">24 Unread mails</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-success">
                        <i class="fa fa-link noty-icon bg-purple"></i> 
                        <span class="description">Urls forwarding activated</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-warning">
                        <i class="fa fa-clock-o noty-icon bg-yellow"></i> 
                        <span class="description">Action</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-danger">
                        <i class="fa fa-exclamation noty-icon bg-danger"></i> 
                        <span class="description">3 domains expired</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="text-success">
                        <i class="fa fa-clock-o noty-icon bg-success"></i> 
                        <span class="description">Your have $950 as outstanding amount</span>
                        <span class="time"> <i class="fa fa-clock-o"></i> 06:58 PM</span>
                      </a>
                    </li>

                    <li><a href="#" class="btn bg-primary">View All</a></li>
                  </ul>
                </li>
                <li><a href="#" class="settings"><i class="fa fa-cogs settings-toggle"></i><span class="badge bg-info">20</span></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav> <!-- /.navbar -->

          <!-- .box-holder -->
          <div class="box-holder">

            <!-- .left-sidebar -->
            <div class="left-sidebar">
              <div class="sidebar-holder">
                <ul class="nav  nav-list">

                  <!-- sidebar to mini Sidebar toggle -->
                  <li class="nav-toggle">
                    <button class="btn  btn-nav-toggle text-primary"><i class="fa fa-angle-double-left toggle-left"></i> </button>
                  </li>

              
                  <li <?php echo ($pieces[3]=="index.php") ? "class='active'" : " "; ?> ><a href="index.php" data-original-title="Dashboard"><i class="fa fa-dashboard"></i><span class="hidden-minibar"> Dashboard </span></a></li>
                  <li <?php echo strpos($pieces[3],"top-navbar.php")!==false?  "active" : ""; ?> ><a href="top-navbar.php" data-original-title="Top Navbar"><i class="fa fa-indent"></i><span class="hidden-minibar"> Top Navbar </span></a></li>


                  <li class="submenu">
                    <a class="dropdown" href="#" data-original-title="Pages"><i class="fa fa-book"></i><span class="hidden-minibar">  Pages <span class="badge bg-primary pull-right">14</span>
                    </a>
                    <ul>
                      <li <?php echo strpos($pieces[3],"calendar.php")!==false? "class='active'" : ""; ?> ><a href="calendar.php" data-original-title="Calendar"><i class="fa fa-calendar"></i><span> Calendar</span></a></li>
                      <li <?php echo strpos($pieces[3],"chat.php")!==false? "class='active'" : ""; ?> ><a href="chat.php" data-original-title="Chat"><i class="fa fa-comment"></i><span> Chat</span></a></li>
                      <li <?php echo strpos($pieces[3],"profile.php")!==false? "class='active'" : ""; ?> ><a href="profile.php" data-original-title="Profile Activity"><i class="fa fa-th"></i><span> Profile Activity</span></a></li>
                      
                      <li <?php echo strpos($pieces[3],"gallery.php")!==false? "class='active'" : ""; ?> ><a href="gallery.php" data-original-title="Gallery"><i class="fa fa-th"></i><span> Gallery</span></a></li>
                      <li <?php echo strpos($pieces[3],"grids.php")!==false? "class='active'" : ""; ?> ><a href="grids.php" data-original-title="Grids"><i class="fa fa-th-large"></i><span> Grids</span></a></li>
                      
                      <li <?php echo strpos($pieces[3],"images.php")!==false? "class='active'" : ""; ?> ><a href="images.php" data-original-title="Images"><i class="fa fa-picture-o"></i><span> Images</span></a></li>
                      <li <?php echo strpos($pieces[3],"inbox.php")!==false? "class='active'" : ""; ?> ><a href="inbox.php" data-original-title="Inbox"><i class="fa fa-envelope"></i><span> Inbox</span></a></li>
                      <li <?php echo strpos($pieces[3],"invoice.php")!==false? "class='active'" : ""; ?> ><a href="invoice.php" data-original-title="Invoice"><i class="fa fa-credit-card"></i><span> Invoice</span></a></li>
                      <li <?php echo strpos($pieces[3],"pricing-table.php")!==false? "class='active'" : ""; ?> ><a href="pricing-table.php" data-original-title="Pricing Table"><i class="fa fa-money"></i><span> Pricing Table</span></a></li>
                      <li <?php echo strpos($pieces[3],"support.php")!==false? "class='active'" : ""; ?> ><a href="support.php" data-original-title="Support"><i class="fa fa-gears"></i><span> Support</span></a></li>
                      
                      <li <?php echo strpos($pieces[3],"typography.php")!==false? "class='active'" : ""; ?> ><a href="typography.php" data-original-title="Typography"><i class="fa fa-text-width"></i><span> Typography</span></a></li>
                    </ul>
                  </li>

                  <li class="submenu">
                    <a class="dropdown" href="#" data-original-title="Utility"><i class="fa fa-tint"></i><span class="hidden-minibar">  Utility <span class="badge bg-primary pull-right">7</span></a>
                    <ul>
                      <li <?php echo strpos($pieces[3],"404.php")!==false? "class='active'" : ""; ?> ><a href="404.php" data-original-title="404"><i class="fa fa-exclamation-circle"></i><span> 404 Error Page</span></a></li>
                      <li <?php echo strpos($pieces[3],"505.php")!==false? "class='active'" : ""; ?> ><a href="505.php" data-original-title="505"><i class="fa fa-exclamation-circle"></i><span> 505 Error Page</span></a></li>
                      <li <?php echo strpos($pieces[3],"faq.php")!==false? "class='active'" : ""; ?> ><a href="faq.php" data-original-title="FAQ"><i class="fa fa-question"></i><span> FAQ</span></a></li>
                      <li <?php echo strpos($pieces[3],"screens.php")!==false? "class='active'" : ""; ?> ><a href="screens.php" data-original-title="Lock Screen"><i class="fa fa-lock"></i><span> Lock Screen</span></a></li>
                      <li <?php echo strpos($pieces[3],"screens.php")!==false? "class='active'" : ""; ?> ><a href="screens.php" data-original-title="LogIn"><i class="fa fa-sign-in"></i><span> Log In</span></a></li>
                      <li <?php echo strpos($pieces[3],"screens.php")!==false? "class='active'" : ""; ?> ><a href="screens.php" data-original-title="SignUp"><i class="fa fa-smile-o"></i><span> Sign Up</span></a></li>
                      <li <?php echo strpos($pieces[3],"template.php")!==false? "class='active'" : ""; ?> ><a href="template.php" data-original-title="Template"><i class="fa fa-pagelines"></i><span> Template Page</span></a></li>
                    </ul> 
                  </li>
                  
                  <li class="submenu"> <!-- Example for second level menu -->
                    <a class="dropdown" href="#" data-original-title="UI Elements"><i class="fa fa-user"></i><span class="hidden-minibar">  UI Elements <span class="badge bg-primary pull-right">17</span></a>
                    <ul>

                      <li <?php echo strpos($pieces[3],"alerts.php")!==false? "class='active'" : ""; ?> ><a href="alerts.php" data-original-title="Alerts"><i class="fa fa-exclamation-triangle"></i><span> Alerts</span></a></li>
                      <li <?php echo strpos($pieces[3],"animations.php")!==false? "class='active'" : ""; ?> ><a href="animations.php" data-original-title="Animations"><i class="fa fa-font"></i><span> Animations</span></a></li>
                      <li <?php echo strpos($pieces[3],"breadcrumbs-jumbotron.php")!==false? "class='active'" : ""; ?> ><a href="breadcrumbs-jumbotron.php" data-original-title="Breadcrumbs"><i class="fa fa-chain"></i><span> Breadcrumbs &amp; Jumbo</span></a></li>
                      <li <?php echo strpos($pieces[3], "buttons.php")!==false ? "class='active'" : ""; ?> ><a href="buttons.php" data-original-title="Buttons"><i class="fa fa-sort"></i><span> Buttons </span></a></li>
                      <li <?php echo strpos($pieces[3],"carousel.php")!==false? "class='active'" : ""; ?> ><a href="carousel.php" data-original-title="carousel"><i class="fa fa-coffee"></i><span> Carousel</span></a></li>
                      <li <?php echo strpos($pieces[3],"notifications.php")!==false? "class='active'" : ""; ?> ><a href="notifications.php" data-original-title="Notifications"><i class="fa fa-bell-o"></i><span> Notifications</span></a></li>
                      <li <?php echo strpos($pieces[3],"knobs.php")!==false? "class='active'" : ""; ?> ><a href="knobs.php" data-original-title="Knobs"><i class="fa fa-dot-circle-o"></i><span> Knobs</span></a></li>
                      <li <?php echo strpos($pieces[3],"labels-badges.php")!==false? "class='active'" : ""; ?> ><a href="labels-badges.php" data-original-title="Labels"><i class="fa fa-phone-square"></i><span> Labels &amp; badges</span></a></li>
                      <li <?php echo strpos($pieces[3],"list-groups.php")!==false? "class='active'" : ""; ?> ><a href="list-groups.php" data-original-title="List Groups"><i class="fa fa-list"></i><span> List Groups</span></a></li>
                      <li <?php echo strpos($pieces[3],"pagination.php")!==false? "class='active'" : ""; ?> ><a href="pagination.php" data-original-title="Pagination"><i class="fa fa-sort-numeric-asc"></i><span> Pagination</span></a></li>
                      <li <?php echo strpos($pieces[3],"panels.php")!==false? "class='active'" : ""; ?> ><a href="panels.php" data-original-title="Panels"><i class="fa fa-windows"></i><span> Panels</span></a></li>
                      <li <?php echo strpos($pieces[3],"progress-bars.php")!==false? "class='active'" : ""; ?> ><a href="progress-bars.php" data-original-title="Progress"><i class="fa fa-ruble"></i><span> Progress Bars</span></a></li>
                      <li <?php echo strpos($pieces[3],"sliders.php")!==false? "class='active'" : ""; ?> ><a href="sliders.php" data-original-title="Sliders"><i class="fa fa-exchange"></i><span> Sliders</span></a></li>
                      <li <?php echo strpos($pieces[3],"tabs-accordians.php")!==false? "class='active'" : ""; ?> ><a href="tabs-accordians.php" data-original-title="Tabs"><i class="fa fa-check"></i><span> Tabs &amp; Accordians</span></a></li>
                      <li <?php echo strpos($pieces[3],"info-boxes.php")!==false? "class='active'" : ""; ?> ><a href="info-boxes.php" data-original-title="Info Boxes"><i class="fa fa-bullseye"></i><span> Info Boxes</span></a></li>
                      <li <?php echo strpos($pieces[3],"tooltips-popovers.php")!==false? "class='active'" : ""; ?> ><a href="tooltips-popovers.php" data-original-title="Tooltips"><i class="fa fa-asterisk"></i><span> Tooltips &amp; popovers</span></a></li>
                      <li <?php echo strpos($pieces[3],"wells.php")!==false? "class='active'" : ""; ?> ><a href="wells.php" data-original-title="Wells"><i class="fa fa-beer"></i><span> Wells</span></a></li>
                    </ul>
                  </li>    

                  <li class="submenu"> <!-- Example for second level menu -->
                    <a class="dropdown" href="#" data-original-title="Tables"><i class="fa fa-table"></i><span class="hidden-minibar">  Tables <span class="badge bg-primary pull-right">3</span></a>
                    <ul>
                      <li <?php echo strpos($pieces[3],"basic-tables.php")!==false? "class='active'" : ""; ?> ><a href="basic-tables.php" data-original-title="Basic"><i class="fa fa-table"></i><span>  Basic Tables</span></a></li>
                      <li <?php echo strpos($pieces[3],"editable-tables.php")!==false? "class='active'" : ""; ?> ><a href="editable-tables.php" data-original-title="Editable"><i class="fa fa-table"></i><span>  Editable Tables</span></a></li>
                      <li <?php echo strpos($pieces[3],"dynamic-tables.php")!==false? "class='active'" : ""; ?> ><a href="dynamic-tables.php" data-original-title="Dynamic"><i class="fa fa-table"></i><span>  Dynamic Tables</span></a></li>
                    </ul> 
                  </li>

                  <li class="submenu"> <!-- Example for Third level menu -->
                    <a class="dropdown" href="#" data-original-title="Unlimited Menu"><i class="fa fa-sitemap"></i><span class="hidden-minibar"> Unlimited Menu <span class="badge bg-primary pull-right">3</span></a>
                    <ul>
                      <li><a href="#" data-original-title="SubMenu"><i class="fa fa-android"></i><span> Submenu </span></a></li>
                      <li><a href="#" data-original-title="SubMenu"><i class="fa fa-apple"></i><span> Submenu </span></a></li>
                      <li class="submenu">
                        <a class="dropdown" href="#" data-original-title="One More"><i class="fa fa-windows"></i><span> One More <span class="badge bg-primary pull-right">3</span></a>
                        <ul>
                          <li><a href="#" data-original-title="SubMenu"><i class="fa fa-facebook-square"></i><span> Submenu </span></a></li>
                          <li><a href="#" data-original-title="SubMenu"><i class="fa fa-google-plus-square"></i><span> Submenu </span></a></li>
                          <li class="submenu">
                            <a class="dropdown" href="#" data-original-title="More Here"><i class="fa fa-twitter-square"></i><span> More here <span class="badge bg-primary pull-right">3</span></a>
                            <ul>
                              <li><a href="#" data-original-title="SubMenu"><i class="fa fa-flickr"></i><span> Submenu </span></a></li>
                              <li><a href="#" data-original-title="SubMenu"><i class="fa fa-pinterest"></i><span> Submenu </span></a></li>
                              <li><a href="#" data-original-title="Add More"><i class="fa fa-linkedin-square"></i><span>More.. trust me </span></a></li>
                            </ul> 
                          </li>
                        </ul> 
                      </li>
                    </ul> 
                  </li>

                  <li class="submenu">
                    <a class="dropdown" href="#" data-original-title="Forms"><i class="fa fa-list-alt"></i><span class="hidden-minibar"> Forms  <span class="badge bg-primary pull-right">9</span></a>
                    <ul>
                      <li ><a href="dropzone-file-upload.php" data-original-title="Dropzone"><i class="fa fa-level-down"></i><span>  Dropzone File Upload</span></a></li>
                      <li <?php echo strpos($pieces[3],"form-input-masks.php")!==false? "class='active'" : ""; ?> ><a href="form-input-masks.php" data-original-title="Input Masks"><i class="fa fa-pencil-square"></i><span> Form Input Masks</span></a></li>
                      <li <?php echo strpos($pieces[3],"form-validation.php")!==false? "class='active'" : ""; ?> ><a href="form-validation.php" data-original-title="validation"><i class="fa fa-warning"></i><span> Form Validation</span></a></li>
                      <li <?php echo strpos($pieces[3],"form-wizard.php")!==false? "class='active'" : ""; ?> ><a href="form-wizard.php" data-original-title="Form wizard"><i class="fa fa-indent"></i><span>  Form Wizard</span></a></li>
                      <li <?php echo strpos($pieces[3],"input-groups.php")!==false? "class='active'" : ""; ?> ><a href="input-groups.php" data-original-title="Input Groups"><i class="fa fa-group"></i><span> Input Groups</span></a></li>
                      <li <?php echo strpos($pieces[3],"layouts-elements.php")!==false? "class='active'" : ""; ?> ><a href="layouts-elements.php" data-original-title="Form Elements"><i class="fa fa-indent"></i><span>  Layouts &amp; elements</span></a></li>
                      <li <?php echo strpos($pieces[3],"multiple-file-upload.php")!==false? "class='active'" : ""; ?> ><a href="multiple-file-upload.php" data-original-title="File Upload"><i class="fa fa-cloud-upload"></i><span>  Multiple File Upload</span></a></li>
                      <li <?php echo strpos($pieces[3],"pickers.php")!==false? "class='active'" : ""; ?> ><a href="pickers.php" data-original-title="Pickers"><i class="fa fa-eye"></i><span>  Pickers</span></a></li>
                      <li <?php echo strpos($pieces[3],"wysiwyg-markdown.php")!==false? "class='active'" : ""; ?> ><a href="wysiwyg-markdown.php" data-original-title="Wysiwyg &amp; Markdown"><i class="fa fa-pencil-square"></i><span> Wysiwyg &amp; Markdown</span></a></li>
                    </ul> 
                  </li>

                  <li class="submenu">
                    <a class="dropdown" href="#" data-original-title="Charts"><i class="fa fa-bar-chart-o"></i><span class="hidden-minibar"> Charts  <span class="badge bg-primary pull-right">6</span></a>
                    <ul>
                      <li ><a href="basic-charts.php" data-original-title="Basic Charts"><i class="fa fa-bar-chart-o"></i><span>  Basic Charts</span></a></li>
                      <li <?php echo strpos($pieces[3],"live-charts.php")!==false? "class='active'" : ""; ?> ><a href="live-charts.php" data-original-title="Live Charts"><i class="fa fa-bar-chart-o"></i><span> Live Charts</span></a></li>
                      <li <?php echo strpos($pieces[3],"morris.php")!==false? "class='active'" : ""; ?> ><a href="morris.php" data-original-title="Morris Charts"><i class="fa fa-bar-chart-o"></i><span> Morris Charts</span></a></li>
                      <li <?php echo strpos($pieces[3],"pie-charts.php")!==false? "class='active'" : ""; ?> ><a href="pie-charts.php" data-original-title="Pie Charts"><i class="fa fa-bar-chart-o"></i><span>  Pie Charts</span></a></li>
                      <li <?php echo strpos($pieces[3],"sparklines.php")!==false? "class='active'" : ""; ?> ><a href="sparklines.php" data-original-title="Spark Lines"><i class="fa fa-bar-chart-o"></i><span>  Spark Lines</span></a></li>
                      <li <?php echo strpos($pieces[3],"nvd3.php")!==false? "class='active'" : ""; ?> ><a href="nvd3.php" data-original-title="NVD3"><i class="fa fa-bar-chart-o"></i><span>  NVD3</span></a></li>
                    </ul> 
                  </li>

                  <li class="submenu">
                    <a class="dropdown" href="#" data-original-title="Maps"><i class="fa fa-map-marker"></i><span class="hidden-minibar"> Maps  <span class="badge bg-primary pull-right">2</span></a>
                    <ul>
                      <li <?php echo strpos($pieces[3],"google-maps.php")!==false? "class='active'" : ""; ?> ><a href="google-maps.php" data-original-title="Google Maps"><i class="fa fa-google-plus"></i><span> Google Maps</span></a></li>
                      <li <?php echo strpos($pieces[3],"vector-maps.php")!==false? "class='active'" : ""; ?> ><a href="vector-maps.php" data-original-title="Vector Maps"><i class="fa fa-vimeo-square"></i><span> Vector Maps</span></a></li>
                    </ul> 
                  </li>

                  <li><a href="icons.php" data-original-title="Icons"><i class="fa fa-truck"></i><span class="hidden-minibar"> Icons</span></a></li>


                </ul>
              </div>
            </div> <!-- /.left-sidebar -->

            <!-- .content -->
            <div class="content">

