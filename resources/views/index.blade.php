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
                <h3 class="section-title text-black-50">Artikel Terbaru</h3>
            </div>
        </div>
        <div class="row justify-content-start">
            @foreach ($posts as $post)
            <div class="col-md-4 col-sm-12">
                <div class="card shadow-md">
                    <img class="card-img-top" src="{{ $post->thumbnail_artikel == null ? asset('assets/images/patient_forms_drib.jpg') : asset('thumbnail-artikel/') .'/'.$post->thumbnail_artikel  }}" alt="Card image cap">
                    <div class="card-body">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            <h4 class="card-title">{{ ucfirst($post->judul_artikel) }}</h4>
                        </a>
                        {{-- <p class="card-text">{!! Str::limit($post->isi_artikel, 250, '...') !!}</p> --}}
                        <p class="card-text"><small class="text-muted">{{ date('d-m-Y', strtotime($post->created_at)) }}</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
