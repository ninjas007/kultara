@extends('layouts.app')

@section('title')
    HOME
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
                        <div class="" id="result"></div>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function searchWikipedia() {
            const resultElement = document.getElementById('result');
            const searchQuery = 'Rendang';
            const apiUrl = `https://id.wikipedia.org/w/api.php?action=query&format=json&prop=extracts&titles=${encodeURIComponent(
            searchQuery
        )}&exintro=1&origin=*`;

            resultElement.innerHTML = `<p class="text-center">Get data from wikipedia</p>`

            fetch(apiUrl)
                .then((response) => response.json())
                .then((data) => {
                    // Get the page ID from the response (assuming there is only one page returned)
                    const pageId = Object.keys(data.query.pages)[0];

                    // Extract the page information
                    const page = data.query.pages[pageId];
                    const title = page.title;
                    const extract = page.extract;

                    // Display the result on the webpage

                    resultElement.innerHTML = `
                    <div class="text-muted mb-3" style="font-style: italic">Sumber: wikipedia</div>
                    <h5 class="card-title">${title}</h5>
                    <p class="text-muted">${extract}</p>
                    <a href="https://id.wikipedia.org/wiki/Rendang" target="_blank">Lihat Selengkapnya</a>
                    <br>
                `;
                })
                .catch((error) => {
                    console.error('Error fetching data:', error);
                });
        }

        searchWikipedia()
    </script>
@endsection
