app.
config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('home');
    $stateProvider
        .state('home', {
            url:'/home',
            templateUrl: 'angular/view/home.html'
        })
        .state('products', {
            url:'/products',
            templateUrl: 'angular/view/products.html'
        })
        .state('productsedit', {
            url:'/products/edit/:id',
            templateUrl: 'angular/view/edit_products.html'
        })
        .state('contact', {
            url:'/contact',
            templateUrl: 'angular/view/contact.html'
        })
    ;
});
