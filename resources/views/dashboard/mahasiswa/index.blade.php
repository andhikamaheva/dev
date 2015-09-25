@extends('dashboard.template.index')
@section('css')
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
      <!--external css-->
      <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('assets/data-tables/DT_bootstrap.css')}}" />
      <!-- Custom styles for this template -->
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
      <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

@stop
@section('js')
    <script src="{{asset('js/hmsiapps/controller/admin-mahasiswa.js')}}"></script>
    <script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('assets/data-tables/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/data-tables/DT_bootstrap.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}" ></script>
    <!--common script for all pages-->
    <script src="{{asset('js/common-scripts.js')}}"></script>

      <!--script for this page only-->
      <script src="{{asset('js/editable-table.js')}}"></script>


      <!-- END JAVASCRIPTS -->
      <script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
      </script>
@stop
@section('content')

<section id="main-content" ng-controller="mahasiswa">
    <section class="wrapper">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Mahasiswa Sistem Informasi
            </header>
             <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="btn-group">
                         <a  href="{{URL('dashboard/mahasiswa/create')}}">
                            <button class="btn green">
                                Add New <i class="icon-plus"></i>
                            </button>
                           </a>
                        </div>
                        <div class="btn-group">
                            <button  class="btn green">
                                <i class="icon-user"></i> Mahasiswa : <% totalItems %>
                            </button>
                        </div>
                        <div class="pull-right">
                             <label class="col-lg-12 control-label">
                              Pencarian :
                                 <input class="form-control medium" style="background:#fff;" ng-model="query"  placeholder="Cari Mahasiswa">
                                </label>
                        </div>
                        <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><%alert.msg%></alert>
                    </div>
                    <div class="space15" style="margin-bottom:5px;"></div>
                    <div class="table-responsive">
                    <table  class="table table-striped table-hover table-bordered" >
                     <thead>
                     <tr>
                         <th  width="50px;"ng-click="sortType='mhs_nim'; sortReverse = !sortReverse" class="sorting">
                          NIM
                           <span ng-show="sortType == 'mhs_nim' && !sortReverse" class="glyphicon glyphicon-chevron-down"></span>
                           <span ng-show="sortType == 'mhs_nim' && sortReverse"  class="glyphicon glyphicon-chevron-up"></span>
                          </th>
                          <th ng-click="sortType='mhs_nama'; sortReverse = !sortReverse" class="sorting">
                           Nama
                            <span ng-show="sortType == 'mhs_nama' && !sortReverse" class="glyphicon glyphicon-chevron-down"></span>
                            <span ng-show="sortType == 'mhs_nama' && sortReverse"  class="glyphicon glyphicon-chevron-up"></span>
                           </th>
                           <th ng-click="sortType='angkatan_tahun'; sortReverse = !sortReverse" class="sorting">
                            Angkatan
                             <span ng-show="sortType == 'angkatan_tahun' && !sortReverse" class="glyphicon glyphicon-chevron-down"></span>
                             <span ng-show="sortType == 'angkatan_tahun' && sortReverse"  class="glyphicon glyphicon-chevron-up"></span>
                            </th>
                            <th width="50px;" ng-click="sortType='prodi_nama'; sortReverse = !sortReverse" class="sorting">
                             Prodi
                              <span ng-show="sortType == 'prodi_nama' && !sortReverse" class="glyphicon glyphicon-chevron-down"></span>
                              <span ng-show="sortType == 'prodi_nama' && sortReverse"  class="glyphicon glyphicon-chevron-up"></span>
                             </th>
                             <th ng-click="sortType='mhs_email'; sortReverse = !sortReverse" class="sorting">
                              Email
                               <span ng-show="sortType == 'mhs_email' && !sortReverse" class="glyphicon glyphicon-chevron-down"></span>
                               <span ng-show="sortType == 'mhs_email' && sortReverse"  class="glyphicon glyphicon-chevron-up"></span>
                              </th>
                              <th ng-click="sortType='role_name'; sortReverse = !sortReverse" class="sorting">
                               Hak Akses
                                <span ng-show="sortType == 'role_name' && !sortReverse" class="glyphicon glyphicon-chevron-down"></span>
                                <span ng-show="sortType == 'role_name' && sortReverse"  class="glyphicon glyphicon-chevron-up"></span>
                               </th>
                               <th ng-click="sortType='status'; sortReverse = !sortReverse" class="sorting">
                                Status
                                 <span ng-show="sortType == 'status' && !sortReverse" class="glyphicon glyphicon-chevron-down"></span>
                                 <span ng-show="sortType == 'status' && sortReverse"  class="glyphicon glyphicon-chevron-up"></span>
                                </th>
                         <th>Action</th>

                     </tr>
                     </thead>
                      <tbody >
                     <tr ng-repeat="status in data|orderBy:sortType:sortReverse|filter:paginate">
                         <td><% status['mhs_nim'] %></td>
                         <td><% status['mhs_nama'] %></td>
                         <td><% status['angkatan_tahun'] %></td>
                         <td><% status['prodi_nama'] %></td>
                         <td><% status['mhs_email'] %></td>
                         <td class="center"><% status['role_name'] %></td>
                         <td><a href="#" ng-click="active(status['mhs_nim'],0)"><span title="Akun <% status['mhs_nama'] %> Aktif" ng-show="status['status'] == '1'" class="label label-success label-mini">AKTIF</span></a>
                          <a href="#" ng-click="active(status['mhs_nim'],1)"><span title="Akun <% status['mhs_nama'] %> Tidak Aktif" ng-show="status['status'] == '0'" class="label label-danger label-mini">NONAKTIF</span></td></a>
                         <td>
                          <button class="btn btn-success btn-xs" title="Lihat data <% status['mhs_nama'] %>" ng-click="view(status['mhs_nim'])"><i class="icon-user-md"></i></button>
                          <a href="{{URL('dashboard/mahasiswa')}}/<% status['mhs_nim'] %>/edit">
                           <button class="btn btn-primary btn-xs" title="Edit data <% status['mhs_nama'] %>" ng-show="status['mhs_nim'] != {{Auth::user()->mhs_nim}}" ><i class="icon-pencil"></i></button>
                          </a>
                           <button class="btn btn-danger btn-xs" title="Hapus data <% status['mhs_nama'] %>" ng-show="status['mhs_nim'] != {{Auth::user()->mhs_nim}}"  ng-click="delete(status['mhs_nim'])"><i class="icon-trash"></i></button>
                         </td>
                     </tr>
                        </tbody>
                    </table>
                   </div>
                    <pagination total-items="totalItems" ng-model="currentPage"
                                                         max-size="5" boundary-links="true"
                                                         items-per-page="numPerPage" class="pagination-sm">
                                             </pagination>

                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>


@stop
