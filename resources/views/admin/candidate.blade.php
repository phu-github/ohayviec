@extends("admin.layouts.master")
@section("css")
<style>
    .card_body_test {
    max-width: 200px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css">
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
            <h1 class="m-0 text-dark">Quản lý hồ sơ</h1>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Quản lý hồ sơ</li>
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
          <h3 class="card-title">Danh sách hồ sơ</h3>

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
                          Tên ứng tuyển
                      </th>
                      <th style="width: 10%">
                          ngày rãnh
                      </th>
                      <th style="width: 10%" >
                          Nơi ở
                      </th>
                      <th style="width: 10%" >
                          Tuổi
                      </th>
                      <th style="width: 10%" >
                          Giới tinh
                      </th>
                      <th style="width: 20%">
                        <button type="button" class="btn btn-success float-right" style="margin-right: 5px;" data-toggle="modal" data-target="#modal_add_can">
                          <i class="fa fa-plus"></i> Thêm hồ sơ
                        </button>
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($candidateData as $key =>$item)
                      <tr>
                          <td>{{$key}}</td>
                          <td>
                            <a>{{$item->name}}</a>
                            <br>
                            <small>
                                <i class="fa fa-user-circle"></i>User: 
                                {{$item->user_id}}
                            </small>
                          </td>
                          <td>
                            <div class="card_body_test">  
                              {{$item->free_time}}
                            </div>
                          </td>
                          <td>
                            <div class="card_body_test">  
                              {{$item->address}}
                            </div>
                          </td>
                          <td>{{$item->old}}</td>
                          <td>{{$item->gender}}</td> 
                          <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm viewDetail" viewDetail="{{$item->id}}" href="#" data-toggle="modal" data-target="#modal_view_can">
                                <i class="fas fa-eye"></i>
                                Xem
                            </a>
                            <a class="btn btn-info btn-sm" id="{{$item->id}}" href="#" data-toggle="modal" data-target="#modal_edit_can">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa
                            </a>
                            <a class="btn btn-danger btn-sm deleteDetail" deleteDetail="{{$item->id}}" href="#" data-toggle="modal" data-target="#modal_delete_can">
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
            {{ $candidateData ->links() }}
          </ul>
        </div>
      </div>
      </div>
    </section>
<!-- iunclude _modal_candidate vào đây -->
    @include("admin.modal.modal_candidate")
@endsection
@push("scripts")
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
  <script src="{{asset('js/admin.js')}}"></script>
@endpush()
