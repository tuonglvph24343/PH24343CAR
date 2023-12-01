@extends('layouts.master')
@section('content')
    <h1>Trang thêm mới</h1>
    <a href="{{ route('students.index') }}" class="btn btn-primary">Quay lại</a>
    @if (\Session::has('msg'))
        <div class="alert alert-primary" role="alert">
            {{ \Session::get('msg') }}
        </div>
    @endif
    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Chuyên ngành</label>
            <select class="form-select form-select-lg" name="major_id" id="major_id">
                @foreach ($majors as $id => $name)
                    <option value="{{ $id }}">{{ $id }} - {{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Mã sinh viên</label>
            <input type="text" class="form-control" name="code" id="code" aria-describedby="helpId"
                placeholder="">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="img" id="img" aria-describedby="helpId"
                placeholder="">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_active" id="isactive1"
                value="{{ \App\Models\Student::ACTIVE }}">
            <label class="form-check-label" for="">
                Yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="is_active" id="isactive2"
                value="{{ \App\Models\Student::INACTIVE }}">
            <label class="form-check-label" for="">
                No
            </label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
