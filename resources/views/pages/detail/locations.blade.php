@extends('layouts.app')

@section('title')
    LOCATION
@endsection

@section('css')
    <style>
        .star-icon {
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
        }

        .star-icon:hover,
        .star-icon.active {
            color: #FFD700;
        }
    </style>
@endsection

@section('content')
    <div class="body-content p-2 bg-white">
        <div class="row">
            <div class="col-12">
                <img src="https://cdn0-production-images-kly.akamaized.net/k-8T2_IXluILxIDDBwJvGuzAtkE=/0x120:3000x1811/1200x675/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3282059/original/075075700_1604028408-shutterstock_1788721670.jpg"
                    class="img-fluid" alt="gambar makanan">
            </div>
        </div>
        <div class="row" style="margin-bottom: 80px">
            <div class="col-12">
                <!-- Tabs navs -->
                @include('layouts.tabs')

                <!-- Tabs content -->
                <div class="tab-content" id="ex2-content">
                    <div class="tab-pane fade-in show active" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                        <div class="card fade-in mb-2">
                            <button class="form-control text-white add-review-button" style="background-color: #68c83e;"
                                data-mdb-toggle="modal" data-mdb-target="#addLocation"><i class="fa fa-map-marker"></i> Add
                                Location</button>
                        </div>
                        
                        <div id="result" class="text-center"></div>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>

    @include('modals.locations.location-add')
    @include('modals.locations.location-review')
    @include('modals.locations.location-add-review')
@endsection

@section('js')

@include('js.review')
<script type="text/javascript">
    function loadLocations() {
        $.ajax({
            url: `{{ url('location') }}`,
            dataType: 'JSON',
            beforeSend: function(){
                $('#result').text('Loading...')
            },
            success: function(response) {
                $('#result').text('')
                $('#result').after(response.data);
            }
        })
    }
    loadLocations();

    async function loadReviews(tempat_id) {
        $.ajax({
            url: `{{ url('location-review') }}`,
            datatType: 'JSON',
            data: {tempat_id},
            beforeSend: function(){
                $('#contentReviewPlace').html('<div class="text-center">Loading...</div>')
            },
            success: function(response) {
                $('#contentReviewPlace').html(response.data);
            }
        })
    }

    async function reviewTempat(tempat_id) {
        $('#reviewTempatModal').modal('show');

        await loadReviews(tempat_id);
        await addReview(tempat_id);
    }

    async function addReview(tempat_id) {
        $('#addReview').click(function() {
            $('#locationReviewAddModal').modal('show');
            $('#locationReviewAddModal #tempatId').val(tempat_id);
            $('#ratingValueLocationReview')
        })
    }
</script>
@endsection
