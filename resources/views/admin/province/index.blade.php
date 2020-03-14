@extends('admin.layouts.main')
@section('title','Danh sách tỉnh')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Danh sách các tỉnh</h1>
        <a href="{{ url('admin/province/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        @if(session()->has('success'))
            <p style="color: green">Thêm mới thành công</p>
        @endif
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Tỉnh</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th></th>
            </tr>
            @foreach($provinces as $province)
                <tr>
                    <td>{{ $province->id }}</td>
                    <td>{{ $province->province }}</td>
                    <td>{{ $province->created_at }}</td>
                    <td>{{ $province->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </section>
    <!-- /.content -->
@endsection
