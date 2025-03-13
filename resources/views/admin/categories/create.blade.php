@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h4 class="text-center text-dark"><i class="fas fa-box"></i> إضافة صنف جديد</h4>
        <form action="{{ url('categories/store') }}" method="post" class="mt-3">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label"><i class="fas fa-tag"></i> اسم الصنف</label>
                <input type="text" class="form-control @error('name') is-invalid
                 @enderror"
                    id="name" name="name" placeholder="">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="text-center">
                <button type="submit" class="btn btn-warning px-4"><i class="fas fa-save"></i> حفظ الصنف</button>
                <a href="{{ url('categories') }}" class="btn btn-secondary px-4"><i class="fas fa-arrow-left"></i> إلغاء</a>
            </div>
        </form>
    </div>
@endsection
