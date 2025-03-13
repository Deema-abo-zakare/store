@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <a href="{{ url('categories/create') }}" class="btn btn-warning">
            <i class="fas fa-plus"></i> إضافة صنف جديد
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered text-center shadow-sm">
            <thead class="bg-danger text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">اسم الصنف</th>
                    <th scope="col">الإجراءات</th>
                </tr>
            </thead>
            <tbody class="table-light">
                @foreach ($categories as $key => $category)
                    <tr class="align-middle">
                        <th scope="row" class="bg-secondary text-white">{{ $key + 1 }}</th>
                        <td class="fw-bold">{{ $category->name }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ url('categories/edit/'.$category->id) }}" class="btn btn-danger btn-sm px-3">
                                    <i class="fas fa-edit"></i> تعديل
                                </a>
                                <a href="{{ url('categories/delete/'.$category->id) }}" class="btn btn-warning btn-sm px-3"
                                    onclick="return confirm('هل أنت متأكد من الحذف؟');">
                                    <i class="fas fa-trash-alt"></i> حذف
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
