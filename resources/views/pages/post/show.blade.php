@extends('layouts.app')

@section('title')
    {{ $post->judul_artikel }}
@endsection
@section('content')
<section class="artikel">
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('includes.left-sidebar')
            <div class="col-md-7 mt-3">
                <div class="card mb-2 shadow-md">
                    <div class="card-body pt-3 pb-0">
                        <h1 class="card-title mb-0 font-22">{{ $post->judul_artikel }} @auth <a href="{{ route('posts.edit', $post->slug) }}"><i class="mdi mdi-pencil-circle"></i></a> @endauth</h1>
                        <p class="font-12 font-weight-bolder ">
                            <span class="text-danger"><i class="mdi mdi-tag mr-1"></i>{{ $post->kategori_artikel }}</span> |
                            <span class="text-blue"><i class="mdi mdi-calendar mr-1"></i>{{ date('d-m-Y', strtotime($post->created_at)) }}</span> |
                            <span class="text-success"><i class="mdi mdi-account-circle mr-1"></i>Abd. Asis</span>
                        </p>
                    </div>
                    <img class="card-img-top img-post-thumbnail" src="{{ asset('thumbnail-artikel/') .'/'.$post->thumbnail_artikel }}" alt="Card image cap">
                    <img src="{{ asset('/assets/images/asis.jpg') }}" alt="" class="img-profil align-self-center rounded-circle">

                    <div class="card-body">
                        <div class="card-text">
                            <div class="content-artikel font-16">
                                {!! $post->isi_artikel !!}
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h4 class="text-center">Jika dirasa artikel ini bermanfaat yuk bagikan ke temanmu!</h4>
                            <!-- ShareThis BEGIN -->
                            <div class="sharethis-inline-share-buttons"></div>
                            <!-- ShareThis END -->
                    </div>
                </div>

                <div class="card shadow-md">
                    <div class="card-body">
                        <h3 class="font-22"><i class="mdi mdi-comment mr-1"></i>Berikan Komentar</h3>
                        <div class="alert alert-success">Berkomentarlah dengan kata-kata yang baik</div>
                        <div id="disqus_thread"></div>
                        <script>

                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://abd-asis-3.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/github-gist.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.8.0/highlightjs-line-numbers.min.js"></script>
<script>
hljs.initHighlightingOnLoad({
    singleLine: true
});
</script>
@endsection

@section('js')

@endsection
