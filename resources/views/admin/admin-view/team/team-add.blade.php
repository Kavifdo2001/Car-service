@extends('admin.layout.front', ['main_page' => 'yes'])

@section('content')

<div class="content-wrapper">
    <!-- Header Section -->
    <section class="content-header">
        <div class="container-fluid">
            <h1>Add Team</h1>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            </ol>
        </div>
    </section>

    <!-- Add Car Form Section -->
    <section class="content">
        <div class="container-fluid mb-5">
            <div class="card p-3">
                <h4>Add New Member</h4>
                <form action="{{ route('admin.saveTeam') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Designation</label>
                            <input type="text"  name="designation" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Image</label>
                            <input type="file" name="images" class="form-control" required>
                        </div>
                  
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>

@endsection
