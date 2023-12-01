@extends('layouts.master')
@section('content')
    <h1>Danh sách học sinh</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Thêm mới</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Chuyên ngành</th>
                    <th scope="col">Mã sinh viên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($data as $item)
            <tbody>
                <tr class="">
                  <td>{{ $item->major->name }}</td>
                  <td>{{ $item->code }}</td>
                  <td>
                    <img src="{{ Storage::url($item->img) }}" width="100px" alt="">
                  </td>
                  <td>{{ $item->is_active ? 'yes' : 'no'}}</td>
                  <td>
                    <a href="{{ route('students.edit',$item) }}" class="btn btn-danger">Sửa</a>
                    <form action="{{ route('students.destroy',$item) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary" onclick="return confirm('bạn muốn xoá không')">Xoá</button>
                    </form>
                  </td>
                </tr>
            </tbody> 
            @endforeach
        </table>
        {{ $data->links() }}
    </div>
    
@endsection