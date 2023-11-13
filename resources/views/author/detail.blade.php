@extends('layout.main')
@section('container')
<div style="width: 1000px; height: 700px; left: 220px; top: 162px; position: absolute; background: rgb(255, 255, 255)"></div>
<div style="left: 328px; top: 254px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">No Author</div>
<div style="left: 328px; top: 369px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Nama Author</div>
<div style="left: 328px; top: 484px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Karya</div>
<div style="left: 328px; top: 599px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Tanggal Masuk</div>
<div style="left: 328px; top: 288px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$author->no_author}}</div>
<div style="left: 328px; top: 403px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$author->nama_author}}</div>
<div style="left: 328px; top: 518px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$author->karya_buku}}</div>
<div style="left: 328px; top: 633px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$author->tanggal_masuk_perusahaan}}</div>
<div style="width: 318px; height: 0px; left: 308px; top: 337px; position: absolute; border: 1px black solid"></div>
<div style="width: 318px; height: 0px; left: 308px; top: 452px; position: absolute; border: 1px black solid"></div>
<div style="width: 318px; height: 0px; left: 308px; top: 567px; position: absolute; border: 1px black solid"></div>
<div style="width: 318px; height: 0px; left: 308px; top: 682px; position: absolute; border: 1px black solid"></div>
<img style="width: 405px; height: 340px; left: 756px; top: 329px; position: absolute" src="{{$author->gambar_author}}" />


<a class="btn btn-danger"  style="color: white" style="text-decoration: none, color:black" href="/author/all">Back</a>
@endsection