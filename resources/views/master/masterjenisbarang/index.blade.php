@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Jenis Barang</h6>
      <button class="btn btn-primary mt-3"><a href="{{ route('master_jenisbarang.create') }}" class="text-white text-decoration-none">Tambah</a></button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Nama Jenis Barang</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datajenisbarang as $jenisbarang)
            <tr>
              <td>{{ $jenisbarang->mjb_jenis_barang }}</td>
              <td><a class="btn btn-warning" href="{{ route('master_jenisbarang.edit',$jenisbarang->id) }}">Edit</a>
                <form action="{{ route('master_jenisbarang.destroy',$jenisbarang->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $datajenisbarang->links() }}

      </div>
    </div>
  </div>
@endsection

