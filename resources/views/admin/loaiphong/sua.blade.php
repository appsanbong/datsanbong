  @extends('admin.layout.index')
 @section('content')

 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Phòng
                            <small>{{$loaiphong->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}} <br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/loaiphong/sua/{{$loaiphong->id}}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Loại Phòng</label>
                            <input class="form-control" name="ten" placeholder="Nhập Loài Phòng"  value="{{$loaiphong->loai}}"/>
                            </div>
                            <div class="form-group">
                                <label>Chi Tiết</label>
                            <input class="form-control" name="chitiet" placeholder="Nhập Chi Tiết" value="{{$loaiphong->mota}}"/>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection