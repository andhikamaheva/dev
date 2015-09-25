angular.module('admin').controller('registration', function($scope, $http, $filter, $timeout, $upload, baseURL) {
    $scope.data = {};
    $scope.pertanyaanx ={};
    $scope.jawabanx ={};
    $scope.ask = {};
    $scope.ask.jawaban = [];
    $scope.alerts = [];
    $scope.pesan = [];
    $scope.show = true;
    $scope.ask = {};
    $scope.ask.jawaban = [];
    //$scope.data.jawaban = [];


	$scope.closeAlert = function(index) {
		$scope.alerts.splice(index, 1);
	};

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


    $http.get(baseURL.url('api/pertanyaan')).success(function(data) {
        $scope.pertanyaanx = data;
        $scope.totalItems = $scope.data.length;
    })
    $http.get(baseURL.url('api/jawaban')).success(function(data) {
        $scope.jawabanx = data;
        $scope.totalItems = $scope.data.length;
    })

  //$scope.jawabannyax = [];
        $scope.submit = function() {
         console.log($scope.data.jawaban);

     //$scope.jawab.push($scope.data.jawab);
     ///alert($scope.jawab.length);

         //console.log($scope.data.jawab);

            $http.post('/kepribadian', $scope.data).success(function(e) {

                    swal({   title: "Success!",   text: "Selamat! Registrasi Berhasil Silahkan Login :).", type: "success",  timer: 4000,   showConfirmButton: false });

                
            });
        };

});
