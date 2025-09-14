<aside class="admin-sidebar">
    <div class="admin-brand">
        <img src="{{ asset('Assets/img/backend-logo.png') }}" alt="বামযুকস লোগো" class="brand-logo">
        <span class="sidebar-text">বামযুকস</span>
    </div>
    <nav class="admin-nav">
        <a class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}"><i class="fa-solid fa-gauge"></i><span class="sidebar-text">ড্যাশবোর্ড</span></a>
        <a class="sidebar-link {{ request()->routeIs('notice.index') ? 'active' : '' }}" href="{{ route('notice.index') }}"><i class="fa-solid fa-bullhorn"></i><span class="sidebar-text">নোটিশ</span></a>

        <div class="sidebar-dropdown {{ request()->routeIs('central.committee') || request()->routeIs('committee.list.view') || request()->routeIs('branch.committee.list') || request()->routeIs('committee.create') ? 'open' : '' }}">
            <a href="#" class="sidebar-link sidebar-dropdown-toggle"><i class="fa-solid fa-sitemap"></i><span
                    class="sidebar-text">কমিটি ম্যানেজমেন্ট</span><i class="fa-solid fa-chevron-down ms-auto"></i></a>
            <div class="sidebar-submenu">
                <a class="sidebar-sublink {{ request()->routeIs('central.committee') ? 'active' : '' }}"
                    href="{{ route('central.committee') }}"><i class="fa-solid fa-users-gear"></i><span
                        class="sidebar-text">কেন্দ্রীয় কমিটি</span></a>
                <a class="sidebar-sublink {{ request()->routeIs('committee.list.view') || request()->routeIs('branch.committee.list') ? 'active' : '' }}"
                    href="{{ route('committee.list.view') }}"><i class="fa-solid fa-diagram-project"></i><span
                        class="sidebar-text">শাখা কমিটি</span></a>
                <a class="sidebar-sublink" href="{{ route('committee.create') }}"><i class="fa-solid fa-plus"></i><span class="sidebar-text">কমিটি
                        তৈরি</span></a>
            </div>
        </div>

        <div
            class="sidebar-dropdown {{ request()->routeIs('special.person') || request()->routeIs('life.time.person') || request()->routeIs('general.person') || request()->routeIs('person.create') ? 'open' : '' }}">
            <a href="#" class="sidebar-link sidebar-dropdown-toggle"><i class="fa-solid fa-users"></i><span
                    class="sidebar-text">সদস্য ম্যানেজমেন্ট</span><i class="fa-solid fa-chevron-down ms-auto"></i></a>
            <div class="sidebar-submenu">
                <a class="sidebar-sublink {{ request()->routeIs('special.person') ? 'active' : '' }}"
                    href="{{ route('special.person') }}"><i class="fa-solid fa-user-group"></i><span
                        class="sidebar-text">গুণীমান্য ব্যাক্তিবর্গ</span></a>
                <a class="sidebar-sublink {{ request()->routeIs('life.time.person') ? 'active' : '' }}"
                    href="{{ route('life.time.person') }}"><i class="fa-solid fa-crown"></i><span class="sidebar-text">আজীবন
                        সদস্য</span></a>
                <a class="sidebar-sublink {{ request()->routeIs('general.person') ? 'active' : '' }}"
                    href="{{ route('general.person') }}"><i class="fa-solid fa-user"></i><span class="sidebar-text">সাধারণ
                        সদস্য</span></a>
                <a class="sidebar-sublink {{ request()->routeIs('person.create') ? 'active' : '' }}"
                    href="{{ route('person.create') }}"><i class="fa-solid fa-user-plus"></i><span class="sidebar-text">সদস্য
                        তৈরি</span></a>
            </div>
        </div>

        <a class="sidebar-link {{ request()->routeIs('users.manage') ? 'active' : '' }}" href="{{ route('users.manage') }}"><i class="fas fa-user-circle"></i><span class="sidebar-text">অ্যাকাউন্ট ম্যানেজমেন্ট</span></a>
        <a class="sidebar-link {{ request()->routeIs('committeeActivities.index') ? 'active' : '' }}" href="{{ route('committeeActivities.index') }}"><i class="fas fa-calendar-check"></i><span class="sidebar-text">কমিটির কার্যক্রম</span></a>
        <a class="sidebar-link {{ request()->routeIs('finance.sheet') ? 'active' : '' }}" href="{{ route('finance.sheet') }}"><i class="fas fa-file-invoice-dollar"></i><span class="sidebar-text">আর্থিক হিসাবপত্র</span></a>
        <a class="sidebar-link {{ request()->routeIs('contact.unread') || request()->routeIs('contact.read') ? 'active' : '' }}" href="{{ route('contact.unread') }}"><i class="fas fa-comments"></i><span class="sidebar-text">যোগাযোগ তথ্য</span></a>

        <div class="sidebar-dropdown {{ request()->routeIs('services') || request()->routeIs('site.settings') ? 'open' : '' }}">
            <a href="#" class="sidebar-link sidebar-dropdown-toggle"><i class="fa-solid fa-screwdriver-wrench"></i><span
                    class="sidebar-text">ওয়েব সাইট সেটিংস</span><i class="fa-solid fa-chevron-down ms-auto"></i></a>
            <div class="sidebar-submenu">
                <a class="sidebar-sublink {{ request()->routeIs('services') ? 'active' : '' }}"
                    href="{{ route('services') }}"><i class="fa-solid fa-hand-holding-droplet"></i><span
                        class="sidebar-text">সেবা</span></a>
                <a class="sidebar-sublink {{ request()->routeIs('site.settings') ? 'active' : '' }}"
                    href="{{ route('site.settings') }}"><i class="fa-solid fa-gear"></i><span class="sidebar-text">সাইট
                        সেটিং</span></a>
            </div>
        </div>
    </nav>
</aside>
<main class="admin-content">