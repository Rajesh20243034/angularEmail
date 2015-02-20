function EmailController($scope) {
	$scope.isPopUpVisible = false;
	$scope.showPopUp = function(email) {
		$scope.isPopUpVisible = true;
		$scope.selectedEmail = email;
	};
	$scope.closePopUp = function() {
		$scope.isPopUpVisible = false;
	};

	$scope.emails = [{from:'john', subject:'I love Angular', date:'jan1', body:'Hello World'},
        			{from:'jack', subject:'Angular and I are Just Friends', date:'02jan', body:'Just Kidding'},
        			{from:'Rajesh', subject:'Angular JS the developers Framework', date:'03jan', body:'hello there'}
    ];
}