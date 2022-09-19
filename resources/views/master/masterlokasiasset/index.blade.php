@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Lokasi Asset</h6>
      <button class="btn btn-primary mt-3"><a href="{{ route('master_lokasiasset.create') }}" class="text-white text-decoration-none">Tambah</a></button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Nama Lokasi Asset</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datalokasiasset as $lokasiasset)
            <tr>
              <td>{{ $lokasiasset->mla_lokasi_asset }}</td>
              <td><a class="btn btn-warning" href="{{ route('master_lokasiasset.edit',$lokasiasset->id) }}">Edit</a>
                <form action="{{ route('master_lokasiasset.destroy',$lokasiasset->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $datalokasiasset->links() }}

      </div>
    </div>
  </div>
@endsection

