@forelse ($locations as $location)
    <div class="card mb-2 fade-in">
        <div class="card-body">
            @if ($location->google_maps)
                <div class="card-title mb-2 h4">
                    <a href="{{ $location->google_maps ?? 'javascript:void(0)' }}"
                        style="text-decoration: solid; font-size: 14px" target="_blank">{{ $location->nama_tempat }}</a>
                </div>
                <div class="card-text mb-2" style="padding-right: 5px">
                    <a href="{{ $location->google_maps ?? 'javascript:void(0)' }}" class="text-muted" target="_blank">
                        <i class="fa fa-map-marker"></i> {{ $location->alamat_tempat }}
                    </a>
                </div>
            @else
                <div class="card-title mb-2 h4 text-info">
                    {{ $location->nama_tempat }}
                </div>
                <div class="card-text mb-2" style="padding-right: 5px">
                    <i class="fa fa-map-marker"></i> {{ $location->alamat_tempat }}
                </div>
            @endif
            <div class="d-flex mb-1">
                <a href="javascript:void(0)" class="review-tempat" onclick="reviewTempat(`{{ $location->id }}`)">
                    <ul class="list-unstyled d-flex justify-content-left mb-0">
                       {!! $location->getAttrRatingStarHtmlAttribute() !!}
                    </ul>
                </a>
                <span>{{ $location->getAttrRatingPlaceAttribute() }}/5</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
                <div class="mt-2">
                    <small class="text-muted" style="font-style: italic">Posted by {{ $location->created_by }}</small>
                    <br>
                    <small class="text-muted" style="font-style: italic">Published on
                        {{ $location->created_at->diffForHumans() }}</small>
                </div>
                <div class="d-flex align-items-center mt-2">
                    @php
                        $shops = json_decode($location->shops);
                    @endphp

                    @foreach ($shops as $shop)
                        @if ($shop->name == 'whatsapp')
                            <span style="margin-left: 3px">
                                <a href="https://wa.me/{{ $shop->no_wa ?? '' }}" target="_blank">
                                    <img src="{{ asset('assets/images/' . $shop->file) }}" alt="{{ $shop->name }}"
                                        class="rounded-circle shadow-2-strong" width="25">
                                </a>
                            </span>
                        @else
                            <span style="margin-left: 3px">
                                <img src="{{ asset('assets/images/' . $shop->file) }}" alt="{{ $shop->name }}"
                                    class="rounded-circle shadow-2-strong" width="25">
                            </span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@empty
    <div class="text-center mt-3">
        No Data
    </div>
@endforelse
