@extends('admin.layouts.document')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Bookings</h3>
                <br>
                {{-- <a href="{{ route('admin.bookings.create') }} " class="btn btn-app">
                  <i class="fas fa-plus"></i> Add Us
                </a> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Car Image</th>
                            <th>Car Make</th>
                            <th>Car Model</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ ($booking->id ?? '')}} </td>
                                <td>
                                    <img width="100" src="{{ asset('storage/car_images/'.($booking->car->images[0]->name ?? 'noimage.jpg'))}} ">
                                </td>
                                <td> {{ ($booking->car->make ?? '') }} </td>
                                <td> {{ ($booking->car->model ?? '') }} </td>
                                <td> {{ ($booking->user->name ?? '') }} </td>
                                <td> {{ ($booking->user->email ?? '') }} </td>
                                <td> {{ ($booking->created_at ?? '') }} </td>
                                <td> {{ ($booking->updated_at ?? '') }} </td>
                                <td>
                                    <div class="btn-group">
                                        <a onclick="event.preventDefault()" href='{{ route('admin.bookings.destroy', $booking) }} ' type="button" class="btn btn-info delete">Delete</a>
                                    </div>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Booking ID</th>
                            <th>Car Image</th>
                            <th>Car Make</th>
                            <th>Car Model</th>
                            <th>User</th>
                            <th>Email</th>
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