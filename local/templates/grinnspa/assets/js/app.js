'use strict';

/**
 * angular
 * Description: Angular!
 */
angular

/**
 * app
 * Description: Устанавливаем первоначальное состояние приложения
 */
// angular.module('app', [])
//
//     .controller('validateForm', ['$scope', function($scope) {
//         $scope.email = {
//             text: 'me@example.com'
//         };
//     }]);

angular.module('app', [])
    .controller('feedbackForm', ['$scope', function($scope) {
        $scope.patternEmail = '/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/';
        $scope.patternPhone = '\d+';

        $scope.submit = function() {
            $scope.msg = 'form is submitted';
        };

        // $scope.sendForm = function ($scope) {
        //     $scope.msg = "Form Validated";
        // };
    }]);


// function validationCtrl($scope) { console.log('validated');
//     var validUsername = "Тодорис Баис";
//     var validEmail = "thodoris.bais@gmail.com";
//
//     $scope.reset = function(){
//         $scope.username = validUsername;
//         $scope.email = validEmail;
//     }
//
//     $scope.checkData = function() {
//         if ($scope.username != validUsername || $scope.email != validEmail) {
//             alert("Предоставленные данные не совпадают с владельцем по умолчанию");
//         } else {
//             alert("Вроде нормально!");
//         }
//     }
// }