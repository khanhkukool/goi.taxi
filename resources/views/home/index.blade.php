@extends('layouts.main')
@section('title','Trang chủ')
@section('content')
    <!-- Main content -->
    <section class="content" id="list-hotline">
        <h2>Hà Nội</h2>
        <table class="table table-bordered table-striped">
            <tr>
                <td>Hãng taxi</td>
                <td>Hotline</td>
                <td>Địa chỉ</td>
            </tr>
            @foreach($hotlines as $hotline)
                <tr>
                    <td>{{ $hotline->name }}</td>
                    <td>{{ $hotline->hotline }}</td>
                    <td>{{ $hotline->address }}</td>
                </tr>
            @endforeach
        </table>
    </section>
    <!-- /.content -->
@endsection
