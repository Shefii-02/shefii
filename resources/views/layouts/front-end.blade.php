<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
	    <link rel="shortcut icon" href="/img/dp.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Professional Software Engineer" />
        <meta name="keywords" content="shefii, full stack developer,PHP Developer,Laravel Developer,ASP.NET Developer, web developer, mobile developer,software developer, flutter developer, android developer, best hybrid developer, freelancer, freelance developer, best freelancer for mobile app developmer, best freelancer for web developmer, remote work, freelancer in india, experienced software developer" />
        <meta name="author" content="shefii" />
 

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="Shefii"/>
	<meta property="og:image" content="/img/dp.jpg"/>
	<meta property="og:url" content="/img/dp.jpg"/>
	<meta property="og:site_name" content="Shefii"/>
	<meta property="og:description" content="Software Engineer"/>
	<meta name="twitter:title" content="Shefii@5" />
	<meta name="twitter:image" content="/img/dp.jpg" />
	<meta name="twitter:url" content="/img/dp.jpg" />
	<meta name="twitter:card" content="" />
        	
    <title>{{ config('app.name', 'Mohammed Shafeeque K M - Professional Software Engineer') }}</title>
    

    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <style>
        .progress{
            height: 5px;
            margin-bottom: 15px;
        }
        .active-tab{
          font-weight: 800;
          box-shadow: 0 10px 10px -8px rgba(0, 0, 0, .22) !important;
          background: transparent;

        }
        .category-button{
          box-shadow: 0 0px 0px 0px rgba(245, 17, 17, 0.22);

        }
    </style>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KZ5N0J7PFN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KZ5N0J7PFN');
</script>
      
  </head>

  <body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/animating.js"></script>
    <script src="js/main.js?v=1"></script>
    
      <!-- Custom JavaScript -->
      <script>
        $(document).ready(function() {
          // Show all items by default
          showItems("all");
        
          // Listen for clicks on category buttons
          $(".category-button").on("click", function() {
            $('.category-button').removeClass('active-tab');
            const selectedCategory = $(this).data("category");
            $(this).addClass('active-tab');
            showItems(selectedCategory);
          });
  
          function showItems(category) {
            // Show the items based on the selected category
            $(".portfolio-group-item").each(function() {
              const itemCategory = $(this).data("category");
              if (category === "all" || itemCategory === category) {
                $(this).show();
              } else {
                $(this).hide();
              }
            });
          }
        });
        </script>
  
  </body>
</html>
