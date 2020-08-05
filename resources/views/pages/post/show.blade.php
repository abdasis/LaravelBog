@extends('layouts.app')

@section('content')
<section class="artikel">
    <div class="container-fluid">
        <div class="row justify-content-center">
            @include('includes.left-sidebar')
            <div class="col-md-7 mt-3">
                <div class="card mb-2 shadow-md">
                    <div class="card-body pt-3 pb-0">
                        <h1 class="card-title mb-0 font-22">{{ $post->judul_artikel }} @auth <a href="{{ route('posts.edit', ['artikel' => $post->slug]) }}"><i class="mdi mdi-pencil-circle"></i></a> @endauth</h1>
                        <p class="font-12 font-weight-bolder ">
                            <span class="text-danger"><i class="mdi mdi-tag mr-1"></i>{{ $post->kategori_artikel }}</span> |
                            <span class="text-blue"><i class="mdi mdi-calendar mr-1"></i>{{ date('d-m-Y', strtotime($post->created_at)) }}</span>
                        </p>
                    </div>
                    <img class="card-img-top img-post-thumbnail" src="{{ asset('thumbnail-artikel/') .'/'.$post->thumbnail_artikel }}" alt="Card image cap">
                    <img src="{{ asset('/assets/images/programmer-gif.gif') }}" alt="" class="img-profil align-self-center rounded-circle">

                    <div class="card-body">
                        <div class="card-text">
                            <div class="content-artikel font-16">
                                {!! $post->isi_artikel !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-md">
                    <div class="card-body">
                        <h3 class="font-22"><i class="mdi mdi-comment mr-1"></i>Berikan Komentar</h3>
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
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.8.0/highlightjs-line-numbers.min.js"></script>

<script>
hljs.initHighlightingOnLoad({
    singleLine: true
});
</script>
@endsection
