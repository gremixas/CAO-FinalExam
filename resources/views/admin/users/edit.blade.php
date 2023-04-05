@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit User [{{ ($user->name ?? '') }} {{ ($user->email ?? '') }}][{{ ($user->id ?? '') }}]</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ ($user->id ?? '') }}">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ ($user->name ?? '') }}" id="name" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ ($user->email ?? '') }}" id="email" placeholder="Email">
            </div>
            
            <label for="is_admin">Admin rights</label>
            <div class="form-group">
                <input type="hidden" name="is_admin" value="0">
                <input type="checkbox" name="is_admin" value="1" data-bootstrap-switch="" {{ ($user->is_admin ? 'checked' : '') }}>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
