@extends('layout.main')
@section('container')
<h1>Data Buku</h1>
<table  class="table">
<thead class="table-dark">
        <th>No Buku</th>
        <th>Nama Buku</th>
        <th>Nama Author</th>
        <th>Sinopsis</th>
        <th>Tanggal Rilis</th>
        <th>Action</th>
    </thead>
      @foreach ($books as $book)
        <tbody>
            <td>{{$book["no_books"]}}</td>
            <td>{{$book["nama_books"]}}</td>
            <td>{{$book["nama_author"]}}</td>
            <td>{{$book["sinopsis"]}}</td>
            <td>{{$book["tanggal_rilis"]}}</td>
            
            <td>
                <a type="button" href="/book/detail/{{$book->id}}"  class="btn btn-primary"  style="color: white">Detail</a>
        </td>
        </tbody>
    @endforeach
</table>
@endsection