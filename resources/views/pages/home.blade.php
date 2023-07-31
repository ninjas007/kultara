@extends('layouts.app')

@section('title')
    HOME
@endsection

@section('css')
    <style>
        #search-addon:hover {
            cursor: pointer;
        }

        .pagination {
            margin-top: 10px;
            color: #ffffff;
        }

        ul.pagination .page-link {
            color: #ffffff;
            font-size: 14px;
        }

        ul.pagination li {
            margin: 0px 2px;
        }

        ul.pagination li.active span.page-link,
        ul.pagination li.disabled span.page-link {
            color: #333333;
            background-color: #eeeeee;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="body-content p-2 bg-white">
        <div class="row mb-5">
            <div class="col-12">
                <!-- Carousel wrapper -->
                <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>

                    <!-- Inner -->
                    <div class="carousel-inner">
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <img src="https://awsimages.detik.net.id/community/media/visual/2022/11/20/rijsttafel-indonesia-2.jpeg?w=1200" class="d-block w-100"
                                alt="Image 1" height="250px"/>
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.8; background-color: #333333">
                                <div style="font-size: 24px">KUL<span class="color-2" style="font-size: 24px">TARA</span></div>
                                <div style="font-size: 24px">IS</div>
                                <p style="font-size: 24px">KULINER <span class="color-2" style="font-size: 24px">NUSANTARA</span></p>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <img src="https://e1.pxfuel.com/desktop-wallpaper/758/101/desktop-wallpaper-medicadventurer%E2%84%A2-on-wonderful-indonesia-wonderful-indonesia.jpg" class="d-block w-100"
                                alt="Image 2" height="250px"/>
                            <div class="carousel-caption d-none d-md-block" style="opacity: 0.8; background-color: #333333">
                                <p style="font-size: 24px"><span class="color-2" style="font-size: 24px">Information On</span> Typical Food Throughout <span class="color-2" style="font-size: 24px">Indonesia</span></p>
                            </div>
                        </div>

                    </div>
                    <!-- Inner -->

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                        data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                        data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel wrapper -->
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="card fade-in mb-2">
                    <button class="form-control btn btn-dark text-white" data-mdb-toggle="modal"
                        data-mdb-target="#addProduct">
                        <i class="fa fa-plus"></i> Add Food or Drink</button>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search foods or drinks from indonesia"
                        aria-label="Search" id="search-value" aria-describedby="search-addon" value="{{ $filter ?? '' }}" onkeyup="filter()" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <small class="muted" style="font-style: italic; margin-top: 10px">Total items {{ $list_item->total() }}</small>
        </div>

        <div class="row" style="margin-bottom: 80px">
            <div class="col-12">
                @forelse ($list_item as $item)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $item->url_gambar }}" alt="{{ $item->nama }}" class="img-fluid rounded-start"
                                    height="50%" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{ url('menu') }}/{{ $item->slug }}" class="color-2">{{ $item->nama }} </a>
                                    </h5>
                                    <div class="card-text text-muted mb-2">
                                        {{ substr($item->keterangan_masakan, 0, 80) }}
                                        <a href="{{ url('menu') }}/{{ $item->slug }}">Read More</a>
                                    </div>
                                    <div class="card-text">
                                        <small class="text-muted">Published on
                                            {{ $item->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center mt-3">
                        No Data
                    </div>
                @endforelse

                @if (!empty($list_item))
                    <div class="card-footer my-2 bg-dark text-white text-center">
                        {{--  --}}
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                {{ $list_item->links() }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('modals.home.product-add')
@endsection


@section('js')
<script type="text/javascript">
    var filter = `{{ $filter ?? '0' }}`
    $('#search-addon').click(function() {
        let value = $('#search-value').val();
        let url = `{{ url()->current() }}`;

        if (value != '') {
            url += `?item=${value}`;
        }
        
        window.location.href = url;
    }); 

    function filter() {
        let element = $('#search-value');

        if (filter != '0' && element.val() == "") {
            window.location.href = `{{ url()->current() }}`
        }
    }
</script>
@endsection
