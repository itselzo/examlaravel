@extends('layout')

@section('content')
    <div class="container">
        <h1>Add New Trip</h1>

        <form method="POST" action="{{ route('trajet.store') }}">
            @csrf
            <div class="form-group">
                <label for="firstlocation">First Location</label>
                <input type="text" class="form-control" id="firstlocation" name="firstlocation" required>
            </div>

            <div class="form-group">
                <label for="secondlocation">Second Location</label>
                <input type="text" class="form-control" id="secondlocation" name="secondlocation" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Trip</button>
        </form>

        <hr>

        <h1>List of Trips</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>First Location</th>
                    <th>Second Location</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trips as $trip)
                    <tr>
                        <td>{{ $trip->firstlocation }}</td>
                        <td>{{ $trip->secondlocation }}</td>
                        <td>{{ $trip->price }}</td>
                        <td>
                            <a href="{{ route('trajet.edit', $trip->id) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action="{{ route('trajet.destroy', $trip->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
