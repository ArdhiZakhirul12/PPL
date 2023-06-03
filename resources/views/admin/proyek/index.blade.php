@extends('mitra.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Grove Proyek Investasi</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <h3 class="h4 ms-2">Diproses</h3>

  <div class="table-responsive col-lg-9">
    @if (count($diproses)>0)
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Proyek</th>
          <th scope="col">Nominal</th>
          <th scope="col">Status</th>
          <th scope="col" style="width: 110px" >Detail</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($diproses as $proyek)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $proyek->nama_proyek }}</td>
          <td>{{ $proyek->nominal }}</td> 
          <td>{{ $proyek->status   }}</td> 
          <td>
            <a href="/a/proyek/{{ $proyek->id }}" class="badge bg-info"><span data-feather="eye"></span></a> 
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
    @else
    <div ><h5 class="text-muted">Tidak ada data</h5></div>
    @endif
  </div>
  
  <h3 class="h4 mt-5 ms-2">Rilis</h3>

  <div class="table-responsive col-lg-9">
    @if (count($rilis)>0)
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Proyek</th>
          <th scope="col">Nominal</th>
          <th scope="col">Status</th>
          <th scope="col" style="width: 110px" >Detail</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($rilis as $proyek)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $proyek->nama_proyek }}</td>
          <td>{{ $proyek->nominal }}</td> 
          <td>{{ $proyek->status   }}</td> 
          <td>
            <a href="/a/proyek/{{ $proyek->id }}" class="badge bg-info"><span data-feather="eye"></span></a> 
            {{-- <a href="/a/proyek/{{ $proyek->id }}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>  --}}
            {{-- <form action="/m/proyek/{{ $proyek->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('  anda yakin ingin menghapus?')"><span data-feather="trash"></span></button>
            </form> --}}
            {{-- <a href="" class="badge bg-danger"><span data-feather="trash"></span></a> --}}
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
    @else
    <div ><h5 class="text-muted">Tidak ada data</h5></div>
    @endif
  </div>

  <h3 class="h4 mt-5 ms-2">Selesai</h3>

  <div class="table-responsive col-lg-9">
    @if (count($selesai)>0)
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Proyek</th>
          <th scope="col">Nominal</th>
          <th scope="col">Status</th>
          <th scope="col" style="width: 110px" >Detail</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($selesai as $proyek)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $proyek->nama_proyek }}</td>
          <td>{{ $proyek->nominal }}</td> 
          <td>{{ $proyek->status   }}</td> 
          <td>
            <a href="/a/proyek/{{ $proyek->id }}" class="badge bg-info"><span data-feather="eye"></span></a> 
            {{-- <a href="/a/proyek/{{ $proyek->id }}/edit" class="badge bg-warning"><span data-feather="edit-2"></span></a>  --}}
            {{-- <form action="/m/proyek/{{ $proyek->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('  anda yakin ingin menghapus?')"><span data-feather="trash"></span></button>
            </form> --}}
            {{-- <a href="" class="badge bg-danger"><span data-feather="trash"></span></a> --}}
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
    @else
    <div ><h5 class="text-muted">Tidak ada data</h5></div>
    @endif
  </div>
@endsection()