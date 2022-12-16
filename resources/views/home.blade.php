@extends('layout.layout')
@section('konten')
    <div class="master pt-5" id="master">
        <div class="container pt-3 d-flex position-relative justify-content-between align-items-center">
            <div class="card d-blok abs position-absolute" style="width: 400px;" style="z-index: 100;">
                <div class="card-body py-5">
                    <h2 class="card-title"><strong>Sarana dan Prasarana Yang Mendukung</strong></h2>
                    <p class="card-text mt-4"><strong>SMK Wikrama Bogor</strong> hadir untuk Lorem ipsum dolor sit amet. 
                        Ut quia error qui molestiae ipsa incidunt numquam.</p>
                </div>
            </div>
            <img src="{{ asset('img/beranda.png')}}" class="img-fluid ms-auto" >
        </div>
    </div>
@endsection