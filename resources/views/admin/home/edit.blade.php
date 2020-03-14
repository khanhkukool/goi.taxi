@extends('admin.layouts.main')
@section('title', 'Sửa hotline')
@section('content')
    <!-- Main content -->
    <section class="content">
        <h1>Thêm mới hotline</h1>
        <form method="post" action="{{ url('admin/update',['id' => $hotlines->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Hotline</label>
                <input type="text" name="hotline" class="form-control" value="{{ old('hotline') ? old('hotline') : $hotlines->hotline }}">
            </div>
            @if($errors->has('hotline'))
                <span class="errors">
                    {{ $errors->first('hotline') }}
                </span>
            @endif
            <div class="form-group">
                <label>Tên hãng</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') ? old('name') : $hotlines->name }}">
            </div>
            @if($errors->has('name'))
                <span class="errors">
                    {{ $errors->first('name') }}
                </span>
            @endif
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control" value="{{ old('address') ? old('address') : $hotlines->address }}">
            </div>
            @if($errors->has('address'))
                <span class="errors">
                    {{ $errors->first('address') }}
                </span>
            @endif
            <div class="form-group">
                <label>Latitude</label>
                <input type="text" name="latitude" class="form-control" value="{{ old('latitude') ? old('latitude') : $hotlines->latitude }}">
            </div>
            @if($errors->has('latitude'))
                <span class="errors">
                    {{ $errors->first('latitude') }}
                </span>
            @endif
            <div class="form-group">
                <label>Longitude</label>
                <input type="text" name="longitude" class="form-control" value="{{ old('longitude') ? old('longitude') : $hotlines->longitude }}">
            </div>
            @if($errors->has('longitude'))
                <span class="errors">
                    {{ $errors->first('longitude') }}
                </span>
            @endif
            <div class="form-group">
                <label>Tỉnh</label>
                <select name="province">
                    @foreach($provinces AS $province)
                        <option value="{{ $province->id }}">{{ $province->province }}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('province'))
                <span class="errors">
                    {{ $errors->first('province') }}
                </span>
            @endif
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" value="Lưu"/>
                <a class="btn btn-secondary" href="{{ url('/admin') }}">
                    Quay lại
                </a>
            </div>
        </form>

    </section>
    <!-- /.content -->
    </div>
@endsection
