@extends('admin.layouts.main')
@section('title','Danh sách hotline')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Danh sách hotline</h1>
        <a href="{{ url('admin/create') }}" class="btn btn-primary">
            Thêm mới
        </a>
        <select class="province" id="province-id">
            @foreach($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->province }}</option>
            @endforeach
        </select>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#province-id").change(function (event) {
                    //sử dụng đối tượng this thay thế cho $('#province') để lấy được ra giá trị của option đang được chọn
                    var province_id = $(this).val();
                    // gọi ajax
                    $.ajax({
                        url: '{{ url('admin/getProvince') }}',
                        method: 'GET',
                        data: {
                            //nhớ phải truyền lên category id khi gọi sự kiện change
                            province_id: province_id
                        },
                        success: function (data) {
                            $('#hotline-province').html(data);
                        }
                    });
                })
            });
        </script>
        <div id="hotline-province">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Hotline</th>
                    <th>Hãng taxi</th>
                    <th>Địa chỉ</th>
                    <th>Tỉnh</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th></th>
                </tr>
                @foreach($hotlines as $hotline)
                    <tr>
                        <td>{{ $hotline->id }}</td>
                        <td>{{ $hotline->hotline }}</td>
                        <td>{{ $hotline->name }}</td>
                        <td>{{ $hotline->address }}</td>
                        <td>{{ $hotline->province }}</td>
                        <td>{{ $hotline->created_at }}</td>
                        <td>{{ $hotline->updated_at }}</td>
                        <td>
                            <a href="{{ url('admin/edit/'.$hotline->id) }}">
                                <span>Chỉnh sửa</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
    <!-- /.content -->
@endsection
