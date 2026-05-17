@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')

<h1 class="mb-4">Detail Anggota</h1>

<div class="card">

    <div class="card-header bg-primary text-white">
        {{ $anggota['nama'] }}
    </div>

    <div class="card-body">

        <table class="table">

            <tr>
                <th>Kode Anggota</th>
                <td>{{ $anggota['kode'] }}</td>
            </tr>

            <tr>
                <th>Nama Lengkap</th>
                <td>{{ $anggota['nama'] }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $anggota['email'] }}</td>
            </tr>

            <tr>
                <th>Telepon</th>
                <td>{{ $anggota['telepon'] }}</td>
            </tr>

            <tr>
                <th>Alamat</th>
                <td>{{ $anggota['alamat'] }}</td>
            </tr>

            <tr>
                <th>Status</th>

                <td>
                    @if ($anggota['status'] == 'Aktif')
                        <span class="badge bg-success">
                            Aktif
                        </span>
                    @else
                        <span class="badge bg-danger">
                            Nonaktif
                        </span>
                    @endif
                </td>
            </tr>

        </table>

        <a href="/anggota" class="btn btn-secondary">
            Kembali
        </a>

    </div>

</div>

@endsection