@extends('layouts.admin')

@section('content')
    <div class="py-5">
        <div class="container">
            <!-- زر إضافة منتج جديد -->
            <div class="text-center mb-4">
                <a href="{{ route('product_create') }}" class="btn btn-warning">
                    <i class="fas fa-plus"></i> إضافة منتج جديد
                </a>
            </div>

            <!-- جدول المنتجات -->
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-danger text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المنتج</th>
                        <th scope="col">الصنف</th>
                        <th scope="col">السعر</th>
                        <th scope="col">الكمية</th>
                        <th scope="col">الوصف</th>
                        <th scope="col">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($products as $key => $product)
                        <tr class="align-middle">
                            <th scope="row" class="bg-secondary text-white">{{ ++$key }}</th>
                            <td>{{ $product->name }}</td>
                            <td> {{ $product->category->name }}</td>
                            <td class="text-success fw-bold">{{ $product->price }}$</td>
                            <td class="text-primary">{{ $product->quantity }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ url('products/edit/' . $product->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-edit"></i> تعديل
                                    </a>
                                    <a href="{{ url('products/delete/' . $product->id) }}" class="btn btn-warning btn-sm"
                                        onclick="return confirm('هل أنت متأكد من الحذف؟');">
                                        <i class="fas fa-trash-alt"></i> حذف
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
