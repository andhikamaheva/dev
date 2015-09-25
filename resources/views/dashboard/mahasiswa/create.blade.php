@extends('dashboard.template.index')
@section('css')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
<!--external css-->
<link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/angular-block-ui.min.css') }}" >


<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-datepicker/css/datepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-timepicker/compiled/timepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-datetimepicker/css/datetimepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/jquery-multi-select/css/multi-select.css')}}" />
<link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
@stop
@section('js')
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/hmsiapps/controller/admin-mahasiswa.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('js/respond.min.js')}}" ></script>


<script src="{{asset('js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{asset('js/jquery.stepy.js')}}"></script>


<script src="{{asset('js/advanced-form-components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/fuelux/js/spinner.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/jquery-multi-select/js/jquery.quicksearch.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap-fileupload/bootstrap-fileupload.min.js')}}"></script>

<script>

      //step wizard

      $(function() {
          $('#default').stepy({
              backLabel: 'Previous',
              block: true,
              nextLabel: 'Next',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });
  </script>
  <script src="{{asset('js/form-component.js')}}"></script>
@stop
@section('content')
  <section class="wrapper site-min-height" ng-controller="mahasiswacreate">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <section class="panel">
                  <header class="panel-heading">
                      <h1>Registrasi HMSI Apps!</h1>
                      <hr>
                      <p>Halo! <strong>{{Auth::user()->mhs_nama}}</strong>, kamu dapat menambahkan user baru di HMSI Apps!. Jangan lupa aktifasi melalui email setelah user berhasil dibuat :)</p>
                      </header>
                      <div class="panel-body">
                          <div class="stepy-tab">
                              <ul id="default-titles" class="stepy-titles clearfix">
                                  <li id="default-title-0" class="current-step">
                                      <div>Step 1</div>
                                  </li>
                                  <li id="default-title-1" class="">
                                      <div>Step 2</div>
                                  </li>
                                  <li id="default-title-2" class="">
                                      <div>Step 3</div>
                                  </li>
                              </ul>

                          </div>
                          <hr>
                          <form class="form-horizontal" name="registration" id="default" enctype="multipart/form-data" ng-submit="submit()">
                              <fieldset title="Step1" class="step" id="default-step-0">
                                  <legend> </legend>


                                  <div class="form-group" >
                                      <label class="col-lg-2 control-label">NIM</label>
                                      <div class="col-lg-5">
                                        <input style="color:gray" type="text" value="" name="nim" ng-model="data.nim" class="form-control" ng-minlength="11" ng-maxlength="11"  placeholder="Masukkan 11 digit NIM" reqiured>
                                        <span class="error" ng-show="registration.nim.$error.minlength" style="color:red">
                                          NIM terlalu pendek</span>
                                          <span class="error" ng-show="registration.nim.$error.maxlength" style="color:red">
                                              NIM terlalu panjang</span>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Nama</label>
                                          <div class="col-lg-8">
                                              <input style="color:gray" type="text" ng-model="data.nama" class="form-control" placeholder="Nama Lengkap">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Jenis Kelamin</label>
                                        <div class="col-lg-10">
                                            <div class="radios">
                                             <label class="label_radio" for="laki">
                                                 <input style="color:gray" name="laki" id="laki" value="L" type="radio"  ng-model="data.gender"> Laki - Laki
                                             </label>
                                             <label class="label_radio" for="perempuan">
                                                 <input style="color:gray" name="perempuan" id="perempuan" value="P" type="radio" ng-model="data.gender"> Perempuan
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label class="control-label col-lg-2">Tanggal Lahir</label>
                                     <div class="col-md-3 col-xs-5">
                                        <div  class="input-append date">
                                            <input style="color:gray" style="color:gray" type="text"
                                            class="form-control"
                                            placeholder="yyyy-MM-dd"
                                            datepicker-popup="yyyy-MM-dd"
                                            ng-model="data.ttl"
                                            is-open="mulai"
                                            datepicker-options="dateOptions"
                                            ng-required="true"
                                            close-text="Close"
                                            ng-click="mulai = true"
                                            name="ttl"
                                            size ="16"
                                            required
                                            date-validator readonly
                                            />
                                            <span class="input-group-btn add-on">
                                                <button class="btn btn-danger" type="button" ng-click="open($event)" ><i class="icon-calendar" ></i></button>
                                            </span>
                                        </div>
                                        <span class="help-block">Pilih Tanggal</span>
                                    </div>
                                </div>

                            </fieldset>
                            <fieldset title="Step 2" class="step" id="default-step-1" >
                              <legend> </legend>
                              <div class="form-group">
                                  <label class="col-lg-2 control-label">Phone</label>
                                  <div class="col-lg-6">
                                      <input style="color:gray" type="text" ng-model="data.phone" class="form-control" placeholder="Nomor Telpon">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-2 control-label">Email</label>
                                  <div class="col-lg-7">
                                      <input style="color:gray" type="email" ng-model="data.email" class="form-control" placeholder="Alamat Email">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-2 control-label">Address</label>
                                  <div class="col-lg-10">
                                      <textarea style="color:gray" class="form-control" ng-model="data.alamat" cols="60" rows="5" placeholder="Alamat Rumah"></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-lg-2 control-label">Password</label>
                                  <div class="col-lg-7">
                                      <input style="color:gray" type="password" ng-model="data.password" class="form-control" placeholder="Password Akun">
                                  </div>
                              </div>



                          </fieldset>
                          <fieldset title="Step 3" class="step" id="default-step-2" >
                              <legend> </legend>
                              <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><p ng-repeat="pesans in pesan"><% pesans.msg %></p></alert>
                              <div class="form-group last">
                                <label class="control-label col-md-2">Foto Profil</label>
                                <div class="col-md-9">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="{{asset('img/no_image.gif')}}" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                        </div>
                                        <div>
                                            <span class="btn btn-white btn-file" >
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="file-input" name='file' ng-file-select="" ng-model="data.file">
                                            </span>

                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                        </div>
                                    </div>
                                    <span class="label label-danger">NOTE!</span>
                                    <span>
                                        Besar foto tidak lebih dari 500Kb .<br>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">NIM</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static" ng-bind="data.nim"></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 control-label">Nama</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static" ng-bind="data.nama"></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 control-label">Jenis Kelamin</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static" ng-bind="data.gender"></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 control-label">Tanggal Lahir</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static" ng-bind="data.ttl | date:'MM/dd/yyyy'"></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 control-label">Alamat</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static" ng-bind="data.alamat"></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 control-label">Email</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static" ng-bind="data.email"></p>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-lg-2 control-label">Phone</label>
                              <div class="col-lg-10">
                                  <p class="form-control-static" ng-bind="data.phone"></p>
                              </div>
                          </div>
                      </fieldset>
                      <button type="submit" ng-click="selesai = false"class="finish btn btn-danger">Finish</button>
                  </form>
              </div>
          </section>
      </div>


</section>

@stop
