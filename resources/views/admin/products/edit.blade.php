@extends('layouts.admin')

@section('content')
    <div class="py-3">
        <form action="{{ url('products/update/' . $product->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="name" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">الكمية</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">السعر</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">مواصفات</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">الصنف</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="{{ $category_name->id ?? '' }}"> {{ $category_name->name ?? 'لم يتم تحديد صنف' }}
                    </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn btn-danger"> حفظ التعديلات</button>
                <a href="{{ url('products') }}" class="btn btn-secondary px-4"><i class="fas fa-arrow-left"></i> إلغاء</a>
            </div>
        </form>
    </div>
@endsection
