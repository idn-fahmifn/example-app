@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('hello.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Example Text</label>
                            <input type="text" name="text" required='required' class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input type="date" name="tanggal" required="required" class="form-control">
                        </div>
                        <div class="mt-2 form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-2">
                <div class="card">
                    <div class="card-header">Data</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Example Text</th>
                                <th>Date</th>
                            </tr>
                            
                            @foreach('')
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
