@extends('layouts.master')

@section('title')
    Stok Produk
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Stok</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table class="table table-stiped table-bordered table-stok">
                        <thead>
                            <th width="5%">No</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Merk</th>
                            <th>Stok</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

    @push('script')
        <script>
            let table;

            $(function() {
                table = $('.table-stok').DataTable({
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    autoWidth: false,
                    ajax: {
                        url: '{{ route('stok.data') }}',
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            searchable: false,
                            sortable: false
                        },
                        {
                            data: 'nama_kategori'
                        },
                        {
                            data: 'nama_produk'
                        },
                        {
                            data: 'merk'
                        },
                        {
                            data: 'stok'
                        },
                        {
                            data: 'aksi',
                            searchable: false,
                            sortable: false
                        },
                    ]
                })
            });
        </script>
    @endpush
