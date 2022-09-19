@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Asset</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>nama asset</th>
              <th>lokasi asset</th>
              <th>kode asset</th>
              <th>harga</th>
              <th>nilai residu</th>
              <th>umur manfaat</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($asset as $as)
            <tr>
              {{-- <td>{{ $as->masset->ma_nama_asset }}</td> --}}
              <td>{{ $as->as_nama_asset }}</td>
              <td>{{ $as->as_ma_id }}</td>
              <td>{{ $as->as_kode_asset }}</td>
              <td>{{ $as->as_harga }}</td>
              <td>{{ $as->as_nilai_residu }}</td>
              <td>{{ $as->as_umur_manfaat }}</td>
              <td>{{ $as->as_ma_id }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {{ $asset->links() }} --}}

      </div>
    </div>
  </div>
@endsection

