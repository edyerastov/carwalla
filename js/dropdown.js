//Begin script
// Use Case 1: Populate default drop down values on page load
  var origin = window.location.origin;
	_hash = window.location.pathname.split('/');

	console.log(_hash);

	var selectedMakeFromURL = _hash[4];
	var selectedModelFromURL = _hash[5];
  var postURL = origin + '/' + _hash[1] + '/' + _hash[2] + '/' + _hash[3] + '/' + _hash[4] + '/' + _hash[5]
  console.log("This is origin: ",origin);
	console.log("This is postURL for future post: ",postURL);
	console.log("This is _selectedMakeFromURL: ",selectedMakeFromURL);
	console.log("This is _selectedModelFromURL: ",selectedModelFromURL);
	console.log("This is _hash length: ",_hash.length);
	if (_hash.length >= 3) {
		console.log("We are going to change default now");
		$('#select-car-make').val(selectedMakeFromURL).change();
		$('#select-car-model').val(selectedModelFromURL).change();
		$('#form-price-drop').attr('action', postURL);
	};

// Use Case 2: Auto-submit the form on Make selection
	$('#form-price-drop #select-car-make').change(function(event){
		_selectedMake = $(this).val();
		//When you select a make, class = All, model = All
		_hash[3] = 'All';
		_hash[4] = _selectedMake;
		_hash[5] = 'All';
		postURL = origin + '/' + _hash[1] + '/' + _hash[2] + '/' + _hash[3] + '/' + _hash[4] + '/' + _hash[5];
		$('#form-price-drop').attr('action', postURL).submit();
		event.preventDefault();
	})

// Use Case 3: Auto-submit form on Model selection
	$('#form-price-drop #select-car-model').change(function(event){
		_selectedModel = $(this).val();
		_selectedModelClass = $(this).find('option:selected').attr('data-car-class');

		//When you select a model, class = class from URL, make = make from URL
		_hash[3] = _selectedModelClass;
		_hash[5] = _selectedModel;
		//window.location.hash = _hash.join('/');
		postURL = origin + '/' + _hash[1] + '/' + _hash[2] + '/' + _hash[3] + '/' + _hash[4] + '/' + _hash[5];
		$('#form-price-drop').attr('action', postURL).submit();
		//$('#form-price-drop').attr('action', '#'+_hash.join('/')).submit();
		// console.log(_hash.join('/'));
		event.preventDefault();
	})

// END script
