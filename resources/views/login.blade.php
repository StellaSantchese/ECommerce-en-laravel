@extends('master')
@section("content")
<div class="container-custum-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 ">
            <form action="login" method="POST">
                <div class="form-group">
                  @csrf
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                <button type="submit" class="btn btn-default">Login</button>
              </form>
        </div>
    </div>
</div>
@endsection