@extends('front.layouts.document')

@section('content')

<div class="car-booking" id="car-list">
    <br>
    <div class="booking-dialog">
        @if (Auth::user() && !Auth::user()?->is_admin && empty($car->bookings->toArray()[0]))
            <h2>Do you really wish to book this car?</h2>
            <br>
        @endif

        <div class='car-card {{ isset($car->bookings->toArray()[0]) ? "booked" : "" }}' data-carid="{{ $car->id }}">
            <div class='car-img-container'>
                <img class='car-img' src="{{ asset('storage/car_images/'.($car->images[0]->name ?? 'noimage.jpg'))}}">
            </div>
            <div class='car-row'>
                <span class='car-make'>{{ $car->make }}</span>
                <span class='car-model'>{{ $car->model }}</span>
            </div>
            <div class='car-row'>
                <img class='car-icon' src="../storage/front_assets/engine.svg">
                <span class='car-engine'>{{ $car->engine }}</span>
                </div>
                <div class='car-row'>
                <img class='car-icon' src="../storage/front_assets/gears.svg">
                <span class='car-transmission'>{{ $car->transmission }}</span>
            </div>
            <span class='car-year'>{{ $car->year }}</span>
            <span class='car-price'>{{ $car->price }}&euro;</span>
        </div>

        @if (Auth::user() && !Auth::user()?->is_admin && empty($car->bookings->toArray()[0]))
            <div class="car-booking" id="car-list">
                <br>
                <div class="booking-dialog">
                    <h2>Do you really wish to book this car?</h2>
                    <br>
                    <a href="{{ url('bookings/book') }}/{{ $car->id }}" class="button">Yes</a>
                    {{-- <form action="" method="get">
                        <input type="hidden" name="id" value="">
                        <button type="submit">Yes</button>
                    </form> --}}
                </div>
            </div>
        @endif
    </div>
</div>

@endsection