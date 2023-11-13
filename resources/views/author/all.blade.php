@extends('layout.main')
@section('container')
<h1>Data Author</h1>
<table  class="table">
<thead class="table-dark">
        <th>No Author</th>
        <th>Nama Author</th>
        <th>Karya Buku</th>
        <th>Tanggal Masuk Perusahaan</th>
        <th>Action</th>
    </thead>
      @foreach ($authors as $author)
        <tbody>
            <td>{{$author["no_author"]}}</td>
            <td>{{$author["nama_author"]}}</td>
            <td>{{$author["karya_buku"]}}</td>
            <td>{{$author["tanggal_masuk_perusahaan"]}}</td>
            
            <td>
                <a type="button" href="/author/detail/{{$author->id}}"  class="btn btn-primary"  style="color: white">Detail</a>
        </td>
        </tbody>
    @endforeach
</table>
@endsection