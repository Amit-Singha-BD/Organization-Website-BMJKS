

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top" id="mainNavbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link service {{ Route::is('home') ? 'active' : '' }}" href="{{route('home')}}">হোম</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{route('about')}}">আমাদের সম্পর্কে</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Route::is('commitee') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                        কমিটি
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                        <li><a class="dropdown-item" href="{{route('commitee')}}">প্রধান কমিটি</a></li>
                        <li><a class="dropdown-item" href="#">বালিগাঁও শাখা</a></li>
                        <li><a class="dropdown-item" href="#">মাধবপুর শাখা</a></li>
                        <li><a class="dropdown-item" href="#">ঘোরামারা শাখা</a></li>
                        <li><a class="dropdown-item" href="#">তিলকপুর শাখা</a></li>
                        <li><a class="dropdown-item" href="#">ভানুবিল শাখা</a></li>
                        <li><a class="dropdown-item" href="#">তেতইগাও শাখা</a></li>
                        <li><a class="dropdown-item" href="#">ঢালুয়া শাখা</a></li>
                        <li><a class="dropdown-item" href="#">গোলেরহাওর শাখা</a></li>
                        <li><a class="dropdown-item" href="#">মাছিমপুর শাখা</a></li>
                        <li><a class="dropdown-item" href="#">ধনিটিলা শাখা</a></li>
                        <li><a class="dropdown-item" href="#">মাঝেরগাও শাখা</a></li>
                        <li><a class="dropdown-item" href="#">বিশগাও</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('frontend.notice') ? 'active' : '' }}" href="{{route('frontend.notice')}}">নোটিশ</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('frontend.service') ? 'active' : '' }}" href="{{route('frontend.service')}}">সেবা</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Route::is('lifetime.member') || Route::is('general.member') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                        ই-সেবা
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                        <li><a class="dropdown-item" href="{{route('lifetime.member')}}">আজীবন সদস্য আবেদন</a></li>
                        <li><a class="dropdown-item" href="{{route('general.member')}}">সাধারণ সদস্য আবেদন</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#news">সংবাদ</a>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('techteam') ? 'active' : '' }}" href="{{route('techteam')}}">টেক টিম</a>
                </li>
				
				<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Route::is('budget') || Route::is('comitee.activities') || Route::is('contact') || Route::is('bmjks.database.view') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                        অন্যান্য
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                        <li><a class="dropdown-item" href="{{route('budget')}}">বাজেট</a></li>
						<li><a class="dropdown-item" href="{{route('comitee.activities')}}">কার্যক্রম</a></li>
                        <li><a class="dropdown-item" href="{{route('contact')}}">যোগাযোগ</a></li>
                        <li><a class="dropdown-item" href="{{route('bmjks.database.view')}}">বামযুকস ডাটাবেস</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
  
 