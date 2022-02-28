@include('inc_admin.header')

<body>
    @include('inc_admin.navbar')
    <h2 class="text-center">Tambah Fasilitas Umum</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="fasilitas">Nama Fasilitas</label>
                                <input type="text" class="form-control" name="nama_fasilitas" id="fasilitas"
                                    placeholder="">
                                <small id="fasilitas" class="form-text text-muted">Masukan Nama
                                    Fasilitas</small>
                            </div>
                            <div class="mb-3">
                                <label for="ket">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="ket" placeholder="">
                                <small id="ket" class="form-text text-muted">Masukan
                                    Keterangan</small>
                            </div>
                            <div class="mb-3">
                                <label for="foto">Masukan Foto</label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@include('inc_admin.footer')
