@extends('admin.layout.front',['main_page' => 'yes'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Car</h4>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.editCar', $car->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="car_name" class="form-label">Car Name</label>
                            <input type="text" class="form-control" id="car_name" name="car_name" value="{{ $car->car_name }}" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="car_description" class="form-label">Description</label>
                            <textarea class="form-control" id="car_description" name="car_description" rows="5" required>{{ $car->car_description }}</textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="car_price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="car_price" name="car_price" value="{{ $car->car_price }}" step="0.01" required>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Current Images</label>
                            <div class="row">
                                @foreach(explode(',', $car->car_image) as $image)
                                    <div class="col-md-3 mb-3">
                                        <img src="{{ asset($image) }}" class="img-thumbnail" alt="Car Image">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Upload New Images (Optional)</label>
                            <input type="file" class="form-control" id="images" name="images[]" multiple accept="image/*">
                            <small class="text-muted">Note: Uploading new images will replace existing ones</small>
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update Car</button>
                            <a href="{{ route('admin.gallery') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection