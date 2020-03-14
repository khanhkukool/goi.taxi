@extends('admin.layouts.main')
@section('title', 'Thêm tỉnh')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm tỉnh mới</h1>
        <form method="post" action="{{ url('admin/province/store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tỉnh</label>
                <input type="text" name="province" class="form-control" value="{{ old('province') }}">
            </div>
            @if($errors->has('province'))
                <span class="errors" style="color: red">
                    {{ $errors->first('province') }}
                </span>
            @endif
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin/province') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
