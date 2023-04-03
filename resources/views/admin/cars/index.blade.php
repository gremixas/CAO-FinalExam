@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cars</h3>
                <br>
                <a href="{{ route('admin.cars.create') }} " class="btn btn-app">
                  <i class="fas fa-plus"></i> Add Car
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Engine</th>
                            <th>Transmission</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ ($car->id ?? '')}} </td>
                                <td>
                                    <img width="100" src="{{ asset('storage/car_images/'.($car->images[0]->name ?? 'noimage.jpg'))}} ">
                                </td>
                                <td> {{ ($car->make ?? '') }} </td>
                                <td> {{ ($car->model ?? '') }} </td>
                                <td> {{ ($car->year ?? '') }} </td>
                                <td> {{ ($car->engine ?? '') }} </td>
                                <td> {{ ($car->transmission ?? '') }} </td>
                                <td> {{ ($car->price ?? '') }} </td>
                                <td> {{ ($car->created_at ?? '') }} </td>
                                <td> {{ ($car->updated_at ?? '') }} </td>
                                <td>
                                    <div class="btn-group">
                                        <a href='{{ route('admin.cars.edit', $car) }} ' type="button" class="btn btn-info">Edit</a>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a onclick="event.preventDefault()" class="dropdown-item delete" href="{{ route('admin.cars.destroy', $car) }} ">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Engine</th>
                            <th>Transmission</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection