
{{-- <div style="position: fixed; bottom: 5%; left: 35%; right: 35%; z-index: 999">
    <button type="button" class="btn btn-dark btn-floating btn-lg">
        <i class="fab fa-plus fw-bold" style="f"></i>
      </button>
</div> --}}
<nav class="navbar-wrap">
    <div class="menubar-footer">
        <a href="{{ url('/home') }}">
            <button class="btn-menubar">
                <i class="fa fa-home" style="width: 24px; height: 24px; font-size: 20px"></i>
                <span class="text-muted" style="font-size: 10px">Home</span>
            </button>
        </a>
        <a href="{{ url('/contact') }}">
            <button class="btn-menubar">
                <i class="fa fa-phone" style="width: 24px; height: 24px; font-size: 20px"></i>
                <span class="text-muted" style="font-size: 10px">Contact</span>
            </button>
        </a>
        <a href="{{ url('/help') }}">
            <button class="btn-menubar">
                <i class="fa fa-comment" style="width: 24px; height: 24px; font-size: 20px"></i>
                <span class="text-muted" style="font-size: 10px">Help</span>
            </button>
        </a>
        <a href="{{ url('/about') }}">
            <button class="btn-menubar">
                <i class="fa fa-pencil " style="width: 24px; height: 24px; font-size: 20px"></i>
                <span class="text-muted" style="font-size: 10px">About</span>
            </button>
        </a>
    </div>
</nav>