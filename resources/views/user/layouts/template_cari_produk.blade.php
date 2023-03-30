<div class="container-fluid facts my-0 p-5 mb-5">
    <h2 class="display-5 text-white text-center mb-2">Cari Peraturan</h2>
    <p class="fw-medium text-uppercase text-primary text-center mb-5">Cari peraturan disini</p>
    <form enctype="multipart/form-data" method="POST" action="{{ route('cari_produk') }}">
        @csrf
        <div class="row g-3">
            <div class="col-md-12">
                    <input type="search" class="form-control py-2 py-3" placeholder="Kata Kunci Produk" id="perihal" name="perihal" >
            </div>
            
            <div class="col-md-2 ">
                <label for="kategori_id" class="py-1 text-white">Jenis</label>
                    <select class="form-control py-2 py-2" name="kategori_id" id="kategori_id">
                    <option selected></option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }}> {{ $item->nama_kategori }} </option>
                    @endforeach
                    </select> 
            </div>

            <div class="col-md-2 ">
                <label for="nomor" class="py-1 text-white">Nomor</label>
                <input type="search" class="form-control py-2" id="nomor" name="nomor">
            </div>
            <div class="col-md-2 ">
                <label for="tahun" class="py-1 text-white">Tahun</label>
                <select class="form-control py-2" name="tahun" id="tahun">
                    <option selected></option>
                    <option value="0">2023</option>
                    <option value="1">2022</option>
                </select>
            </div>
            <div class="col-md-2 ">
                <label for="unit_kerja_id" class="py-1 text-white">Instansi</label>
                <select class="form-control py-2" name="unit_kerja_id" id="unit_kerja_id">
                    <option selected></option>  
                    @foreach ($unit_kerja as $data_unit_kerja)
                        <option value="{{ $data_unit_kerja->id }}" {{ old('unit_kerja') == $data_unit_kerja->id ? 'selected' : null }}> {{ $data_unit_kerja->name }} </option>
                    @endforeach
                </select> 
            </div>
            <div class="col-md-2 ">
                <label for="status_id" class="py-1 text-white">Status</label>
                    <select class="form-control py-2" name="status_id" id="status_id">
                        <option selected></option>
                        <option value="0">Berlaku</option>
                        <option value="1">Dicabut</option>
                    </select>           
            </div>
            <div class="col-md-2 text-center">
                <br>
                <button class="btn btn-primary py-3 px-3" type="submit">Cari Produk <i class="bi bi-search"></i></button>
            </div>
        </div>
    </form>
</div>