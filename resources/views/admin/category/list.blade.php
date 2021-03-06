@extends('layout.admin-master',['page_title'=>'Manager restaurant','active'=>'category'])
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h3>
                <label>Manage</label>
                <small>Restaurant</small>
            </h3>
        </div>
        <div class="col-2">
            <ol class="breadcrumb">
                <li><a href="/admin/home"><i class="fas fa-home"></i></i>Trang chủ</a></li>
                <li class="active">nhà hàng</li>
            </ol>
        </div>
    </div>
    <div class="row form-group" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">
            <a href="/admin/category/create" class="btn btn-primary">Tạo mới sản phẩm</a>
        </div>
    </div>
    <!-- col-md-12 -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Nhà hàng</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($list_obj as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            @if($item->avartar == null)
                                                <h6 style="background-color: #5cb85c; border-radius: 4px; padding: 4px; color: white; width: 70px">
                                                    Chưa update</h6>
                                                @else($item->avartar != null)
                                                <div class="card" style="width: 90px;height: 70px;background-image: url('/images/category/{{$item->avartar}}'); background-size: cover"> </div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/category/{{$item->id}}/edit" class="btn btn-simple btn-outline-primary">edit</a>
                                            <a href="{{$item->id}}" class="btn btn-simple btn-outline-danger btn-delete">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row float-right mr-3">
                                {{$list_obj->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> <!-- End Row -->
    <script>
        $('.btn-delete').click(function () {
            var cateId = $(this).attr('href');
            var user_confirm = confirm('Bạn có chắc muốn xoá sản phẩm này không?');
            if(user_confirm){
                $.ajax({
                    url: '/admin/category/' + cateId,
                    method:'DELETE',
                    data:{
                        '_token': "{{ csrf_token() }}"
                    },
                    success:function (response) {
                        alert('Xoá thành công');
                        window.location.reload();
                    },
                    error:function () {
                        alert('Có lỗi xảy ra, vui lòng thử lại.');
                    }
                });
            }
        });
    </script>
    <!-- /.row -->
@endsection
@section('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection