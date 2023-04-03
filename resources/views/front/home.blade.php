@extends('front.layouts.document')

@section('content')
    <div class="car-list" id="car-list">
        @foreach ($cars as $car)
            <div class='car-card {{ isset($car->bookings->toArray()[0]) ? "booked" : "" }}' data-carid="{{ $car->id }}">
                <div class='car-img-container'>
                    <img class='car-img' src="{{ asset('storage/car_images/'.($car->images[0]->name ?? 'noimage.jpg'))}}">
                </div>
                <div class='car-row'>
                    <span class='car-make'>{{ $car->make }}</span>
                    <span class='car-model'>{{ $car->model }}</span>
                </div>
                <div class='car-row'>
                    <img class='car-icon' src="storage/front_assets/engine.svg">
                    <span class='car-engine'>{{ $car->engine }}</span>
                    </div>
                    <div class='car-row'>
                    <img class='car-icon' src="storage/front_assets/gears.svg">
                    <span class='car-transmission'>{{ $car->transmission }}</span>
                </div>
                <span class='car-year'>{{ $car->year }}</span>
                <span class='car-price'>{{ $car->price }}&euro;</span>
                <a href="{{ route('front.cars.show', $car) }}" class="car-card-link"></a>
            </div>
        @endforeach
    </div>
@endsection