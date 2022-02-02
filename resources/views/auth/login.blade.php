@extends('layouts.app')
@section('content')
<div class="card-body">
    <form method="POST" action="#">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">Text Example</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label class="form-label">Text Example</label>
                    <input type="text">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
