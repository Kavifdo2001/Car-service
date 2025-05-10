@extends('admin.layout.front',['main_page' => 'yes'])

@section('content')

<div class="content-wrapper">
    <!-- Header Section -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Gallery</h1>
            </div>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ol>
        </div>
    </section>

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


    <section class="content">
        <div class="container-fluid mb-5">
            <div class="card p-3">
                <h4>Add Photo</h4>
                <form action="{{ route('admin.savePhoto') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                       
                        <div class="col-md-4 mb-3">
                            <label>Image</label>
                            <input type="file" name="images" class="form-control" required>
                        </div>
                
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>


    <!-- Gallery Section -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach(App\Models\Gallery::latest()->get() as $photo)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="{{ asset($photo->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Uploaded Image">
                            <div class="card-body text-center">
                                <form action="{{ route('admin.deletePhoto', $photo->id) }}" method="POST" onsubmit="return confirm('Delete this photo?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
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