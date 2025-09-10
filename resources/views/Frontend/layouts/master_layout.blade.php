@include('frontend.partials.frontend_header')
@include('frontend.partials.frontend_nav')
@yield('content')
@include('frontend.partials.frontend_footer')

<!-- Warning Modal / Overlay -->
<!-- <div id="siteWarning" style="
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
">
    <div style="
        background: white;
        padding: 2rem;
        max-width: 500px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.3);
    ">
        <h3 style="color: #d9534f; margin-bottom: 1rem;">⚠️ ওয়েবসাইটটি নির্মাণাধীন।</h3>
        <p style="color: #333;"> দয়া করে পরে আবার ভিজিট করুন।</p>
        <button id="closeWarning" style="
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            border: none;
            background-color: #d9534f;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        ">বুঝেছি</button>
    </div>
</div>

<script>
    // Warning modal close
    document.getElementById('closeWarning').addEventListener('click', function() {
        document.getElementById('siteWarning').style.display = 'none';
    });
</script> -->
  {{-- <script>
    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
</script> --}}