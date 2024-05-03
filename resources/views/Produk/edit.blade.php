@extends('Layouts.app')

@section('content')


    <!-- KERANJANG -->
    <div class="container">
    <form action="{{ route('Barang.update') }}" method="POST" class="form-group bg p-5 mt-5 mb-3 rounded">
        @csrf
        @method('PUT')
        <h2 class="text-center "> Edit Barang</h2>
        <div class="mb-3">
            <label for="namaProduk" class="form-label mt-4 fw-semibold">Nama Produk</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="namaProduk" value="{{ old('nama') }}" aria-describedby="emailHelp">
            @error('nama')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fotoProduk" class="form-label mt-4 fw-semibold"> Foto Produk</label>
            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="fotoProduk" value="{{ old('foto') }}" aria-describedby="emailHelp">
            @error('foto')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="hargaProduk" class="form-label fw-semibold "> Harga Barang</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="hargaProduk" value="{{ old('harga') }}">
            @error('harga')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="activities">Kategori Produk</label>
          <select name="#" id="activities" class="form-control">

              {{-- @foreach ($kategoris as $Kategori )
              <option value="{{ $kategoris->id }}" {{ old('kategoris')==$kategoris->id ?'selected':"" }}>{{ $kategoris->nama }}</option>
              @endforeach --}}

            </select>
        </div>
        <div class=" mb-3">
            <label for="descProduk">Deskripsi</label>
            <input class="form-control @error('desc') is-invalid @enderror" placeholder="Leave a comment here" id="descProduk" value="{{ old('desc') }}" style="height: 100px">
            @error('desc')
            <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('Barang.index') }}"
                class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle
                me-2"></i> Back</a>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-dark btn-lg mt-3">
                    <i class="bi-check-circle me-2"></i> Save</button>
            </div>
    </form>
</div>

@endsection





