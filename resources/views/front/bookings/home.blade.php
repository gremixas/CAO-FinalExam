@extends('front.layouts.document')

@section('content')
    <table id="bookings-table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Car Image</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Booked At</th>
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
                    <td> {{ ($booking->created_at ?? '') }} </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Booking ID</th>
                <th>Car Image</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Booked At</th>
            </tr>
        </tfoot>
    </table>
@endsection