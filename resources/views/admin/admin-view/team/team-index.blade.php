@extends('admin.layout.front',['main_page' => 'yes'])

@section('content')

<div class="content-wrapper">
    <!-- Header Section -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Team</h1>
                <a href="{{ route('admin.addTeam') }}" class="btn btn-primary">+ Add Member</a>
            </div>
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active">Spare Parts</li>
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

    <!-- Gallery Section -->
    <section class="content">
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $car)
                        <tr>
                            <td>
                                <img src="{{ asset($car->images) }}" alt="{{ $car->name }}" width="100" height="80">
                            </td>
                            <td>{{ $car->name }}</td>
                            <td>{{$car->designation }}</td>
                            <td>
                                <a href="{{ route('team-edit', $car->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.deleteTeam', $car->id) }}" method="POST" style="display:inline-block;">
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