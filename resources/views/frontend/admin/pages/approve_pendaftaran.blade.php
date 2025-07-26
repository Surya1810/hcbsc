    @extends('frontend.layouts.app')

    @section('title')
        Berita
    @endsection

    @push('css')
    @endpush

    @section('content')
        <!-- Heroes -->
        <section class="heroes">
            <div class="container pb-3">
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-10 mt-5">
                        <div class="card glass-card rounded-4">
                            <div class="card-body">
                                <h1 class="fs-3 fw-600 mb-3 text-center text-stroke-primary">Agenda Kegiatan</h1>

                                <table id="agendaTable" class="table table-striped table-bordered">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Telepon</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Detail</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pendaftaran as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->nik }}</td>
                                                <td>{{ $data->phone }}</td>
                                                <td>{{ $data->birth->format('d-m-Y') }}</td>
                                                <td>{{ $data->address }}</td>
                                                <td>{{ $data->pengcab }} - {{ $data->pengprov }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <form action="{{ route('anggota.approve', $data->id) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit"
                                                            class="btn btn-success btn-sm">Approve</button>
                                                    </form>

                                                    <form action="{{ route('anggota.reject', $data->id) }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#agendaTable').DataTable({
                    responsive: true,
                    autoWidth: false,
                    headerCallback: function(thead, data, start, end, display) {
                        $(thead).css('background-color', '#000');
                        $(thead).css('color', '#FFD700');
                    },
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Cari data...",
                        lengthMenu: "Tampilkan _MENU_ data",
                        zeroRecords: "Data tidak ditemukan",
                        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                        infoEmpty: "Tidak ada data",
                        infoFiltered: "(difilter dari _MAX_ total data)",
                        paginate: {
                            previous: "Sebelumnya",
                            next: "Berikutnya"
                        }
                    }
                });
            });
        </script>
    @endpush
