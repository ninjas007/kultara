@forelse ($recipes as $recipe)
    <div class="card card-resep mb-2 fade-in">
        <div class="card-body">
            <div class="card-title title mb-2 h5 text-info" data-mdb-toggle="modal" data-mdb-target="#detailResep">
                {{ $recipe->nama_masakan }}
            </div>
            <p class="card-text text-muted">{{ substr($recipe->deskripsi, 0, 200) }} <a href="javascript:void" onclick="detailResep(`{{ $recipe->id }}`)">Read More</a></p>
            <div class="d-flex justify-content-between align-items-center" style="font-style: italic;">
                <div>
                    <small class="text-muted">Posted by {{ $recipe->created_by }}</small>
                </div>
                <div class="d-flex align-items-center">
                    {{-- <span class="me-2"><i class="fa fa-eye"></i> 20</span> --}}
                    {{-- <span><i class="fa fa-heart"></i> 100</span> --}}

                    Published on {{ $recipe->created_at->diffForHumans() }}
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="text-center mt-3">
        No Data
    </div>
@endforelse