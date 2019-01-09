<html>
    <head>
        <meta charset="utf-8">
        <title>AUTO</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
<body>
<!-- Header -->
<div class="banner">
	@foreach($slides as $slide)
	    <img class="logo" src="{{ $slide->img }}">
	    <h1>{{ DateTime::createFromFormat("Y-m-d H:i:s", $slide->date)->format("d.m.") }}</h1>
	    <h5>{{ $slide->title }}</h5>
	    <div class="toggle">
	        <i class="fas fa-bars menu" aria-hidden="true"></i>
	    </div>
    @endforeach
</div>
<!-- Header End -->
<!-- Service Section -->
<section class="service">
    <h1>the corner garage for collector cars</h1>
        <div class="service-boxes space-between">
        	@foreach($services as $service)
            <a href="#" class="service-box">
                <img src="{{ $service->img }}" alt="modify">
                <h1>{{ $service->title }}</h1>
            </a>
            @endforeach
        </div>
            <div class="c-t">
                <img class="img-trees" src="{{ asset('img/trees.png') }}" alt="trees">
                <img class="img-car" src="{{ asset('img/car.png') }}" alt="car">
            </div>
</section>
<!-- Service Section End -->
<!-- Contact Section -->
<div class="contact">
    <iframe class="ifr" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5947.866528984757!2d44.76661979044676!3d41.8081980333462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40446e62e22d2541%3A0x241361d3d3444c62!2sKakha+Bendukidze+University+Campus!5e0!3m2!1sen!2sge!4v1545941055497" width="1595" height="893" frameborder="0" style="border:0"  allowfullscreen></iframe>
    <div class="contact-info">
        <h1 id="contact">contact information</h1>
        @if(isset($errors))
	        @foreach($errors->all() as $error)
	        	<p style="color: red;">{{ $error }}</p>
	        @endforeach
        @endif
        @if(isset($message))
        	<p style="color: red;">{{ $message }}</p>
        @endif
        @if(isset($success))
        	<p style="color: green;">{{ $success }}</p>
        @endif
        <form action="/subscriber/#contact" method="POST">
        	@csrf

        	<input type="text" name="name" required><br>
        	<input type="email" name="mail" required><br>
        	<input type="submit" name="submit" value="Send">
        </form>
        <h2>click to view</h2>
        <ul>
            <li><i class="fab fa-google-plus-g"></i></li>
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-twitter"></i></li>
        </ul>
    </div>
    <div>
        <h3>get in touch</h3>
    </div>
</div>
<!-- Contact Section End -->
<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
</body>
</html>