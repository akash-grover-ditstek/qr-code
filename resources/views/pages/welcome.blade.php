@extends('layout.app')

@section('content')
    <div class="row">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        <div class="col-12">
            <form action="{{ route('generate') }}" method="get">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="">Enter Text</label>
                        <input type="text" name="text" placeholder="Your Text" class="form-control">
                    </div>
                    <div class="form-group col-12">
                        <input type="submit" value="Create" class="btn btn-success btn-pill d-block mx-auto">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
