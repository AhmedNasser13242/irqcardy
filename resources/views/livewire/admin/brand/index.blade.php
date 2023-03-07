<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        قائمة البراندات
                        <a href="{{url('admin/brands/create')}}" class="btn  btn-sm float-end"
                            style="background-color: black; color:white;">اضف
                            براند</a>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-boardered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>الأسم</th>
                            <th>سلج</th>
                            <th>الحالة</th>
                            <th>اجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($brands as $brand)
                        <tr>
                            <td>{{$brand['id']}}</td>
                            <td>{{$brand['name']}}</td>
                            <td>{{$brand['slug']}}</td>
                            <td>{{$brand->status == '1' ? 'معطل' : 'ظاهر'}}</td>
                            <td>
                                <a class="btn" style="color: white;background-color:gray;"
                                    href="{{url('admin/brands/'.$brand->id.'/edit')}}">تعديل</a>
                                <a href="#" wire:click="deleteBrand({{$brand['id']}})" wire:ignore.self
                                    class="btn btn-danger" style="color: white;">ازالة</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" No brands Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div>
                    {{$brands->links()}}

                </div>
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
