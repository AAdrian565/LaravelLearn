@extends('layouts.web')
@section('title', 'home')
@section('content')
<div class="container">
  <h1>Hello</h1>
  <h2>Test</h2>
  <div class="row mb-3">

    <div class="col-6">
      <div class="card bg-dark p-1">
        <h2 class="card-title">Register</h2>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>


    <div class="col-6">
      <table class="table table-primary">
        <thread>
          <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
          </tr>
        </thread>
      </table>
    </div>
  </div>

  <button class="btn btn-primary">Hello World</button>
</div>
@endsection
