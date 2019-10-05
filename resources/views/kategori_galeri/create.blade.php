@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info" button class="btn btn-primary">Tambah Kategori Galeri</div>
          
                <div class="card-body">
                    <form method="post" action="{!! route('kategori_galeri.store') !!}">
                        @include('kategori_galeri.form')
                    </form>
                </div>
            </div>
        </div>
     </div>
@endsection