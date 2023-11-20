@extends('layout.main')
@section('container')
<h1>Data Cabang Buku</h1>
<table  class="table">
<thead class="table-dark">
        <th>Id Cabang</th>
        <th>No Cabang</th>
        <th>Nama Cabang</th>
        <th>Jumlah Karyawan</th>
        <th>Tanggal Pembukaan</th>
        <th>Action</th>
    </thead>
      @foreach ($cabang2 as $cabang)
        <tbody>
            <td>{{$cabang["id"]}}</td>
            <td>{{$cabang["no_cabang"]}}</td>
            <td>{{$cabang["nama_cabang"]}}</td>
            <td>{{$cabang["jumlah_karyawan"]}}</td>
            <td>{{$cabang["tanggal_pembukaan"]}}</td>            
            <td>
                <a type="button" href="/cabang/detail/{{$cabang->id}}"  class="btn btn-primary"  style="color: white">Detail</a>
        </td>
        </tbody>
    @endforeach
</table>
@endsection