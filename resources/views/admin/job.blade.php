@extends("admin.layouts.master")
@section("css")
  <link rel="stylesheet" href="{{ URL::asset('css/admin.css')}}"  type="text/css" />
@endsection
@section("content")
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="m-0 text-dark">Quản lý tin</h1>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Quản lý tin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
          <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách tin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          STT
                      </th>
                      <th style="width: 16%">
                          Tên công việc
                      </th>
                      <th style="width: 10%">
                          Địa chỉ 
                      </th>
                      <th style="width: 10%" >
                          Lương
                      </th>
                      <th style="width: 10%" >
                          Ngày đi làm
                      </th>
                      <th style="width: 10%" >
                          Số lượng
                      </th>
                      <th style="width: 20%">
                        <button type="button" class="btn btn-success float-right" style="margin-right: 5px;">
                          <i class="fa fa-plus"></i> Thêm tin
                        </button>
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($jobData as $key =>$item)
                      <tr>
                          <td>{{$key}}</td>
                          <td>
                            <a>{{$item->name_job}}</a>
                            <br>
                            <small>
                                <i class="fa fa-user-circle"></i>User: 
                                {{$item->user_id}}
                            </small>
                          </td>
                          <td>{{$item->name_area}}</td>
                          <td>{{$item->salary}}</td>
                          <td>{{$item->working_date}}</td>
                          <td>{{$item->number_of_candidate}}</td> 
                          <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Xóa
                            </a>
                          </td>
                      </tr> 
                  @endforeach 
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            {{ $jobData->links() }}
          </ul>
        </div>
      </div>
      </div>
    </section>
@endsection
@push("script")

@endpush()


