@if(count($errors)>0)
@foreach($errors->all() as $errors)
    {{ $errors }}
@endforeach
@endif
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Foto Produk</td>
            @if(file_exists("storage/". $produk->foto))
            <img src="/storage/{{ $produk->foto }}" alt="" width="100" height="100">
            @endif
            <td><input type="file" name="foto" id="foto" value=""{{ $produk->foto }}></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nama" id="nama" value=""{{ $produk->nama }}></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td><input type="number" name="harga" id="harga" value=""{{ $produk->harga }}></td>
        </tr>
        <tr>
            <td colspan="2" align="right"><input type="submit" value="SIMPAN" name="simpan"></td>
        </tr>
    </table>
</form>
