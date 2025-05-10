@extends('admin.layout.front',['main_page' => 'yes'])

@section('content')

<div class="content-wrapper">
    <!-- Header Section -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Team</h1>
                <a href="{{ route('admin.addCar') }}" class="btn btn-primary">+ Add Spare Part</a>
            </div>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active">Spare Parts</li>
            </ol>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="content">
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cars as $car)
                        <tr>
                            <td>
                                <img src="{{ asset(explode(',', $car->image)[0]) }}" alt="{{ $car->name }}" width="100" height="80">
                            </td>
                            <td>{{ $car->name }}</td>
                            <td>${{ number_format($car->price, 2) }}</td>
                            <td>
                                <a href="{{ route('gallery-edit', $car->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.deleteCar', $car->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this car?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

</div>

@endsection