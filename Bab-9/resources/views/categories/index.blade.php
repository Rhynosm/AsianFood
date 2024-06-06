@extends('layout.dashboard')
@section('content')
<h3>Categories</h3>
<button type="button" class="btn btn-tambah">
    <a href="/category/tambah" style="color: white; text-decoration: none;">Tambah Data</a>
</button>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" style="width: 20%">Region</th>
            <th>Categories</th>
            <th scope="col" style="width: 20%">Name</th>
            <th scope="col" style="width: 15%">Price</th>
            <th scope="col" style="width: 30%">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
    <tr>
      <td>{{ $category->region }}</td>
      <td>{{ $category->kategori }}</td>
      <td>{{ $category->deskripsi }}</td>
      <td>Rp. {{ number_format($category->harga) }}</td>
      <td>
        <a class='btn-edit' href="/category/edit/{{ $category->id_categories }}">Edit</a>
        |
        <a class='btn-delete' href="/category/hapus/{{ $category->id_categories }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
    </tbody>
</table>
@endsection