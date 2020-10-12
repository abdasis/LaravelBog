@extends('layouts.app')
@section('meta_discription')
Saya Software Engineer berasal dari Indonesia, dengan bahasa pemrograman utama PHP suka bekerja dengan framework Laravel selain senang di bagian Backend juga senang dalam bagian Frontend, selain ngoding saya juga senang menulis artikel dari pengetahuan yang sudah saya pelajari. selain PHP ada Beberapa teknologi yang saya sukai seperti ReactJS, Pyhthon (Django)
@endsection
@section('meta_author')
    Abd. Asis
@endsection
@section('title')
    The Journey To a Great Programmer
@endsection
@section('content')
<section class="artikel">
    <div class="container-fluid">
        <div class="row">
            @include('includes.left-sidebar')
            <div class="col-md-6 mt-3">
                <div class="card shadow-md">
                    <div class="jumbotronn jumbotron-fluid">
                        <div class="container align-self-center py-4">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="container">
                                        <h1 class="display-5" style="font-family: 'Pacifico', cursive;">Selamat Datang</h1>
                                        <p class="lead">Berisikan tulisan tentang teknologi, perjalanan hidup dan materi belajar Al-Qur'an . Let's code!</p>
                                      </div>
                                </div>
                                <div class="col-md-5">
                                    <img src="{{ asset('/assets/images/programmer-gif.gif') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-title">
                    <h3 class="text-black">
                        {{ $title }}
                    </h3>
                </div>

                @if ($posts->count() < 1)
                    <div class="alert bg-soft-danger text-danger"><h4>Belum ada artikel</h4></div>
                @else
                    @foreach ($posts as $post)
                    <div class="card mb-2 shadow-md">
                        <div class="card-body pt-3 pb-0">
                            <h3 class="card-title mb-0 font-19"><a data-turbolinks="false" class="text-dark" href="{{ route('posts.show', ['artikel' => $post->slug]) }}">{{ $post->judul_artikel }}</a></h3>
                            <p class="font-12">
                                <i class="mdi mdi-tag mr-1"></i>{{ $post->kategori_artikel }} |
                                <i class="mdi mdi-calendar mr-1"></i>{{ date('d-m-Y', strtotime($post->created_at)) }}
                            </p>
                            <p class="font-12"></p>

                        </div>
                        <img class="card-img-top img-post-thumbnail" src="{{ asset('thumbnail-artikel/') .'/'.$post->thumbnail_artikel }}" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-text">
                                {!! Str::limit(strip_tags($post->isi_artikel), 250) !!}

                            </div>
                            <div class="card-text mt-2">
                                <a data-turbolinks="false" href="{{ route('posts.show', ['artikel' => $post->slug]) }}">
                                    <button class="btn btn-sm btn-light btn-block">Baca Selengkapnya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif

                <div class="text-center">
                    {{ $posts->links() }}
                </div>

            </div>

            @include('includes.right-sidebar')
        </div>
    </div>
</section>
@endsection
