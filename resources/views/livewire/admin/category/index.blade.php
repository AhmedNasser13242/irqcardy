<div>
    <div class="row">
        @csrf
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>قائمة التصنيفات
                        <a href="{{url('admin/category/create')}}" class="btn btn btn-sm float-end"
                            style="background-color: black; color:white;">اضف تصنيف</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <h3>ID</h3>
                                </th>
                                <th>
                                    <h3>الأسم</h3>
                                </th>
                                <th>
                                    <h3>الحالة</h3>
                                </th>
                                <th>
                                    <h3>اجراء</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category['id']}}</td>
                                <td>{{$category['name']}}</td>
                                <td>{{$category->status == '1' ? 'معطل' : 'ظاهر'}}</td>
                                <td>
                                    <a href="{{url('admin/category/'.$category->id.'/edit')}}" class="btn"
                                        style="color: white;background-color:gray;">تعديل</a>
                                    <a href="#" wire:click="deleteCategory({{$category->id}})" wire:ignore.self
                                        class="btn btn-danger" style="color: white;">ازالة</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{$categories->links()}}
                    </div>
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    </div>
</div>
@push('script')

<script>
window.addEventListener('close-modal', event => {
    $('#deleteModal').modal('hide');
})
</script>
@endpush
