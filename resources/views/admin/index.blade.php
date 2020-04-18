@extends('admin/layout/layout')
@section('title','DASHBOARD')
@section('laman','Dashboard')
@section('container')
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Total Alumni</p>
                  <h3 class="card-title">100
                    <small>Orang</small>
                  </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Pendin   jhg</p>
                  <h3 class="card-title">4 Orang</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Visitors</p>
                  <h3 class="card-title">75 Kali</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Sedang Online</p>
                  <h3 class="card-title">55 Orang</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Statistik Register</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> Meningkat Di Bulan ini.</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> updated 4 minutes ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <h4 class="card-title">Pending Status</h4>
                    <p class="card-category">Pendaftar Terbaru pada Bulan September, 2020</p>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">
                      <thead class="text-warning">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Dakota Rice</td>
                          <td>$36,738</td>
                          <td>Niger</td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm">
                              <i class="material-icons">assignment_ind</i> Details
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm">
                              <i class="material-icons">check_circle_outline</i> Terima
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm">
                              <i class="material-icons">close</i> Tolak
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Minerva Hooper</td>
                          <td>$23,789</td>
                          <td>Curaçao</td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm">
                              <i class="material-icons">assignment_ind</i> Details
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm">
                              <i class="material-icons">check_circle_outline</i> Terima
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm">
                              <i class="material-icons">close</i> Tolak
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Sage Rodriguez</td>
                          <td>$56,142</td>
                          <td>Netherlands</td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm">
                              <i class="material-icons">assignment_ind</i> Details
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm">
                              <i class="material-icons">check_circle_outline</i> Terima
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm">
                              <i class="material-icons">close</i> Tolak
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Philip Chaney</td>
                          <td>$38,735</td>
                          <td>Korea, South</td>
                          <td>
                            <button type="button" class="btn btn-info btn-sm">
                              <i class="material-icons">assignment_ind</i> Details
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-sm">
                              <i class="material-icons">check_circle_outline</i> Terima
                            </button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm">
                              <i class="material-icons">close</i> Tolak
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
@endsection
