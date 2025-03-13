@extends('layouts.admin')
@section('content')
    <div class="py-3">
        <form action="{{ url('categories/update/' . $category->id) }}" method="post">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="name" class="form-label">اسم الصنف</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn btn-danger"> حفظ التعديلات</button>
                <a href="{{ url('categories') }}" class="btn btn-secondary px-4"><i class="fas fa-arrow-left"></i> إلغاء</a>
            </div>
        </form>
    </div>
@endsection
