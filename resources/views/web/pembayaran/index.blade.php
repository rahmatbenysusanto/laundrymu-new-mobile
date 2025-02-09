@extends('web.layout')
@section('title', 'Pembayaran')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Daftar Pembayaran</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Laundry</a></li>
                    <li class="breadcrumb-item active">Daftar Pembayaran</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Daftar Pembayaran</h4>
                        <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahPembayaran">Tambah Pembayaran</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pembayaran as $index => $pel)
                                    <tr>
                                        <td>{{ $pembayaran->firstItem() + $index }}</td>
                                        <td>{{ $pel->nama }}</td>
                                        <td>
                                            <a class="btn btn-secondary btn-sm" onclick="editPembayaran('{{ $pel->id }}', '{{ $pel->nama }}')">
                                                <i class="fa-light fa-pen-to-square"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm ms-2" onclick="hapusPembayaran('{{ $pel->id }}')">
                                                <i class="fa-light fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-3">
                            @if ($pembayaran->hasPages())
                                <ul class="pagination">
                                    @if ($pembayaran->onFirstPage())
                                        <li class="disabled"><span>&laquo; Sebelumnya</span></li>
                                    @else
                                        <li><a href="{{ $pembayaran->previousPageUrl() }}" rel="prev">&laquo; Sebelumnya</a></li>
                                    @endif

                                    @foreach ($pembayaran->links()->elements as $element)
                                        @if (is_string($element))
                                            <li class="disabled"><span>{{ $element }}</span></li>
                                        @endif

                                        @if (is_array($element))
                                            @foreach ($element as $page => $url)
                                                @if ($page == $pembayaran->currentPage())
                                                    <li class="active"><span>{{ $page }}</span></li>
                                                @else
                                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach

                                    @if ($pembayaran->hasMorePages())
                                        <li><a href="{{ $pembayaran->nextPageUrl() }}" rel="next">Selanjutnya &raquo;</a></li>
                                    @else
                                        <li class="disabled"><span>Selanjutnya &raquo;</span></li>
                                    @endif
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambahPembayaran" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputModalLabel">Tambah Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('web.tambahPembayaran') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pembayaran" required>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary ms-2">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editPembayaran" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputModalLabel">Tambah Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="formEditPembayaran">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function editPembayaran(id, nama, type, harga) {
            document.getElementById('formEditPembayaran').innerHTML = `
                <form action="{{ route('web.updatePembayaran') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="${id}">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pembayaran" value="${nama}" required>
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary ms-2">Simpan</button>
                    </div>
                </form>
            `;

            $('#editPembayaran').modal('show');
        }

        function hapusPembayaran(id) {
            Swal.fire({
                icon: 'info',
                title: 'Apakah Kamu Yakin?',
                text: 'Untuk Menghapus Pembayaran ini?',
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: "Yakin",
                cancelButtonText: "Tidak",
            }).then((r) => {
                if (r.value) {
                    $.ajax({
                        url: '{{ route('web.hapusPembayaran') }}',
                        method: 'GET',
                        data: {
                            id: id
                        },
                        success: (res) => {
                            if (res.status) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: 'Hapus Pembayaran Berhasil!',
                                    showConfirmButton: true
                                }).then((r) => {
                                    window.location.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: 'Hapus Pembayaran Gagal!',
                                    showConfirmButton: true
                                });
                            }
                        }
                    });
                }
            });
        }
    </script>
@endsection
