
<ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link text-muted {{ request()->segment(1) == 'home' || request()->segment(1) == 'menu' ? 'active' : '' }}" id="ex3-tab-1"
            href="{{ url('menu/'.$food->slug) }}" role="tab" aria-controls="ex3-tabs-1"
            aria-selected="true">INFO</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link text-muted {{ request()->segment(2) == 'recipes' ? 'active' : '' }}" id="ex3-tab-2"
            href="{{ url('detail/recipes/'.$food->slug) }}" role="tab" aria-controls="ex3-tabs-2"
            aria-selected="true">RECIPES</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link text-muted {{ request()->segment(2) == 'locations' ? 'active' : '' }}" id="ex3-tab-3"
            href="{{ url('detail/locations/'.$food->slug) }}" role="tab" aria-controls="ex3-tabs-3"
            aria-selected="true">LOCATIONS</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link text-muted {{ request()->segment(2) == 'reviews' ? 'active' : '' }}" id="ex3-tab-4"
            href="{{ url('detail/reviews/'.$food->slug) }}" role="tab" aria-controls="ex3-tabs-4"
            aria-selected="true">REVIEWS</a>
    </li>
</ul>