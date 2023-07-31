<div class="card card-resep mb-2 fade-in">
    <div class="card-body">
        <div class="card-title title mb-2 h5 text-info" data-mdb-toggle="modal" data-mdb-target="#detailResep">
            {{ $recipe->nama_masakan }}
        </div>
        <p class="card-text text-muted">
            {{ $recipe->deskripsi }}
        </p>
        <div class="card-text text-muted">
            {!! json_decode($recipe->alat_dan_bahan) !!}
        </div>
        <div class="card-text text-muted">
            {!! json_decode($recipe->cara_memasak) !!}
        </div>
        <div class="d-flex justify-content-between align-items-center" style="font-style: italic;">
            <div>
                <small class="text-muted">Posted by {{ $recipe->created_by }}</small>
            </div>
            <div class="d-flex align-items-center">
                Published on {{ $recipe->created_at->diffForHumans() }}
            </div>
        </div>
    </div>
</div>