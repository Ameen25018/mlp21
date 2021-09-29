<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran-th</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link href="/css/nav.css"rel="stylesheet">
    <link href="/css/surah.css"rel="stylesheet">
</head>

<body>
<div>
        <div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                <div class="container"><a class="navbar-brand" href="home/index.blade.php">QURAN.Online</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                       
                    </div>
                </div>
</div>
</div>
<!--<div class="header-dark">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                        <form class="form-inline mr-auto" target="_self">
                          
                     </form><span class="navbar-text"><a href="login-form.html" class="login">Log In</a></span><a class="btn btn-light action-button" role="button" href="regis.html">Sign Up</a></div> 
                </div>
            </nav>-->
 <p>

 </p>
 <p>

 </p>    
 <div class="container hero">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="text-center">القرآن</h1>
                        <hr style="height:5px;border-width:0;color:brown;background-color:brown"> 
                  <!--  ใส่ยูทูป <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hAAlDoAtV7Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> -->
      
      <div class="input-wrapper large">
        
<form action="/search" data-controller="search-form" data-expand="" class="show-suggestion">
  <input type="search" name="query" value="" placeholder="ค้นหา &quot;Al-Fatihah &quot;" autocapitalize="none" autocomplete="off" autocorrect="off" spellcheck="false" aria-label="Search" aria-haspopup="false" role="combobox" aria-autocomplete="list">
  <button type="submit" ><label for="search-field"><i class="fa fa-search"></i></label>
  </button>
  <div id="suggestions"></div>
</form>

      </div>
    </div>
        
            <!--  </div>
                   <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" id="search-field"></div> 
                  
                    </div>--> 
                    
                </div>
            </div>
                 
    </div>
    @yield('content')
	</body>
</html>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>