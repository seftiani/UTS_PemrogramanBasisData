@extends('layouts.app2')
@section('navbar2')

<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}

        </div>
        @endif
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form method="POST" action="{{route('book.create')}}">
               @csrf
                <div class="form-group">
                    <label for="judul" >Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" />
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun Terbit</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Masukkan Tahun Terbit" />
                </div>

                <div class="form-group">
                    <label for="stok">Stok Buku</label>
                    <input type="text" name="stok" class="form-control" placeholder="Masukkan Tahun Stok Buku" />
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" name="penulis" class="form-control" placeholder="Masukkan Tahun Penulis" />
                </div>

                
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" class="form-control" placeholder="Masukkan Tahun Genre" />
                </div>

                
                <button class="btn btn-danger">
                    <a href="books">Back</a>
                </button>
                <button type="submit" class="btn btn-primary" >Save</button>
            </form>
        </div>
    </div>
</div>
@endsection