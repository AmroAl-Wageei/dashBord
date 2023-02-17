<link rel="stylesheet" href="{{ asset('CSS/navbar.css')}}">

<!--  Nav Bar  -->

<div class="second_nav"> 
    <div class="name"><a href="./index.html"> Dr . Abdalmajed </a>for dental clinic</div> 

    <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100012890643589"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/shandaqamro7/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://mail.google.com/mail/u/0/?pli=1#inbox"><i class="fa-sharp fa-solid fa-reply"></i></a>
    </div>
 </div>

 <div class="nav_main">

    <div class="logo">
        <p>Dr . Abdalmajed </p>
    </div>

    <nav>
        <ul>
            <li><a href="{{ route('soon') }}">Coming Soon</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="{{ route('artical') }}">Artical</a></li>
            <li><a href="{{ route('book') }}">Book</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
        </ul>
    </nav>
    <div class="register">
        <button id="SignUp"><a href="{{ route('logout') }}">Logout</a></button>
        <button id="SignUp"><a href="{{ route('register') }}">Sign Up</a></button>
        <button><a href="{{ route('login') }}">Log In</a></button>
    </div>

    
</div>

<!--  Nav Bar  -->




