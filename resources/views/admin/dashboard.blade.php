@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Tempelkan isi main content dari template Anda di sini -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Dashboard</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('index') }}">Home</a></li>
                <li class="breadcrumb-item">Dashboard</li>
            </ul>
        </div>
        <!-- ... lanjutkan isi konten ... -->
    </div>
    <!-- Seluruh isi main content -->
@endsection