@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success">Kategori Pengumuman</div>
                <div class="card-body">
                <td>
                   
                   <a href="{!! route('kategori_pengumuman.trash') !!}" class="btn btn-danger">Lihat Data Trash</a>
                   </td>
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $KategoriPengumuman as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>
                        <td>
                        <a href="{!! route('kategori_pengumuman.show',[$item->id]) !!}" class="btn btn-sm btn-primary">Detail</a>
                        
                        <a href="{!! route('kategori_pengumuman.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">Edit</a>
                        

                        {!! Form::open(['route'=>['kategori_pengumuman.destroy',$item->id],'method'=>'delete']) !!}

                        {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm ('Yakin Di Hapus')"]); !!}

                        {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                    <td>
                        <a href="{!! route('kategori_pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
                    </td>
            </div>
        </div>
    </div>
</div>
</div>
@endsection