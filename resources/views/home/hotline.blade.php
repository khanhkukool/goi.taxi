<!-- Main content -->
<section class="content">
    <h2>{{ $province_id->province }}</h2>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Hãng taxi</th>
            <th>Hotline</th>
            <th>Địa chỉ</th>
        </tr>
        @foreach($hotlines as $hotline)
            <tr>
                <td>{{ $hotline->name }}</td>
                <td>{{ $hotline->hotline }}</td>
                <td>{{ $hotline->address }}</td>
            </tr>
        @endforeach
    </table>
    <div style="text-align: center">
    </div>
</section>
<!-- /.content -->
