@extends('admin/layout/layout')
@section('title','ALUMNI')
@section('laman','Alumni')
@section('container')
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ml-auto">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                      <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 170px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">Browser</th><th class="sorting_desc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" aria-sort="descending" style="width: 194px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 143px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">CSS grade</th></tr>
                    </thead>
                    <tbody>
                    <tr role="row" class="odd">
                      <td class="">Misc</td>
                      <td>IE Mobile</td>
                      <td class="sorting_1">Windows Mobile 6</td>
                      <td class="">-</td>
                      <td class="">C</td>
                    </tr><tr role="row" class="even">
                      <td class="">Trident</td>
                      <td>Internet Explorer 7</td>
                      <td class="sorting_1">Win XP SP2+</td>
                      <td class="">7</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="odd">
                      <td class="">Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td class="sorting_1">Win XP</td>
                      <td class="">6</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="even">
                      <td class="">Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td class="sorting_1">Win 98SE+</td>
                      <td class="">1.7</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="odd">
                      <td class="">Gecko</td>
                      <td>Firefox 1.5</td>
                      <td class="sorting_1">Win 98+ / OSX.2+</td>
                      <td class="">1.8</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="even">
                      <td class="">Gecko</td>
                      <td>Firefox 2.0</td>
                      <td class="sorting_1">Win 98+ / OSX.2+</td>
                      <td class="">1.8</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="odd">
                      <td class="">Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td class="sorting_1">Win 98+ / OSX.2+</td>
                      <td class="">1.8</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="even">
                      <td class="">Gecko</td>
                      <td>Seamonkey 1.1</td>
                      <td class="sorting_1">Win 98+ / OSX.2+</td>
                      <td class="">1.8</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="odd">
                      <td class="">Gecko</td>
                      <td>Firefox 1.0</td>
                      <td class="sorting_1">Win 98+ / OSX.2+</td>
                      <td class="">1.7</td>
                      <td class="">A</td>
                    </tr><tr role="row" class="even">
                      <td class="">Gecko</td>
                      <td>Mozilla 1.8</td>
                      <td class="sorting_1">Win 98+ / OSX.1+</td>
                      <td class="">1.8</td>
                      <td class="">A</td>
                    </tr></tbody>
                    <tfoot>
                    <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                    </tfoot>
                  </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    </div>
</div>


</section>
<script>
    $(function () {
      $("#example3").DataTable();
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>



@endsection
