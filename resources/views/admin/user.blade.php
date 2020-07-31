@extends("admin.layouts.master")
@section("css")

@endsection
@section("content")
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 class="m-0 text-dark">Quản lý tài khoản</h1>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Quản lý tài khoản</li>
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
          <h3 class="card-title">Danh sách tài khoản</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        @if(session('success'))
        <div class="alert alert-success notifi">{{session('success')}}</div>
        @endif
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          STT
                      </th>
                      <th style="width: 16%">
                          Tên user
                      </th>
                      <th style="width: 10%">
                          Loại Đối tác
                      </th>
                      <th style="width: 10%" >
                          Địa chỉ
                      </th>
                      <th style="width: 10%" >
                          Số điện thoại
                      </th>
                      <th style="width: 10%" >
                          Email
                      </th>
                      <th style="width: 20%">
                        <button type="button" class="btn btn-success float-right addUserBtn" data-toggle="modal" data-target="#modal_add_user" >
                        <i class="fa fa-plus"></i> 
                        Thêm tài khoản
                      </button>
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($userData as $key =>$item)
                  <tr>
                      <td>
                        {{$key}}
                      </td>
                      <td>
                          <a>
                              {{$item->name}}
                          </a>
                          <br>
                          <small>
                              <i class="fa fa-user-circle"></i>
                              
                          </small>
                      </td>
                      <td>
                          
                          {{$item->priority}}
                      </td>
                      <td >
                          {{$item->address}}
                      </td>
                      <td>
                          {{$item->phone}}
                      </td>
                      <td >
                          {{$item->email}}
                      </td>
                      <td class="project-actions text-right"> 
                          <a class="btn btn-primary btn-sm viewUserBtn" dataViewId="{{$item->id}}" href="#" data-toggle="modal" data-target="#modal_user">
                              <i class="fas fa-eye"></i>
                              Xem
                          </a>
                          <a class="btn btn-info btn-sm editUserBtn" attrEditIdUser="{{$item->id}}"  data-toggle="modal" data-target="#modal_user">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal_delete_user">
                              <i class="fas fa-trash">
                              </i>
                              Xóa
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
            {{ $userData ->links() }}
            </ul>
          </div>
        </div>
        <!-- /.card-body -->

      </div>
      </div>
    </section>
    {{-- modal --}}
@include("admin.modal.modal_user")
{{-- end modal --}}
@endsection
@push("scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
<script src="{{asset('js/admin.js')}}"></script>
@endpush()
