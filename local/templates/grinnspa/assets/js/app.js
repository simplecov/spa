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
angular.module('app', [])
    .controller('feedbackForm', ['$scope', function($scope, $http) {

        $scope.submit = function() {
            console.log($scope.feedbackForm);
            if ( $scope.feedbackForm.$valid ) {
                $scope.msg = 'Форма валидна';

                $http.post(
                    '/local/ajax/feedback.php',
                    $scope.user_name
                ).success(function( res ){

                    $scope.msg = 'Сообщение отправлено';

                }).error(function(err){

                    $scope.msg = 'Форма в разработке, на данный момент сообщения не отправляются';

                });
            }
            else
            {
                $scope.msg = 'Форма невалидна';
            }
        }


        // $http.post({
        //     method: 'POST',
        //     url: '/local/php_interface/include/mail.php'
        // }).succes(function(data){
        //     $('.form-events').append('data');
        // });
    }]);