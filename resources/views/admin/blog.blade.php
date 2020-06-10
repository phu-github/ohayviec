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
            <h1 class="m-0 text-dark">Quản lý blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Quản lý blog</li>
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
          <h3 class="card-title">Danh sách blog</h3>

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
                          Tên blog
                      </th>
                      <th style="width: 10%">
                          Nội dung blog 
                      </th>
                      <th style="width: 10%" >
                          XXX
                      </th>
                      <th style="width: 10%" >
                          XXX
                      </th>
                      <th style="width: 10%" >
                          XXX
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              AdminLTE v3
                          </a>
                          <br>
                          <small>
                              <i class="fa fa-user-circle"></i>
                              diemduyen@gmail.com
                          </small>
                      </td>
                      <td>
                          aaaaaaaaaaaa
                      </td>
                      <td >
                          cssssssssss
                      </td>
                      <td>
                          dssssssssss
                      </td>
                      <td >
                          esssssssssss
                      </td>
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
              </tbody>
          </table>
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">«</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </div>
        </div>
        <!-- /.card-body -->

      </div>
      </div>
    </section>
@endsection
@push("script")

@endpush()
