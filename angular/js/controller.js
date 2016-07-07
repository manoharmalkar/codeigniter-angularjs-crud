'use strict';

app

.controller('ProductCtr', ['$scope','$http','base_url','$mdDialog', '$mdMedia',function($scope,$http,base_url,$mdDialog, $mdMedia) {
    $scope.products=[];
    $http.get(base_url+'products')
    .success(function(response) {
        $scope.products = response.products;
        //console.log(response.products);
    });
    $scope.showConfirm = function(ev, item) {
        var confirm = $mdDialog.confirm()
              .title('Delete Product?')
              .textContent('are you sure you want to delete this product?')
              .ariaLabel('Lucky day')
              .targetEvent(ev)
              .ok('Yes')
              .cancel('Cancel');
        $mdDialog.show(confirm).then(function() {
          $http.post(base_url+'products/delete/'+item.id)
            .success(function(response) {
                var index = $scope.products.indexOf(item)
                $scope.products.splice(index,1);
            });
        }, function() {
          $scope.status = 'You decided to keep your debt.';
        });
      };
    $scope.deleteProduct = function(){
        
    }
}])
.controller('ProductEditCtr', ['$scope','$http','base_url','$stateParams','$mdDialog', '$mdMedia',function($scope,$http,base_url,$stateParams,$mdDialog, $mdMedia) {
    $scope.formData={};
    $scope.master={};
    if($stateParams.id){
        $http.get(base_url+'products/edit/'+$stateParams.id)
        .success(function(response) {
            $scope.formData = response.products;
            $scope.categories = response.categories;
            $scope.formData.status = response.products.status ? true :  false;
        });
    }
    else{
        $http.get(base_url+'products/getCategories/')
        .success(function(response) {
            $scope.categories = response.categories;
        });
    }
    
    $scope.productSave = function(ev){
        $http({
            method: 'POST',
            url: base_url+'products/save/',
            data: $scope.formData,
            headers: {'Content-Type': undefined},
            transformRequest: $http.defaults.transformRequest
        })
        .success(function(response) {
            $mdDialog.show(
                $mdDialog.alert()
                .parent(angular.element(document.querySelector('#popupContainer')))
                .clickOutsideToClose(true)
                .title('Sucess')
                .textContent('New Product added sucessfully')
                .ariaLabel('Alert Dialog Demo')
                .ok('OK')
                .targetEvent(ev)
            );
            $scope.formData = angular.copy($scope.master);
        });
    }
}])
.controller('HeaderCtr', ['$scope','$timeout', '$mdSidenav', '$log', function($scope,$timeout, $mdSidenav, $log) {
    $scope.toggleLeft = buildDelayedToggler('left');
    $scope.toggleRight = buildToggler('right');
    $scope.isOpenRight = function(){
      return $mdSidenav('right').isOpen();
    };
    /**
     * Supplies a function that will continue to operate until the
     * time is up.
     */
    function debounce(func, wait, context) {
      var timer;
      return function debounced() {
        var context = $scope,
            args = Array.prototype.slice.call(arguments);
        $timeout.cancel(timer);
        timer = $timeout(function() {
          timer = undefined;
          func.apply(context, args);
        }, wait || 10);
      };
    }
    /**
     * Build handler to open/close a SideNav; when animation finishes
     * report completion in console
     */
    function buildDelayedToggler(navID) {
      return debounce(function() {
        // Component lookup should always be available since we are not using `ng-if`
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      }, 200);
    }
    function buildToggler(navID) {
      return function() {
        // Component lookup should always be available since we are not using `ng-if`
        $mdSidenav(navID)
          .toggle()
          .then(function () {
            $log.debug("toggle " + navID + " is done");
          });
      }
    }
}]);