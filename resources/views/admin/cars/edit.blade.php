@extends('admin.layouts.document')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Car [{{ ($car->make ?? '') }} {{ ($car->model ?? '') }}][{{ ($car->id ?? '') }}]</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('admin.cars.update', $car) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ ($car->id ?? '') }}">
        <div class="card-body">
            <div class="form-group">
                <label for="make">Make</label>
                <input type="text" class="form-control" maxlength="20" name="make" value="{{ ($car->make ?? '') }}" id="make" placeholder="Make">
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" maxlength="20" name="model" value="{{ ($car->model ?? '') }}" id="model" placeholder="Model">
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" max="2500" name="year" value="{{ ($car->year ?? '') }}" id="year" placeholder="Year">
            </div>

            <div class="form-group">
                <label for="engine">Engine</label>
                <input type="text" class="form-control" maxlength="20" name="engine" value="{{ ($car->engine ?? '') }}" id="engine" placeholder="Engine">
            </div>

            <div class="form-group">
                <label for="transmission">Transmission</label>
                <input type="text" class="form-control" maxlength="20" name="transmission" value="{{ ($car->transmission ?? '') }}" id="transmission" placeholder="Transmission">
            </div>


            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" max="999999" name="price" value="{{ ($car->price ?? '') }}" id="price" placeholder="Price">
            </div>

            <div class="form-group">
                <x-forms.image-input :images="$car->images" />
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
