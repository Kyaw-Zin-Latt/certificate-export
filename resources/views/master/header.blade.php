
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Buy & Sell Admin Panel|Dashboard		  </title>

    <link rel="icon" href="http://localhost/buysell-admin/uploads/favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/backend/css/animate.css">
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/backend/css/style.css">
    <style type="text/css">
        /*start login background image*/
        body#main {
            background: url(http://localhost/buysell-admin/uploads/login_background.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /*end background image*/
    </style>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <!-- Color Picker -->
    <link href="http://localhost/buysell-admin/assets/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <!-- Date Picker -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- ChartJS 1.0.1 -->
    <script src="http://localhost/buysell-admin/assets/plugins/chartjs-old/Chart.min.js"></script>
    <!-- jQuery -->
    <script src="http://localhost/buysell-admin/assets/plugins/jquery/jquery.min.js"></script>
    <!-- gallery lightbox -->
    <link rel="stylesheet" href="http://localhost/buysell-admin/assets/gallery/gallery.css">
    <script src="http://localhost/buysell-admin/assets/plugins/gallery/gallery.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Work+Sans" rel="stylesheet">

</head>


</div>



<body id="dashboard">
<div class="wrapper">  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand border-bottom">

        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>

            <!-- Brand Logo -->

            <span class="brand-text">
          Dashboard</span>

        </ul>
        <ul class="navbar-nav ml-auto">


            <li class="user user-menu">
                <a href="http://localhost/buysell-admin/index.php/admin/profile" class="d-block">

                    <img src="http://localhost/buysell-admin/uploads/thumbnail/user.jpg" class="user-image" alt="User Image">
                    <span class="hidden-xs">PS Buy &amp; Sell Admin</span>
                </a>

            </li>

            <li class="messages-menu open" style="padding-left: 30px;">
                <a href="http://localhost/buysell-admin/index.php/logout" aria-expanded="true">
                    <i class="fa fa-sign-out" style="font-size: 1.5em; color: #000;"></i>
                </a>

            </li>

        </ul>
    </nav>
    <!-- /.navbar -->
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 col-md-3 sidebar teamps-sidebar-open">
                    <!-- Main Sidebar Container -->
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- Sidebar -->
                        <div class="sidebar">
                            <!-- Sidebar user panel (optional) -->
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img src="http://localhost/buysell-admin/uploads/backend_logo.png" class="img-circle elevation-2" alt="User Image">

                                </div>
                                <div class="info" style="font-size: 14px; color: #fff; font-style: bold;">
                                    Buy & Sell Admin Panel        </div>
                            </div>



                            <!-- Sidebar Menu -->
                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                                    <li class="nav-item has-treeview">
                                        <a href="http://localhost/buysell-admin/index.php/admin" class="nav-link">
                                            <i class="nav-icon fa fa-fw fa-tachometer"></i>
                                            <p>
                                                Dashboard              </p>
                                        </a>
                                    </li>



                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link ">
                                            <i class="nav-icon fa fa-fw fa-pencil-square-o"></i>
                                            <p>
                                                Entry                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/categories" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Categories
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/subcategories" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Subcategories
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/items" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Items
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/item_currency" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Item Currency
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/item_price" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Item Price
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/item_type" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Item Type
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/item_locations" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Location Cities
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/offline_payments" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Offline Payment Methods
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/offline_paids" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Offline Paid Items
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/in_app_purchases" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        In App Purchased
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/item_location_townships" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Loction Townships
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/blogs" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Blog
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/item_conditions" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Item Conditions
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/deal_options" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Item Deal Option
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/paid_items" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Paid Items
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link ">
                                            <i class="nav-icon fa fa-fw fa-check-circle"></i>
                                            <p>
                                                Approval                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/pendings" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Pending Items
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/rejects" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Reject Items
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/disables" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Disable Items
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/bluemarkusers" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Verify Blue Mark Users
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link ">
                                            <i class="nav-icon fa fa-fw fa-list-alt"></i>
                                            <p>
                                                Reports                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/popularitems" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Most Popular Items
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/ratings" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Most Rating Users
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/contacts" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Contact Us Message
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/item_reports" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Reported Items
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/transactions" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Transactions History
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link ">
                                            <i class="nav-icon fa fa-fw fa-users"></i>
                                            <p>
                                                Users Management                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/system_users" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        System Users
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/registered_users" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Registered Users
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link ">
                                            <i class="nav-icon fa fa-fw fa-plus-square"></i>
                                            <p>
                                                Miscellaneous                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/dashboard/exports" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Export Database
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/notis" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Push Notification
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview ">
                                        <a href="#" class="nav-link ">
                                            <i class="nav-icon fa fa-fw fa-cogs"></i>
                                            <p>
                                                Setting                <i class="right fa fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/app_settings" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        App Setting
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/module_groups" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Module Group
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/modules" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Module
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/privacy_policies" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Privacy Policy
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/abouts" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        About & Setting
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/api_keys" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Api Keys
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/versions" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Version
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/languages" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Languages
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/backend_configs" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Backend Setting
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/paid_configs" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Paid Configs
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/data_deletion_policies" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Data Deletion Policy
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/thumbnail_generators" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Thumbnail Generator
                                                    </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://localhost/buysell-admin/index.php/admin/image_lists" class="nav-link ">
                                                    <i class="fa fa-caret-right"></i>
                                                    <p>
                                                        Image Lists
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </nav>
                            <!-- /.sidebar-menu -->
                        </div>
                        <!-- /.sidebar -->
                    </aside>

                </div>

                <div class="col-sm-12 col-md-12 main teamps-sidebar-push">

                    <section class="content animated fadeInRight">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h1 class="m-0 text-dark"> Welcome, PS Buy &amp; Sell Admin!</h1>
                                        <!-- Message -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                        </div>
                        <!-- /.content-header -->
                    </section>

                    <!-- Main content -->
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <!-- small box -->
                                    <div class="small-box bg-primary">
                                        <div class="inner">
                                            <h3 style="color: white;">
                                                7    </h3>

                                            <p style="color:white;font-size: 16px;">Total Categories</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-th-list"></i>
                                        </div>
                                        <a href="http://localhost/buysell-admin/index.php/admin/categories" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>        </div>

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3 style="color: white;">
                                                24    </h3>

                                            <p style="color:white;font-size: 16px;">Total Subcategories</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-list"></i>
                                        </div>
                                        <a href="http://localhost/buysell-admin/index.php/admin/subcategories" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>        </div>

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3 style="color: white;">
                                                9    </h3>

                                            <p style="color:white;font-size: 16px;">Total Blogs</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-wpforms"></i>
                                        </div>
                                        <a href="http://localhost/buysell-admin/index.php/admin/blogs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>        </div>

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3 style="color: white;">
                                                3    </h3>

                                            <p style="color:white;font-size: 16px;">Total Contact Message</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-comment"></i>
                                        </div>
                                        <a href="http://localhost/buysell-admin/index.php/admin/contacts" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>        </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
     <span class="badge badge-warning" style="height: 30px; padding: 10px; font-size: 14px;">
         Most Popular Item     </span>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="chart-responsive">
                                                        <canvas id="pieChart" height="150"></canvas>
                                                    </div>
                                                </div>

                                                <!-- /.col -->

                                                <div class="col-md-6">
                                                    <ul class="chart-legend clearfix">

                                                        <li><i class="fa fa-circle-o text-danger"></i>Earphone for Buy(181 touches )</li>

                                                        <li><i class="fa fa-circle-o text-success"></i>My Dell Notebook for Sell(118 touches )</li>

                                                        <li><i class="fa fa-circle-o text-warning"></i>Nokia Keypad for Sell(106 touches )</li>

                                                        <li><i class="fa fa-circle-o text-info"></i>Gaming PC For Buy(91 touches )</li>

                                                        <li><i class="fa fa-circle-o text-primary"></i>Guitar for Buy(57 touches )</li>
                                                    </ul>
                                                </div>

                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <!-- /.card-body -->

                                        <div class="card-footer text-center">
                                            <a href="http://localhost/buysell-admin/index.php/admin/popularitems">View All</a>
                                        </div>
                                        <!-- /.card-footer -->






                                        <script>
                                            //-------------
                                            //- PIE CHART -
                                            //-------------

                                            // Get context with jQuery - using jQuery's .get() method.
                                            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                                            var pieChart       = new Chart(pieChartCanvas)
                                            var PieData        = [
                                                {
                                                    value    : '181',
                                                    color    : '#dc3545',
                                                    highlight: '#dc3545',
                                                    label    : 'Earphone for Buy'
                                                },
                                                {
                                                    value    : '118',
                                                    color    : '#28a745',
                                                    highlight: '#28a745',
                                                    label    : 'My Dell Notebook for Sell'
                                                },
                                                {
                                                    value    : '106',
                                                    color    : '#ffc107',
                                                    highlight: '#ffc107',
                                                    label    : 'Nokia Keypad for Sell'
                                                },
                                                {
                                                    value    : '91',
                                                    color    : '#17a2b8',
                                                    highlight: '#17a2b8',
                                                    label    : 'Gaming PC For Buy'
                                                },
                                                {
                                                    value    : '57',
                                                    color    : '#007bff',
                                                    highlight: '#007bff',
                                                    label    : 'Guitar for Buy'
                                                },
                                            ]
                                            var pieOptions     = {
                                                //Boolean - Whether we should show a stroke on each segment
                                                segmentShowStroke    : true,
                                                //String - The colour of each segment stroke
                                                segmentStrokeColor   : '#fff',
                                                //Number - The width of each segment stroke
                                                segmentStrokeWidth   : 1,
                                                //Number - The percentage of the chart that we cut out of the middle
                                                percentageInnerCutout: 50, // This is 0 for Pie charts
                                                //Number - Amount of animation steps
                                                animationSteps       : 100,
                                                //String - Animation easing effect
                                                animationEasing      : 'easeOutBounce',
                                                //Boolean - Whether we animate the rotation of the Doughnut
                                                animateRotate        : true,
                                                //Boolean - Whether we animate scaling the Doughnut from the centre
                                                animateScale         : false,
                                                //Boolean - whether to make the chart responsive to window resizing
                                                responsive           : true,
                                                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                                                maintainAspectRatio  : false,
                                                //String - A legend template
                                                legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
                                                //String - A tooltip template
                                                tooltipTemplate      : '<%=value %> <%=label%>'
                                            }
                                            //Create pie or douhnut chart
                                            // You can switch between pie and douhnut using the method below.
                                            pieChart.Doughnut(PieData, pieOptions)
                                            //-----------------
                                            //- END PIE CHART -
                                        </script>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <!--Revenue CHART -->
                                        <div class="card-header" style="border-top: 2px solid red;">
                                            <h3 class="card-title">
     <span class="badge badge-warning" style="height: 30px; padding: 10px; font-size: 14px;">
         Reported Item     </span>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="box-body chart-responsive">
                                            <div class="chart" id="line-chart" style="height: 230px;"></div>
                                        </div>


                                        <script>
                                            $(function () {
                                                "use strict";

                                                //Line CHART
                                                var monthNames = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                                                    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                                                ];
                                                Morris.Line({
                                                    element: 'line-chart',
                                                    data: [
                                                        {y: 1, a: 0},
                                                        {y: 2, a: 0},
                                                        {y: 3, a: 0},
                                                        {y: 4, a: 0},
                                                        {y: 5, a: 0},
                                                        {y: 6, a: 0},
                                                        {y: 7, a: 0},
                                                        {y: 8, a: 0},
                                                        {y: 9, a: 0},
                                                        {y: 10, a: 1},
                                                        {y: 11, a: 0},
                                                        {y: 12, a: 0}
                                                    ],
                                                    xkey: 'y',
                                                    parseTime: false,
                                                    ykeys: ['a'],
                                                    xLabelFormat: function (x) {
                                                        var index = parseInt(x.src.y);
                                                        return monthNames[index];
                                                    },
                                                    xLabels: "month",
                                                    labels: ['Transaction'],
                                                    lineColors: ['#00ffb2'],
                                                    lineWidth        : 2,
                                                    hideHover: 'auto'

                                                });

                                            });
                                        </script>          </div>
                                </div>

                                <div class="col-12">
                                    <div class="card">
                                        <!-- TABLE: LATEST ORDERS -->
                                        <div class="card-header border-transparent">
                                            <h3 class="card-title">
    <span class="badge badge-warning" style="height: 30px; padding: 10px; font-size: 14px; ">

      Total      :      19      Recently Added Items
    </span>
                                            </h3>

                                            <div class="card-tools">

                                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-widget="remove">
                                                    <i class="fa fa-times"></i>
                                                </button>

                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0">

                                            <table class="table m-0 table-striped">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Item Name</th>
                                                    <th>Category Name</th>
                                                    <th>Owner Name</th>
                                                    <th>Item Image</th>
                                                    <th>Date</th>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td>sfsdf</td>
                                                    <td>Fashions</td>
                                                    <td>PS Buy &amp; Sell Admin</td>
                                                    <td><img width="128" height="128" src="http://localhost/buysell-admin/uploads/thumbnail/no_image.png"/></td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">2021-06-21 06:56:58</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Apartment for Buy</td>
                                                    <td>Properties</td>
                                                    <td>PS Buy &amp; Sell Admin</td>


                                                    <td><img width="128" height="128" src="http://localhost/buysell-admin/uploads/thumbnail/apartment3.jpg"/></td>

                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">2020-12-15 12:32:36</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Nokia Keypad for Sell</td>
                                                    <td>Phones</td>
                                                    <td>Jessie</td>


                                                    <td><img width="128" height="128" src="http://localhost/buysell-admin/uploads/thumbnail/IMG_20190724_104823_899.jpg"/></td>

                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">2019-07-24 14:06:08</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>IPhone 7 Plus for Buy</td>
                                                    <td>Phones</td>
                                                    <td>Jessie</td>


                                                    <td><img width="128" height="128" src="http://localhost/buysell-admin/uploads/thumbnail/IMG_20190724_104758_965.jpg"/></td>

                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">2019-07-24 14:02:14</div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                        <!-- /.table-responsive -->


                                        <div class="card-footer text-center">
                                            <a href="http://localhost/buysell-admin/index.php/admin/items">View All</a>
                                        </div>
                                        <!-- /.card-footer -->


                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <!-- USERS LIST -->

                                        <div class="card-header">
                                            <h3 class="card-title">
    <span class="badge badge-warning" style="height: 30px; padding: 10px; font-size: 14px;">

          Total            :            5            Users
      </span>
                                            </h3>

                                            <div class="card-tools">

                                                <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                                </button>
                                            </div>

                                        </div>

                                        <!-- /.card-header -->
                                        <div class="card-body p-0" style="height: 150px;">
                                            <br><br>
                                            <ul class="users-list clearfix">

                                                <li>
                                                    <img src="http://localhost/buysell-admin/uploads/09369d6214dd2e4b64ff855be182ee79.jpg" alt="User Image" style="border-radius: 50%; width:60px; height:60px;">
                                                    <a class="users-list-name" href="#">PS Dev</a>
                                                    <span class="users-list-date">teamps.dev@gmail.com</span>
                                                </li>

                                                <li>
                                                    <img src="http://localhost/buysell-admin/uploads/05daf3adf40588c42692b3cddd39ba16.jpg" alt="User Image" style="border-radius: 50%; width:60px; height:60px;">
                                                    <a class="users-list-name" href="#">Panacea Soft</a>
                                                    <span class="users-list-date">teamps.test@gmail.com</span>
                                                </li>

                                                <li>
                                                    <img src="http://localhost/buysell-admin/uploads/thumbnail/no_image.png" alt="User Image" style="border-radius: 50%; width:60px; height:60px;">
                                                    <a class="users-list-name" href="#">pp</a>
                                                    <span class="users-list-date">pp22@gmail.com</span>
                                                </li>

                                                <li>
                                                    <img src="http://localhost/buysell-admin/uploads/k2.jpg" alt="User Image" style="border-radius: 50%; width:60px; height:60px;">
                                                    <a class="users-list-name" href="#">Damei</a>
                                                    <span class="users-list-date">damei@gmail.com</span>
                                                </li>

                                            </ul>

                                            <!-- /.users-list -->
                                        </div>

                                        <br><br>
                                        <!-- /.card-body -->

                                        <div class="card-footer text-center">
                                            <a href="http://localhost/buysell-admin/index.php/admin/registered_users">View All</a>
                                        </div>
                                        <!-- /.card-footer -->


                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">

                                        <div class="card-header">
                                            <h3 class="card-title">
      <span class="badge badge-warning" style="height: 30px; padding: 10px; font-size: 14px;">

        Total        :        3        Messages
      </span>
                                            </h3>

                                            <div class="card-tools">

                                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" data-widget="remove">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0" style="height: 188px;">
                                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                                <li class="item">
                                                    <div class="product-img">
                                                        <img src="http://localhost/buysell-admin/assets/dist/img/email.png" alt="Product Image" class="img-size-50">
                                                    </div>
                                                    <div class="product-info">
                                                        Paul Austin                <span class="float-right"> By : paulaustin@gmail.com</span>
                                                        <span class="product-description">
                hello              </span>
                                                    </div>
                                                </li>
                                                <li class="item">
                                                    <div class="product-img">
                                                        <img src="http://localhost/buysell-admin/assets/dist/img/email.png" alt="Product Image" class="img-size-50">
                                                    </div>
                                                    <div class="product-info">
                                                        Han                <span class="float-right"> By : han@gmail.com</span>
                                                        <span class="product-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus consequat orci nec consectetur efficitur. Nam porta vitae nunc eget facilisis. Aliquam scelerisque tempus eros, eu volutpat erat porta porta.               </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- /.card-body -->

                                        <div class="card-footer text-center">
                                            <a href="http://localhost/buysell-admin/index.php/admin/contacts">View All</a>
                                        </div>
                                        <!-- /.card-footer -->

                                    </div>
                                </div>
                                <!-- ./col -->

                                <!-- col -->
                            </div>
                        </div>
                    </div>

                </div>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- PanaceaSoft Website -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-7127831079008160"
                     data-ad-slot="6882887537"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

            </div>
        </div>
    </div>
