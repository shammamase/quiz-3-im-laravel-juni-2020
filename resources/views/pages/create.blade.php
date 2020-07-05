@extends('layouts.master')
@section('konten')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Artikel</h6>
  </div>
  <div class="card-body">
  	<form class="form-group" action="/artikels" method="POST">
  	@csrf
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul">
    <label for="isi">Isi</label>
    <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
    <label for="tag">Tag</label>
    <input type="text" class="form-control" name="tag">
    <input type="hidden" name="user_id" value="1">
    <input type="hidden" name="created_at" value="{{date('Y-m-d H:i:s')}}">
    <input type="hidden" name="updated_at" value="">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
@endsection