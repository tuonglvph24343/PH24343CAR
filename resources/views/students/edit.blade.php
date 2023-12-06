@extends('layouts.master')
@section('content')
    <h1>Trang sửa</h1>
    <a href="{{ route('students.index') }}" class="btn btn-primary">Quay lại</a>
    @if (\Session::has('msg'))
        <div class="alert alert-primary" role="alert">
            {{ \Session::get('msg') }}
        </div>
    @endif
    <form action="{{ route('students.update',$student) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Chuyên ngành</label>
            <select class="form-select form-select-lg" name="major_id" id="major_id">
                @foreach ($majors as $id => $name)
                    <option value="{{ $id }}" {{ $id == $student->major_id ? 'selected' : '' }}>
                        {{ $id }} - {{ $name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Mã sinh viên</label>
            <input type="text" class="form-control" name="code" id="code" aria-describedby="helpId"
                placeholder="" value="{{ $student->code }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="img" id="img" aria-describedby="helpId"
                placeholder="">
                <img src="{{ Storage::url($student->img) }}" width="100px" alt="">
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
                value="{{ \App\Models\Student::INACTIVE }}" @if ($student->is_active == \App\Models\Student::ACTIVE) checked @endif>
            <label class="form-check-label" for="" @if ($student->is_active == \App\Models\Student::INACTIVE) checked @endif>
                No
            </label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
