@include('inc_admin.header')

<body>
    @include('inc_admin.navbar')
    <h2 class="text-center">Data Fasilitas Umum</h2>
    <div class="container">
        {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
    </div>
    @endif --}}
    <div class="row">
        <a href="/addfasilitas" class="btn btn-primary mb-3">Tambah +</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Fasilitas</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $row)
                <tr>
                    <td scope="row">{{ $no++ }}</td>
                    <td>{{ $row->nama_fasilitas }}</td>
                    <td>{{ $row->keterangan }}</td>
                    <td>
                        <img src="{{ asset('fotofasilitas/'.$row->foto) }}" alt="" style="width: 100px;">
                    </td>
                    <td>
                        <a href="/tmpfasilitas/{{ $row->id }}" class="btn btn-success">Ubah</a>
                        <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"
                            data-nama="{{ $row->nama_fasilitas }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>
@include('inc_admin.footer')
