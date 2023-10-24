
<!DOCTYPE html>
<html class="is-scrolling">
<head>
    <title>ATMS</title> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">   
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("favicon.png") }}">

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="header-wrapper">
                <div class="content-wrapper">
                    <div class="nav-control">
                        <i class="fa fa-bars"></i>
                    </div>
                    <a href="/" class="logo-wrapper">
                        <img src="assets/images/logo.svg" alt="">
                    </a>
                </div>
                <div class="nav-wrapper">
                    <div class="nav-item nav-down {{ $nav == 'solution' ? 'hightlight' : '' }}">
                        SOLUTIONS
                        <div class="sub-wrapper">
                            <a href="/automotive-sensor" >AUTOMOTIVE SENSOR</a>
                            <a href="/charging-solution" >CHARGING SOLUTION</a>
                            <a href="/motor-controllers" >MOTOR CONTROLLERS</a>
                            <a href="/battery-management" >BATTERY MANAGEMENT SYSTEM</a>
                        </div>
                    </div>
                    <a href="/about" class="nav-item {{ $nav == 'about' ? 'hightlight' : '' }}">ABOUT US</a>
                    <a href="#contact" class="nav-item {{ $nav == 'contact' ? 'hightlight' : '' }}">CONTACT</a> 
                </div>
            </div>
        </div>
    </header>
    <main> 
        @yield('body')
    </main>
    <footer style="background-image: url('assets/images/footer.png');" id="contact">
        <div class="wrapper">
            <img src="assets/images/logo-footer.svg" alt="" class="logo">
            <div class="contact">
                <h3>CONTACT</h3>
                <p >12 F., No. 957, Zhongzheng Rd.,Zhonghe Dist., NewTaipei City 235601, Taiwan (R.O.C.) </p>
                <p >Frya@atms.com.tw</p>
            </div>
        </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/d8162761f2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>  
<script type="text/javascript" src="assets/js/window.js"></script>  

</html>         