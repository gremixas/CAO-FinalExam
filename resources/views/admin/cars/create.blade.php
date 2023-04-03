@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Car</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" class="form-control" maxlength="20" name="make" id="make" placeholder="Make">
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" maxlength="20" name="model" id="model" placeholder="Model">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" max="2500" name="year" id="year" placeholder="Year">
            </div>

            <div class="form-group">
                <label for="engine">Engine</label>
                <input type="text" class="form-control" maxlength="20" name="engine" id="engine" placeholder="Engine">
            </div>

            <div class="form-group">
                <label for="transmission">Transmission</label>
                <input type="text" class="form-control" maxlength="20" name="transmission" id="transmission" placeholder="Transmission">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" maxlength="999999" name="price" id="price" placeholder="Price">
            </div>

            <label for="images">Images</label>
            <div class="input-group">
                <div class="custom-file">
                    <input multiple type="file" class="custom-file-input" name="images[]" id="images" accept="image/*">
                    <label class="custom-file-label" for="images">Pasirinkti nuotrauką</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Įkelti</span>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection