@extends('layouts.master')
@section('content')
    <h1>Trang thêm</h1>
    @if (\Session::has('msg'))
        <div class="alert alert-primary" role="alert">
            {{ \Session::get('msg') }}
        </div>
    @endif
    <div class="">
        <a href="{{ route('cars.index') }}" class="btn btn-primary">Thoát</a>
    </div>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                placeholder="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Nhãn hàng</label>
            <input type="text" class="form-control" name="brand" id="brand" aria-describedby="helpId"
                placeholder="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="img" id="img" aria-describedby="helpId"
                placeholder="">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_active" id="is-active1"
                value="{{ \App\Models\Car::ACTIVE }}">
            <label class="form-check-label" for="">
                Hoạt động
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_active" id="is-active2"
                value="{{ \App\Models\Car::INACTIVE }}">
            <label class="form-check-label" for="">
                Không hoạt động
            </label>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Mô tả</label>
            <textarea class="form-control" name="describe" id="describe" rows="3"></textarea>
        </div>

        <div class="text-center">

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
