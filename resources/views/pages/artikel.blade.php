@extends('layouts.master')
@section('konten')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
  </div>
  <div class="card-body">
  <a href="{{'/artikel/create'}}"><button class="btn btn-info mb-4">Buat Artikel</button></a>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Slug</th>
          <th>Tag</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Anna</td>
          <td>Pitt</td>
          <td>Pitt</td>
          <td>Pitt</td>
          <td>Pitt</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal({
    title: 'Berhasil',
    text:  'Memasangkan script sweet alert',
    icon:  'success',
    confirmButtonText: 'Cool'
  });
</script>
@endpush
@endsection