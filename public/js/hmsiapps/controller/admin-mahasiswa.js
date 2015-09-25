angular.module('admin').controller('ModalView', function ($scope, $modalInstance, mahasiswa) {
  $scope.mahasiswa = mahasiswa;
  $scope.ok = function () {
    $modalInstance.close();
  };

});

/////
/*angular.module('admin').controller('mahasiswa', function($scope, $http, $filter, $modal, $timeout, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
    $scope.sortType;
    $scope.sortReverse = false;
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    $http.get(baseURL.url('api/mahasiswa')).success(function(data) {
        $scope.data = data;
        $scope.totalItems = $scope.data.length;
        $scope.currentPage = 1;
        $scope.numPerPage = 5;
        // fungsi sorting data ASC/DESC
        $scope.paginate = function(value) {
            var begin, end, index;
            begin = ($scope.currentPage - 1) * $scope.numPerPage;
            end = begin + $scope.numPerPage;
            index = $scope.data.indexOf(value);
            return (begin <= index && index < end);
        };
        $scope.$watch('query', function(query) {
            $scope.data = data;
            $scope.data = $filter('filter')($scope.data, $scope.query);
            $scope.totalItems = $scope.data.length;
            $scope.currentPage = 1;
            $scope.numPerPage = 10;
        }, true);
    })


    //View mahasiswa
    $scope.animationsEnabled = true;
    $scope.view = function (id) {
    $http.get(baseURL.url('api/mahasiswa/') + id).success(function(data) {
      $scope.datax = data;
      var modalInstance = $modal.open({
        animation: $scope.animationsEnabled,
       controller: 'ModalView',
       size: 'lg',
       resolve: {
         mahasiswa: function () {
           return $scope.datax;
         }
       },
        templateUrl: baseURL.url('myModalContent.html')
      });

     })
    };

    $scope.toggleAnimation = function () {
      $scope.animationsEnabled = !$scope.animationsEnabled;
    };
    //End Of Edit mahasiswa

    //Set active mahasiswa
    $scope.active = function(id,act) {
     if(act == 0){
      swal({   title: "Are you sure?",   text: "You want to set this user be non-activate ?",
      type: "error",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, non-active it!",
      closeOnConfirm: false },
      function()
      {
       $http.put(baseURL.url('dashboard/mahasiswa/')+id+'/'+act).success(function(data) {
           if (data.success) {
               $http.get(baseURL.url('api/mahasiswa')).success(function(data) {
                swal({   title: "Success!",   text: "User has been non-activated!", type: "success",  timer: 2000,   showConfirmButton: false });
                   $scope.data = data;
               })
           }
       });

      });
     }
     else{
      swal({   title: "Are you sure?",   text: "You want to set this user be active?",
      type: "error",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Yes, active it!",
      closeOnConfirm: false },
      function()
      {
       $http.put(baseURL.url('dashboard/mahasiswa/') + id+'/'+act).success(function(data) {
           if (data.success) {
               $http.get(baseURL.url('api/mahasiswa')).success(function(data) {
                swal({   title: "Success!",   text: "User has been activated!", type: "success",  timer: 2000,   showConfirmButton: false });
                   $scope.data = data;
               })
           }
       });

      });
     }

    }
    //End of setactive

    $scope.delete = function(id) {

     swal({   title: "Are you sure?",   text: "You will not be able to recover this data!",
     type: "warning",
     showCancelButton: true,
     confirmButtonColor: "#DD6B55",
     confirmButtonText: "Yes, delete it!",
     closeOnConfirm: false },
     function()
     {
      $http.delete(baseURL.url('dashboard/mahasiswa/') + id).success(function(data) {
          if (data.success) {
              $http.get(baseURL.url('api/mahasiswa')).success(function(data) {
               swal({   title: "Deleted!",   text: "Your data has been deleted.", type: "success",  timer: 2000,   showConfirmButton: false });
                  $scope.data = data;
              })
          }
      });

     });
    }
});*/

