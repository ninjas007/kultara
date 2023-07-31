@extends('layouts.app')

@section('title')
    RECIPE
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
                    <div class="tab-pane fade-in active show" id="ex3-tabs-2" role="tabpanel"
                        aria-labelledby="ex3-tab-2 show active">
                        <div class="card fade-in mb-2">
                            <button class="form-control text-white add-review-button"
                                style="background-color: #68c83e;" data-mdb-toggle="modal" data-mdb-target="#addResep"><i class="fa fa-list"></i> Add Recipe</button>
                        </div>
                        <div id="result" class="text-center"></div>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>

    @include('modals.recipes.recipe-add')

    @include('modals.recipes.recipe-detail')
@endsection

@section('js')
<script src="https://cdn.tiny.cloud/1/fioab1f7iscuty6onrm6ezlq795cnlvwjy81btkvag3piuoj/tinymce/6/tinymce.min.js"
referrerpolicy="origin"></script>
<script>
    const food_id = `{{ $food->id }}`;

    $('.card-resep').click(function() {
        $('#detailResep').modal('show');    
    })

    // tinymce
    function loadTinymce() {
        tinymce.init({
            selector: 'textarea.tiny',
            forced_root_block: 'div'
        });
    }
    loadTinymce();

    function loadRecipes() {
        $.ajax({
            url: `{{ url('recipes') }}`,
            dataType: 'JSON',
            data: {food_id},
            beforeSend: function(){
                $('#result').text('Loading...')
            },
            success: function(response) {
                $('#result').text('')
                $('#result').after(response.data);
            }
        })
    }
    loadRecipes();

    function detailResep(resep_id) {
        $.ajax({
            url: `{{ url('recipes/detail') }}`,
            dataType: 'JSON',
            data: {resep_id},
            beforeSend: function() {
                resetModal();
            },
            success: function(response) {
                $('#detailResep #result').html(response.data);
                $('#detailResep').modal('show');
            }
        })
    }

    function resetModal() {
        $('#detailResep #created_by').val('')
        $('#detailResep #email_by').val('')
        $('#detailResep #nama_masakan').val('')
        $('#detailResep #deskripsi').val('')
        $('#detailResep #alat_dan_bahan').val('')
        $('#detailResep #cara_memasak').val('')
    }
</script>
@endsection
