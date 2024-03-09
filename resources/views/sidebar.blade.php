<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/tlogo.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SIET LIBRARY</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
   
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<div class="sidebar" data-color="purple" data-image="../assets/img/side.jpg">
    <!--Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
Tip 2: you can also add an image using data-image tag -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:;" class="simple-text">
                LIBRARY MANAGEMENT
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('membership') }}">
                    <!-- <i class="nc-icon nc-icon nc-paper-2"></i> -->
                    <p>Membership</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('addBook') }}">
                    <!-- <i class="nc-icon nc-bell-55"></i> -->
                    <p>Add Book</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="">
                    <!-- <i class="nc-icon nc-bell-55"></i> -->
                    <p>Return Book</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="">
                    <!-- <i class="nc-icon nc-bell-55"></i> -->
                    <p>Others</p>
                </a>
            </li>
        </ul>
    </div>
</div>