/*angular.module('admin').controller('mahasiswaedit', function($scope, $http, $filter, $timeout, $upload, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
//    $scope.jk = [{'id': 'L', 'label': 'Laki Laki'}, {'id': 'P', 'label': 'Perempuan'}];
    $scope.mulai = false;
    $scope.open = function($event) {
     $event.preventDefault();
     $event.stopPropagation();
     $scope.mulai = true;
    };

    $scope.dateOptions = {
     formatYear: 'yy',
     startingDay: 1
    };


    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    var id = $filter('_uriseg')(6);
    $http.get(baseURL.url('api/mahasiswa/edit/') + id).success(function(data) {
        $scope.data = data;
    })

     $scope.submit = function(id) {
      if($scope.data.file){
       $upload.upload({
           url: baseURL.url('dashboard/mahasiswa'),
           method: 'POST',
           file: $scope.data.file,
           data: $scope.data
       }).success(function(data) {
           if (data.success) {
            $scope.alerts = [];
            $scope.pesan = [];
               $timeout(function() {
            $scope.alerts.push({type: 'success'});
            $scope.pesan.push({'msg': data.msg});
               $timeout(function() {
                   $scope.alerts = [];
                   $scope.pesan = [];
               }, 5000);
            },1000);
               $timeout(function() {
                   window.location.replace(baseURL.url('dashboard/mahasiswa'));
               }, 3000);
           }
           else{
            $scope.alerts = [];
            $scope.pesan = [];
               $timeout(function() {
            $scope.alerts.push({type: 'danger'});
            $scope.pesan.push({'msg': data.msg});
               $timeout(function() {
                   $scope.alerts = [];
                   $scope.pesan = [];
               }, 5000);
            },1000);
           }
       }).error(function(e, status) {
      //     if (status === 422) {

             if (status == 423){
              $scope.alerts = [];
              $scope.pesan = [];
              var x;
              var alert = e.msg;
              $scope.alerts.push({type: 'danger'});
              for (x in alert) {
                  $scope.pesan.push({'msg': (alert[x])});
              }
              $timeout(function() {
                  $scope.alerts = [];
              }, 3000);
              $timeout(function() {
                  $scope.pesan = [];
              }, 3000);
              $scope.show = false;
             }
             else {
              $scope.alerts = [];
              $scope.pesan = [];
              var x;
              $scope.alerts.push({type: 'danger'});
              for (x in e) {
                  $scope.pesan.push({'msg': (e[x][0])});
              }
              $timeout(function() {
                  $scope.alerts = [];
              }, 3000);
              $timeout(function() {
                  $scope.pesan = [];
              }, 3000);
              $scope.show = false;
             }
           //}
       });
            }
             else{
              $http.put(baseURL.url('dashboard/mahasiswa/') + id, $scope.data).success(function(data) {
                if (data.success) {
                 $scope.alerts = [];
                 $scope.pesan = [];
                    $timeout(function() {
                 $scope.alerts.push({type: 'success'});
                 $scope.pesan.push({'msg': data.msg});
                    $timeout(function() {
                        $scope.alerts = [];
                        $scope.pesan = [];
                    }, 5000);
                 },1000);
                    $timeout(function() {
                        window.location.replace(baseURL.url('dashboard/mahasiswa'));
                    }, 3000);
                }
            }).error(function(e, status) {
             $scope.alerts = [];
             $scope.pesan = [];
             var x;
             $scope.alerts.push({type: 'danger'});
             for (x in e) {
                 $scope.pesan.push({'msg': (e[x][0])});
             }
             $timeout(function() {
                 $scope.alerts = [];
             }, 3000);
             $timeout(function() {
                 $scope.pesan = [];
             }, 3000);
             $scope.show = false;
            });
            }
     }



});*/

angular.module('admin').controller('mahasiswacreate', function($scope, $http, $filter, $timeout, $upload, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
    $scope.pesan = [];
    $scope.show = true;


	$scope.closeAlert = function(index) {
		$scope.alerts.splice(index, 1);
	};

	$scope.mulai = false;
 $scope.lanjut = false;
 if($scope.lanjut == true){
  alert('tes');
 }
 $scope.masuk = function(){

  alert('aha');
 };
	$scope.open = function($event) {
		$event.preventDefault();
		$event.stopPropagation();
		$scope.mulai = true;
	};

	$scope.dateOptions = {
		formatYear: 'yy',
		startingDay: 1
	};

    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };

    $scope.submit = function() {

     alert($scope.data);
     /*
        $http.post('/login', $scope.data).success(function(e) {
            if (e.success) {
                $scope.alerts.push({'type': "success", 'msg': e.msg});
                    $timeout(function() {
                        window.location.replace(baseURL.url('/login'));
                    }, 2000);

            } else {
                $scope.alerts.push({'type': "danger", 'msg': e.msg});
                $timeout(function() {
                    $scope.alerts = [];
                }, 5000);
            }
        }).error(function(e, status) {
            if (status == 422) {
                var x;
                for (x in e) {
                    $scope.alerts.push({'type': "danger", 'msg': (e[x][0])});
                }
                $timeout(function() {
                    $scope.alerts = [];
                }, 5000);
            }
        });*/
    };

/*    $scope.submit = function() {
            $upload.upload({
                url: baseURL.url('dashboard/mahasiswa'),
                method: 'POST',
                file: $scope.data.file,
                data: $scope.data
            }).success(function(data) {
                if (data.success) {

                // $scope.alerts = [];
                 //$scope.pesan = [];
                 $timeout(function() {
              //$scope.alerts.push({type: 'success'});
              //$scope.pesan.push({'msg': data.msg});
                 swal({   title: "Success!",   text: "Selamat! Registrasi berhasil email konfirmasi telah terkirim. Lakukan konfirmasi :).", type: "success",  timer: 4000,   showConfirmButton: false });
                 $timeout(function() {
                     $scope.alerts = [];
                     $scope.pesan = [];
                      window.location.replace(baseURL.url('dashboard/mahasiswa'));
                 }, 4000);
              },1000);
                }
                else{
                 $scope.alerts = [];
                 $scope.pesan = [];
                    $timeout(function() {
                 $scope.alerts.push({type: 'danger'});
                 $scope.pesan.push({'msg': data.msg});
                    $timeout(function() {
                        $scope.alerts = [];
                        $scope.pesan = [];
                    }, 5000);
                 },1000);
                }
            }).error(function(e, status) {
           //     if (status === 422) {

                  if (status == 423){
                   $scope.alerts = [];
                   $scope.pesan = [];
                   var x;
                   var alert = e.msg;
                   $scope.alerts.push({type: 'danger'});
                   for (x in alert) {
                       $scope.pesan.push({'msg': (alert[x])});
                   }
                   $timeout(function() {
                       $scope.alerts = [];
                   }, 3000);
                   $timeout(function() {
                       $scope.pesan = [];
                   }, 3000);
                   $scope.show = false;
                  }
                  else {
                   $scope.alerts = [];
                   $scope.pesan = [];
                   var x;
                   $scope.alerts.push({type: 'danger'});
                   for (x in e) {
                       $scope.pesan.push({'msg': (e[x][0])});
                   }
                   $timeout(function() {
                       $scope.alerts = [];
                   }, 3000);
                   $timeout(function() {
                       $scope.pesan = [];
                   }, 3000);
                   $scope.show = false;
                  }




                //}
            });

    }
*/
});
