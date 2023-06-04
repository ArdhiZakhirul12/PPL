@extends('mitra.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Selamat datang, {{ $user->name }}</h1>
  
</div>


<section class="border-bottom pb-4 mb-5 mt-4">
  @foreach ($posts as $post)
  <div class="row gx-5 mt-5">
    <div class="col-md-6 mb-4">
      <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3"><a href="/a/profil/{{ $post->mitra->id }}">{{ $post->mitra->nama_usaha }}</a></span>
      <h4><strong>{{ $post->judul }}</strong></h4>
      <p class="text-muted mt-2">
        {{ $post->excerpt }}
      </p>
      <button type="button" class="btn btn-primary mt-5"><a href="/a/blog/{{ $post->id }}">Baca</a></button>
    </div>
  </div>
  @endforeach
</section>

@endsection()