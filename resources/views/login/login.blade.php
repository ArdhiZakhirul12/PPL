@extends('layout.home')
@section('container')
<div id="body" class="row justify-content-center">
  <img src="https://img.freepik.com/free-vector/hand-drawn-flat-illustration-power-plant_23-2149126627.jpg?w=826&t=st=1685856768~exp=1685857368~hmac=f16fcd5c34ed03dc5f3c59492e4bd0a7fb41f8e8adb94414cc44e48de57d6442" class="bg" alt="">
  <div class="col-md-4">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
      <i class="bi bi-check-circle-fill"> </i>{{ session('success') }}
    </div>
    @endif
    
    @if(session()->has('loginError'))
    <div class="alert alert-danger" role="alert">
      <i class="bi bi-exclamation-circle-fill"></i>  {{ session('loginError') }}
    </div>
    @endif
    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center mt-5" >Login</h1>
            <form class="justify-content-center" action="/login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>            
            </form>
            <a href="/" class="w-100 btn btn-lg btn-danger mt-2">Kembali<a>
            <small class="mt-2">Belum memiliki akun ? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrasi</a></small>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mau register sebagai apa nih?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row justify-content-center">
                    <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                      <a href="/i/register" type="button"  class="btn btn-outline-primary"><i class="bi bi-cash-coin"></i>   Investor</a>
                      <a href="/m/register" type="button"  class="btn btn-outline-primary"><i class="bi bi-shop"></i>   Mitra</a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </main> 
    </div>
</div>

<style>
  .bg{
    height: 88%;
    
    position: absolute;
    z-index: -3;
  }
</style>
@endsection