</div>        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/sl-1.2.5/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/sl-1.2.5/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/css/dataTables.checkboxes.css" />
<script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost/buysell-admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="http://localhost/buysell-admin/assets/ckeditor4/ckeditor.js"></script> -->
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://localhost/buysell-admin/assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/buysell-admin/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="http://localhost/buysell-admin/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="http://localhost/buysell-admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/buysell-admin/assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- Bootstrap WYSIHTML5 -->


<!-- AdminLTE App(This is sidebar and nav action) -->
<script src="http://localhost/buysell-admin/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/buysell-admin/assets/dist/js/demo.js"></script>
<!-- Select2 -->
<link rel="stylesheet" href="http://localhost/buysell-admin/assets/select2/select2.min.css">
<script src="http://localhost/buysell-admin/assets/select2/select2.full.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<!-- OpenStreet Map -->
<!-- Load Leaflet from CDN -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

<!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@2.5.3/dist/esri-leaflet.js"
        integrity="sha512-K0Vddb4QdnVOAuPJBHkgrua+/A9Moyv8AQEWi0xndQ+fqbRfAFd47z4A9u1AW/spLO0gEaiE1z98PK1gl5mC5Q=="
        crossorigin=""></script>

<!-- Load Esri Leaflet Geocoder from CDN -->
<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.css"
      integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
      crossorigin="">
