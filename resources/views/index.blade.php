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
<div class="jumbotron jumbotron-fluid" style="background:linear-gradient(
    rgba(0, 153, 255, 0.767),
    rgba(0, 153, 255, 0.979)
  ),  url('{{ asset('assets/images/cloud_computing.png') }}')">
    <div class="container pt-5 pb-3">
      <h1 class="display-4 font-weight-bolder text-white">Hai, Teman-teman!</h1>
      <p class="lead text-white">Yuk sharing tentang pemrograman bersama saya, jangan lupa kritik dan sarannya yaa di kolom komentar</p>
    </div>
  </div>
<section class="artikel m-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title text-black-50 font-weight-bolder">Artikel Terbaru</h3>
            </div>
        </div>
        <div class="row justify-content-start">
            @foreach ($posts as $post)
            <div class="col-md-4 col-sm-12">
                <div class="card shadow-md">
                    @if ($post->thumbnail_artikel  && file_exists(public_path('thumbnail-artikel') . '/' . $post->thumbnail_artikel))
                    <img class="card-img-top img-post-thumbnail-small" src="{{ asset('thumbnail-artikel/') .'/'.$post->thumbnail_artikel }}" alt="Card image cap">
                    @else
                    <img class="card-img-top img-post-thumbnail-small" src="{{ asset('assets/images/patient_forms_drib.jpg') }}" alt="Card image cap">
                    @endif
                    <div class="card-body">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <h4 class="card-title">{{ ucfirst($post->judul_artikel) }}</h4>
                        </a>
                        {{-- <p class="card-text">{!! Str::limit($post->isi_artikel, 250, '...') !!}</p> --}}
                        <p class="card-text font-11">
                            <span class="font-weight-semibold badge-soft-dark p-1 rounded"></small>{{ date('d-m-Y', strtotime($post->created_at)) }}</small></span>
                            <span class="font-weight-semibold badge-soft-danger p-1 rounded"></small> <i class="mdi mdi-fire"></i> {{ views($post)->count() }} Dilihat</small></span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
