@extends('layouts.app')

@section('title')
    REVIEW
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
                @include('image-food')
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
                                data-mdb-toggle="modal" data-mdb-target="#addReview"><i class="fa fa-star"></i> Add
                                Review</button>
                        </div>
                        <div id="result"></div>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>

    @include('modals.reviews.review-add')
@endsection

@section('js')
    
    @include('js.review')

    <script>
        const food_id = `{{ $food->id }}`;

        function loadRecipes() {
            $.ajax({
                url: `{{ url('review-foods') }}`,
                dataType: 'JSON',
                data: {food_id},
                beforeSend: function(){
                    $('#result').html('<div class="text-center">Loading...</div>')
                },
                success: function(response) {
                    $('#result').html('')
                    $('#result').after(response.data);
                }
            })
        }
        loadRecipes();
    </script>
@endsection
