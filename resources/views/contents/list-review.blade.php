@forelse ($reviews as $item)
    <div class="card mb-2 fade-in">
        <div class="card-body">
            <div class="d-flex mb-3 justify-content-between align-items-center">
                <div>
                    <p class="card-title mb-2"><i class="fa fa-user"></i> {{ $item->nama_reviewer }}</p>
                    <p class="card-text text-muted">"{{ $item->comment }}"</p>
                </div>
                <div class="d-flex align-items-center">
                    <span class="me-2"><i class="fas fa-star text-warning"></i></span>
                    <span>{{ $item->rating }}/5</span>
                </div>
            </div>
            <div class="text-muted" style="font-style: italic; margin-top: 5px; font-size: 10px">Published on {{ $item->created_at->diffForHumans() }}</div>
        </div>
    </div>    
@empty
    <div class="text-center mt-3">
        No Data
    </div>
@endforelse