@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-signin">
      <img class="mb-2 mx-auto d-block" src="../../img/f.png" alt="logo" width="72" height="68">
      <h1 class="h3 mb-3 fw-normal text-center">Login to Yunari Blog</h1>
      <form>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">New here? <a href="/register">Create an account.</a> </small>
    </main>
  </div>
</div>


@endsection