<script src="/bt/js/jquery-3.6.0.min.js"></script>
<script src="/bt/js/sweetalert2.all.min.js"></script>
<script src="/bt/js/bootstrap.min.js"></script>
<script src="/bt/js/toastr.min.js"></script>
<script>
    $('.delete').click(function () {
        var fasilitasid = $(this).attr('data-id');
        var namafasilitas = $(this).attr('data-nama');
        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: 'Yang Anda Hapus (ID ' + fasilitasid + ' ' + namafasilitas +
                ')',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletedata/" + fasilitasid + ""
                Swal.fire(
                    'Data Berhasil Dihapus',
                    '',
                    'success'
                )
            }
        })
    });

</script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif

</script>

</html>