<script src="https://unpkg.com/esri-leaflet-geocoder@2.3.3/dist/esri-leaflet-geocoder.js"
        integrity="sha512-HrFUyCEtIpxZloTgEKKMq4RFYhxjJkCiF5sDxuAokklOeZ68U2NPfh4MFtyIVWlsKtVbK5GD2/JzFyAfvT5ejA=="
        crossorigin=""></script>
<script>
    var itm_map = L.map('itm_location').setView([0, 0], 5);

    const itm_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const itm_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const itm_tiles = L.tileLayer(itm_tileUrl, { itm_attribution });
    itm_tiles.addTo(itm_map);
    var itm_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var itm_searchControl = L.esri.Geocoding.geosearch().addTo(itm_map);
    var results = L.layerGroup().addTo(itm_map);

    itm_searchControl.on('results',function(data){
        results.clearLayers();

        for(var i= data.results.length -1; i>=0; i--) {
            itm_map.removeLayer(itm_marker);
            results.addLayer(L.marker(data.results[i].latlng));
            var itm_search_str = data.results[i].latlng.toString();
            var itm_search_res = itm_search_str.substring(itm_search_str.indexOf("(") + 1, itm_search_str.indexOf(")"));
            var itm_searchArr = new Array();
            itm_searchArr = itm_search_res.split(",");

            document.getElementById("lat").value = itm_searchArr[0].toString();
            document.getElementById("lng").value = itm_searchArr[1].toString();

        }
    })
    var popup = L.popup();

    function onMapClick(e) {

        var itm = e.latlng.toString();
        var itm_res = itm.substring(itm.indexOf("(") + 1, itm.indexOf(")"));
        itm_map.removeLayer(itm_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var itm_tmpArr = new Array();
        itm_tmpArr = itm_res.split(",");

        document.getElementById("lat").value = itm_tmpArr[0].toString();
        document.getElementById("lng").value = itm_tmpArr[1].toString();
    }

    itm_map.on('click', onMapClick);
</script>
<script>
    var app_map = L.map('app_location').setView([0, 0], 5);

    const app_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const app_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const app_tiles = L.tileLayer(app_tileUrl, { app_attribution });
    app_tiles.addTo(app_map);
    var app_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var app_searchControl = L.esri.Geocoding.geosearch().addTo(app_map);
    var results = L.layerGroup().addTo(app_map);

    app_searchControl.on('results',function(data){
        results.clearLayers();

        for(var i= data.results.length -1; i>=0; i--) {
            app_map.removeLayer(app_marker);
            results.addLayer(L.marker(data.results[i].latlng));
            var app_search_str = data.results[i].latlng.toString();
            var app_search_res = app_search_str.substring(app_search_str.indexOf("(") + 1, app_search_str.indexOf(")"));
            var app_searchArr = new Array();
            app_searchArr = app_search_res.split(",");

            document.getElementById("lat").value = app_searchArr[0].toString();
            document.getElementById("lng").value = app_searchArr[1].toString();

        }
    })
    var popup = L.popup();

    function onMapClick(e) {

        var app = e.latlng.toString();
        var app_res = app.substring(app.indexOf("(") + 1, app.indexOf(")"));
        app_map.removeLayer(app_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var app_tmpArr = new Array();
        app_tmpArr = app_res.split(",");

        document.getElementById("lat").value = app_tmpArr[0].toString();
        document.getElementById("lng").value = app_tmpArr[1].toString();
    }

    app_map.on('click', onMapClick);
</script>
<script>
    var mymap = L.map('location_map').setView([0, 0], 5);

    const attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const tiles = L.tileLayer(tileUrl, { attribution });
    tiles.addTo(mymap);
    var marker2 = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var searchControl = L.esri.Geocoding.geosearch().addTo(mymap);
    var results = L.layerGroup().addTo(mymap);

    searchControl.on('results',function(data){
        results.clearLayers();

        for(var i= data.results.length -1; i>=0; i--) {
            mymap.removeLayer(marker2);
            results.addLayer(L.marker(data.results[i].latlng));
            var search_str = data.results[i].latlng.toString();
            var search_res = search_str.substring(search_str.indexOf("(") + 1, search_str.indexOf(")"));
            var searchArr = new Array();
            searchArr = search_res.split(",");

            document.getElementById("lat").value = searchArr[0].toString();
            document.getElementById("lng").value = searchArr[1].toString();

        }
    })
    var popup = L.popup();

    function onMapClick(e) {

        var str = e.latlng.toString();
        var str_res = str.substring(str.indexOf("(") + 1, str.indexOf(")"));
        mymap.removeLayer(marker2);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var tmpArr = new Array();
        tmpArr = str_res.split(",");

        document.getElementById("lat").value = tmpArr[0].toString();
        document.getElementById("lng").value = tmpArr[1].toString();
    }

    mymap.on('click', onMapClick);
</script>

<!-- pending map -->

<script>

    var pending_map = L.map('pending_map').setView([0, 0], 5);

    const pending_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const pending_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const pending_tiles = L.tileLayer(pending_tileUrl, { pending_attribution });
    pending_tiles.addTo(pending_map);
    var pending_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var results = L.layerGroup().addTo(pending_map);

    var popup = L.popup();

    function onMapClick(e) {

        var pending = e.latlng.toString();
        var pending_res = pending.substring(pending.indexOf("(") + 1, pending.indexOf(")"));
        pending_map.removeLayer(pending_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var pending_tmpArr = new Array();
        pending_tmpArr = pending_res.split(",");

        document.getElementById("lat").value = pending_tmpArr[0].toString();
        document.getElementById("lng").value = pending_tmpArr[1].toString();
    }

    pending_map.on('click', onMapClick);
</script>

<!-- disable map -->

<script>

    var disable_map = L.map('disable_map').setView([0, 0], 5);

    const disable_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const disable_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const disable_tiles = L.tileLayer(disable_tileUrl, { disable_attribution });
    disable_tiles.addTo(disable_map);
    var disable_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var results = L.layerGroup().addTo(disable_map);

    var popup = L.popup();

    function onMapClick(e) {

        var disable = e.latlng.toString();
        var disable_res = disable.substring(disable.indexOf("(") + 1, disable.indexOf(")"));
        disable_map.removeLayer(disable_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var disable_tmpArr = new Array();
        disable_tmpArr = disable_res.split(",");

        document.getElementById("lat").value = disable_tmpArr[0].toString();
        document.getElementById("lng").value = disable_tmpArr[1].toString();
    }

    disable_map.on('click', onMapClick);
</script>

<!-- reject map -->

<script>

    var reject_map = L.map('reject_map').setView([0, 0], 5);

    const reject_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const reject_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const reject_tiles = L.tileLayer(reject_tileUrl, { reject_attribution });
    reject_tiles.addTo(reject_map);
    var reject_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var results = L.layerGroup().addTo(reject_map);

    var popup = L.popup();

    function onMapClick(e) {

        var reject = e.latlng.toString();
        var reject_res = reject.substring(reject.indexOf("(") + 1, reject.indexOf(")"));
        reject_map.removeLayer(reject_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var reject_tmpArr = new Array();
        reject_tmpArr = reject_res.split(",");

        document.getElementById("lat").value = reject_tmpArr[0].toString();
        document.getElementById("lng").value = reject_tmpArr[1].toString();
    }

    reject_map.on('click', onMapClick);
</script>

<!-- popular item map-->

<script>

    var popularitem_map = L.map('popularitem_map').setView([0, 0], 5);

    const popularitem_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const popularitem_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const popularitem_tiles = L.tileLayer(popularitem_tileUrl, { popularitem_attribution });
    popularitem_tiles.addTo(popularitem_map);
    var popularitem_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var results = L.layerGroup().addTo(popularitem_map);

    var popup = L.popup();

    function onMapClick(e) {

        var popularitem = e.latlng.toString();
        var popularitem_res = popularitem.substring(popularitem.indexOf("(") + 1, popularitem.indexOf(")"));
        popularitem_map.removeLayer(popularitem_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var popularitem_tmpArr = new Array();
        popularitem_tmpArr = popularitem_res.split(",");

        document.getElementById("lat").value = popularitem_tmpArr[0].toString();
        document.getElementById("lng").value = popularitem_tmpArr[1].toString();
    }

    popularitem_map.on('click', onMapClick);
</script>

<!-- report item map -->

<script>

    var report_map = L.map('report_map').setView([0, 0], 5);

    const report_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const report_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const report_tiles = L.tileLayer(report_tileUrl, { report_attribution });
    report_tiles.addTo(report_map);
    var report_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var results = L.layerGroup().addTo(report_map);

    var popup = L.popup();

    function onMapClick(e) {

        var report = e.latlng.toString();
        var report_res = report.substring(report.indexOf("(") + 1, report.indexOf(")"));
        report_map.removeLayer(report_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var report_tmpArr = new Array();
        report_tmpArr = report_res.split(",");

        document.getElementById("lat").value = report_tmpArr[0].toString();
        document.getElementById("lng").value = report_tmpArr[1].toString();
    }

    report_map.on('click', onMapClick);
</script>

<!-- transcation item map-->

<script>

    var transcation_map = L.map('transcation_map').setView([0, 0], 5);

    const transcation_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const transcation_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const transcation_tiles = L.tileLayer(transcation_tileUrl, { transcation_attribution });
    transcation_tiles.addTo(transcation_map);
    var transcation_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var results = L.layerGroup().addTo(transcation_map);

    var popup = L.popup();

    function onMapClick(e) {

        var transcation = e.latlng.toString();
        var popularitem_res = transcation.substring(transcation.indexOf("(") + 1, transcation.indexOf(")"));
        transcation_map.removeLayer(transcation_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var transcation_tmpArr = new Array();
        transcation_tmpArr = popularitem_res.split(",");

        document.getElementById("lat").value = transcation_tmpArr[0].toString();
        document.getElementById("lng").value = transcation_tmpArr[1].toString();
    }

    transcation_map.on('click', onMapClick);
</script>

<!-- location township map -->

<script>

    var township_map = L.map('township_map').setView([0, 0], 5);

    const town_attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const town_tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const town_tiles = L.tileLayer(town_tileUrl, { town_attribution });
    town_tiles.addTo(township_map);
    var town_marker = new L.Marker(new L.LatLng(0, 0));
    //mymap.addLayer(marker2);
    var town_searchControl = L.esri.Geocoding.geosearch().addTo(township_map);
    var results = L.layerGroup().addTo(township_map);

    town_searchControl.on('results',function(data){
        results.clearLayers();

        for(var i= data.results.length -1; i>=0; i--) {
            township_map.removeLayer(town_marker);
            results.addLayer(L.marker(data.results[i].latlng));
            var town_search_str = data.results[i].latlng.toString();
            var town_search_res = town_search_str.substring(town_search_str.indexOf("(") + 1, town_search_str.indexOf(")"));
            var town_searchArr = new Array();
            town_searchArr = town_search_res.split(",");

            document.getElementById("lat").value = town_searchArr[0].toString();
            document.getElementById("lng").value = town_searchArr[1].toString();

        }
    })
    var popup = L.popup();

    function onMapClick(e) {

        var town = e.latlng.toString();
        var town_res = town.substring(town.indexOf("(") + 1, town.indexOf(")"));
        township_map.removeLayer(town_marker);
        results.clearLayers();
        results.addLayer(L.marker(e.latlng));

        var town_tmpArr = new Array();
        town_tmpArr = town_res.split(",");

        document.getElementById("lat").value = town_tmpArr[0].toString();
        document.getElementById("lng").value = town_tmpArr[1].toString();
    }

    township_map.on('click', onMapClick);
</script>

<script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

<!-- Google Analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', "UA-79164209-2", 'auto');
    ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<script src="http://localhost/buysell-admin/assets/validator/jquery.validate.js"></script>

<script type="text/javascript">

    // functions to run after jquery is loaded
    if ( typeof runAfterJQ == "function" ) runAfterJQ();


    // functions to run after jquery is loaded
    if ( typeof jqvalidate == "function" ) jqvalidate();


    $('.page-sidebar-menu li').removeClass('active');

    // highlight submenu item
    $('li a[href="' + this.location.pathname + '"]').parent().addClass('active');

    // Highlight parent menu item.
    $('ul a[href="' + this.location.pathname + '"]').parents('li').addClass('active');



</script>

<script>

    $(function () {
        //Date range picker for offline paid

        $('input[name="date"]').daterangepicker();

    })

</script>

<script>

    $(function () {
        //Date range picker for offline paid

        $('#reservation').daterangepicker();

    })

</script>


</div>
<!-- ./ wrapper -->
</body>
</html>
