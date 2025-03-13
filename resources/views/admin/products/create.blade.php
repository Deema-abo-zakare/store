@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h4 class="text-center text-dark"><i class="fas fa-box"></i> إضافة منتج جديد</h4>
        <form action="{{ url('products/store') }}" method="post" class="mt-3">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label"><i class="fas fa-tag"></i> اسم المنتج</label>
                <input type="text" class="form-control @error('name') is-invalid
                 @enderror " id="name" name="name" placeholder="أدخل اسم المنتج" >
            </div>
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <div class="mb-3">
                <label for="quantity" class="form-label"><i class="fas fa-sort-numeric-up"></i> الكمية</label>
                <input type="number" class="form-control  @error('quantity') is-invalid  @enderror"
                 id="quantity" name="quantity" placeholder="أدخل الكمية" min="1" >
            </div>
            @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="price" class="form-label"><i class="fas fa-dollar-sign"></i> السعر</label>
                <input type="number" class="form-control  @error('price') is-invalid  @enderror"
                id="price" name="price" placeholder="أدخل السعر" min="0" >
            </div>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <div class="mb-3">
                <label for="description" class="form-label"><i class="fas fa-align-left"></i> مواصفات المنتج</label>
                <textarea class="form-control @error('description') is-invalid  @enderror"
                 id="description" name="description" rows="3"
                 placeholder="أدخل المواصفات"></textarea>
            </div>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

            <div class="mb-3">
                <label for="category" class="form-label"><i class="fas fa-list"></i> الصنف</label>
                <select class="form-control  @error('category_id') is-invalid  @enderror" name="category_id" id="category" >
                    <option value="">اختر الصنف</option> <!-- لتجنب الخيار الفارغ -->
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">  {{ $category->name }} </option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-warning px-4"><i class="fas fa-save"></i> حفظ المنتج</button>
                <a href="{{ url('products') }}" class="btn btn-secondary px-4"><i class="fas fa-arrow-left"></i> إلغاء</a>
            </div>
        </form>
    </div>
@endsection
