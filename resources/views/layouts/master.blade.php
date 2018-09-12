<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Steven Calverley">

 <!-- CSS -->
     <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Typekit Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/lqq0iwn.css">

    <!-- Site Styles -->
    <link rel="stylesheet" href="/css/styles.css" >

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112033043-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-112033043-1');
  </script>


    <title>Steven Calverley</title>
  </head>
  <body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <header>
      <div class='outer-container'>
        @include('layouts.nav')
     </div>
    </header>
    <div class="content">
        @yield('content')

        <footer class="border">
            <p>Copyright Steven Calverley <span id="footer-date">2018</span></p>
        </footer>

    </div>
    <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </body>
</html>
