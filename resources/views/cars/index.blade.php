@extends('layouts.master')

@section('content')
    <h1>Trang danh sách oto</h1>
    <div class="">
        <a href="{{ route('cars.create') }}" class="btn btn-primary">Thêm</a>
    </div>
    <div class="table-responsive">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Tên</th>
                    <th scope="col">Nhãn hàng</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($data as $item)
                <tbody>
                    <tr class="">
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>
                            <img src="{{ $item->img }}" alt="" width="100" height="100">
                        </td>
                        <td>{{ $item->is_active ? 'hoạt động' : 'không hoạt động' }}</td>
                        <td>{{ $item->describe }}</td>
                        <td>
                            <a href="{{ route('cars.edit', $item) }}" class="btn btn-danger">Sửa</a>
                            <br>
                            <form action="{{ route('cars.destroy', $item) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary" onclick="return confirm('bạn muốn xoá không')">Xoá</button>
                            </form>
                            <br>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        {{ $data->links() }}
    </div>
@endsection
