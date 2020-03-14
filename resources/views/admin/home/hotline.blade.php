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
