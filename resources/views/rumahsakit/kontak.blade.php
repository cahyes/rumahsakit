@extends('master')

@section('judul_halaman')

@section('konten')

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-left: 25%;
        }

        th,
        td {
            background-color: chartreuse;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body style="text-align: center;">
    <p>Ini Adalah Halaman Kontak</p>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Cahya Ravi Imamuna</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>LIlin Ajeng Sasmia</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Raditya Adi Wiratama</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>M. Syahrul Munir</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Teddy Wintyas Nalindra</td>
        </tr>
    </table>
</body>
@endsection