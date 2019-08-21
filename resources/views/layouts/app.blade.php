<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=notosan' />
    <title>{{config('app.name','Agricultural Loan')}}</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
    @include('inc.navbar')
    <div class="demo">
        <img class="demoimg" src="{{asset('img/body.jpg')}}" alt="" style="width: 100%">
        @yield('content')
    </div>
    <br><br><br>
    @include('inc.footer')
    <script>
        $(window).scroll(function(){
			$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
			growShrinkLogo()
		});

		$('.toggler').click(function() {
		$('.outer').toggleClass('show-inner');
		});   
    </script>
</body>
</html>