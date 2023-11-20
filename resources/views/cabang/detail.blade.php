@extends('layout.main')
@section('container')
<div style="width: 1000px; height: 700px; left: 220px; top: 162px; position: absolute; background: rgb(255, 255, 255)"></div>
<div style="left: 328px; top: 254px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">No Cabang</div>
<div style="left: 328px; top: 369px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Nama Cabang</div>
<div style="left: 328px; top: 484px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Alamat Cabang</div>
<div style="left: 328px; top: 599px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Jumlah Karyawan</div>
<div style="left: 328px; top: 709px; position: absolute; color: #828282; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Tanggal Pembukaan</div>
<div style="left: 328px; top: 288px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$cabang->no_cabang}}</div>
<div style="left: 328px; top: 403px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$cabang->nama_cabang}}</div>
<div style="left: 328px; top: 518px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$cabang->alamat_cabang}}</div>
<div style="left: 328px; top: 633px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word; max-width: 200px;">
    <p>{{$cabang->jumlah_karyawan}}</p>
  </div>
  
<div style="left: 328px; top: 738px; position: absolute; color: black; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">{{$cabang->tanggal_pembukaan}}</div>
<div style="width: 318px; height: 0px; left: 308px; top: 337px; position: absolute; border: 1px black solid"></div>
<div style="width: 318px; height: 0px; left: 308px; top: 452px; position: absolute; border: 1px black solid"></div>
<div style="width: 318px; height: 0px; left: 308px; top: 567px; position: absolute; border: 1px black solid"></div>
<div style="width: 318px; height: 0px; left: 308px; top: 685px; position: absolute; border: 1px black solid"></div>
<div style="width: 318px; height: 0px; left: 308px; top: 780px; position: absolute; border: 1px black solid"></div>




<a class="btn btn-danger"  style="color: white" style="text-decoration: none, color:black" href="/cabang/all">Back</a>
@endsection