@extends('admin.layout.front', ['main_page' => 'yes'])

@section('content')

<div class="content-wrapper">
    <!-- Header Section -->
    <section class="content-header">
        <div class="container-fluid">
            <h1>Car Gallery</h1>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active">Car Gallery</li>
            </ol>
        </div>
    </section>

    <!-- Add Car Form Section -->
    <section class="content">
        <div class="container-fluid mb-5">
            <div class="card p-3">
                <h4>Add New Car</h4>
                <form action="{{ route('admin.saveCar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Car Name</label>
                            <input type="text" name="car_name" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Car Price</label>
                            <input type="number" step="0.01" name="car_price" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Images (you can select multiple)</label>
                            <input type="file" name="images[]" class="form-control" multiple required>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Description</label>
                            <textarea name="car_description" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-success">Save Car</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="container-fluid">
            <div class="row">
                @foreach ($cars as $car)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset(explode(',', $car->car_image)[0]) }}" class="card-img-top" alt="{{ $car->car_name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $car->car_name }}</h5>
                                <p class="card-text">${{ number_format($car->car_price, 2) }}</p>
                                <a href="{{ route('admin.editCar', $car->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.deleteCar', $car->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

@endsection
