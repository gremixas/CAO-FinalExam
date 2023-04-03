@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <p class="font-weight-bold text-xl-center">Welcome, {{ Auth::user()->name }}.</p>
        <div class="">
            <img src="{{ asset('adminlte/dist/img/adminlte.svg') }}" alt="Logo Image" class="mw-100">
        </div>

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection