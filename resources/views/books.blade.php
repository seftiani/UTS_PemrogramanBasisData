@extends('layouts.app2')
@section('navbar2')
    

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
          
           <a href="add-book" class="btn btn-secondary">Tambah Buku</a>

            
            <br>
            <br>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Judul Buku</th>
                        <th class="px-4 py-2">Tahun Terbit</th>
                        <th class="px-4 py-2">Stok</th>
                        <th class="px-4 py-2">Penulis</th>
                        <th class="px-4 py-2">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->judul }}</td>
                            <td class="border px-4 py-2">{{ $row->tahun }}</td>
                            <td class="border px-4 py-2">{{ $row->stok }}</td>
                            <td class="border px-4 py-2">{{ $row->penulis }}</td>
                            <td class="border px-4 py-2">{!! $row->genre !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection