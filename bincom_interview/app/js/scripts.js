

function _get_panel(page) {
     $('#dashboard_id').html('<div class="ajax-loader animated zoomIn"><img src="all-images/images/ajax-loader.gif"/></div>').fadeIn(1000);
  ///   var action='get_panel';
     var dataString = 'page='+page;
     $.ajax({
        type: "POST",
        url: local_url+'?action=get_panel',
        data: dataString,
        cache: false,
        success: function(html){
           $('#dashboard_id').html(html);
        }
     });
  }
   

function _get_states_info(){
	$.ajax({
		type: "POST",
		url: fetch_states_url,
		dataType: 'json',
		cache: false,
		success: function(info){
				var data=info.data
				for (var i = 0; i < data.length; i++) {
				  var state_id = data[i].state_id;
				  var state_name = data[i].state_name;
					$('#state_id').html('<option value="'+state_id+'">'+state_name+'</option>');
				}
				_get_lga_info(state_id);
		}
	});
}





function _get_lga_info(state_id){
	$('#lga_id').html('<option value="">LOADING...</option>');
	var dataString ='state_id='+ state_id;
	$.ajax({
		type: "POST",
		url: fetch_lga_url,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function(info){
			$('#lga_id').html('');
			var result = info.result;
			var message = info.message;
			var data=info.data
			var text='';

			text='<option value="" >SELECT HERE </option>';
				if(result==true){
					for (var i = 0; i < data.length; i++) {
						var lga_id = data[i].lga_id;
						var lga_name = data[i].lga_name;
						text +='<option value="'+lga_id+'">'+lga_name+'</option>';
					  }
				}else{
					text='<option>'+message+' </option>';
				}
				$('#lga_id').append(text);
				
		}
	});
}


function _get_ward_info(){
	var lga_id = $('#lga_id').val();
	$('#ward_id').html('<option value="">LOADING...</option>');
	var dataString ='lga_id='+ lga_id;
	$.ajax({
		type: "POST",
		url: fetch_ward_url,
		dataType: 'json',
		data: dataString,
		cache: false,
		success: function(info){
			$('#ward_id').html('');
			var response = info.response;
			var result = info.result;
			var message = info.message;
			var data=info.data
			var text='';

			text='<option value="" >SELECT HERE </option>';
				if(result==true){
					for (var i = 0; i < data.length; i++) {
					var ward_id = data[i].ward_id;
					var ward_name = data[i].ward_name;
					text+='<option value="'+ward_id+'">'+ward_name+'</option>';
					//text +='<option value="'+ward_id+'">'+ward_name+'</option>';
					}
					
				}else{
					text='<option>'+message+' </option>';
				}
				$('#ward_id').append(text);
				//_get_polling_unit_info(lga_id);
		}
	});
}


function _get_polling_unit_info(){
	var lga_id = $('#lga_id').val();
	var ward_id = $('#ward_id').val();
	$('#polling_unit_id').html('<option value="">LOADING...</option>');
	var dataString ='lga_id='+ lga_id+'&ward_id='+ ward_id;
	$.ajax({
		type: "POST",
		url: fetch_polling_unit_url,
		dataType: 'json',
		data: dataString,
		cache: false,
		success: function(info){
			$('#polling_unit_id').html('');
			var response = info.response;
			var result = info.result;
			var message = info.message;
			var data=info.data;
			var text='';

			text='<option value="" >SELECT HERE </option>';
				if(result==true){
					for (var i = 0; i < data.length; i++) {
						var polling_unit_id = data[i].uniqueid;
						var polling_unit_name = data[i].polling_unit_name;
						  ///$('#polling_unit_id').append('<option value="'+polling_unit_id+'">'+polling_unit_name+'</option>');
						  text+='<option value="'+polling_unit_id+'">'+polling_unit_name+'</option>';
						}
				}else{
					text='<option value="">'+message+' </option>';
				$('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div> CAUTION ALERT!<br /><span>'+message+'</span>').fadeIn(500).delay(5000).fadeOut(100);

				}
				$('#polling_unit_id').append(text);
		}
	});
}




function _get_election_result(){
		var state_id = $('#state_id').val();
		var lga_id = $('#lga_id').val();
		var ward_id = $('#ward_id').val();
		var polling_unit_id = $('#polling_unit_id').val();
	
		var dataString ='state_id='+ state_id+'&lga_id='+ lga_id+'&ward_id='+ ward_id+'&polling_unit_id='+ polling_unit_id;
	$('#matrix-div').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
	 var pie='';
	$.ajax({
		type: "POST",
		url: fetch_election_result_url,
		data: dataString,
		dataType: 'json',
		cache: false,
		success: function(info){
		$('#matrix-div').html('');
			var response = info.response;
			var result = info.result;
			var message = info.message;
			if(result==true){
				var data=info.data
				for (var i = 0; i < data.length; i++) {
				  var party_abbreviation = data[i].party_abbreviation;
				  var party_score  = data[i].party_score ;
					$('#matrix-div').append('<div class="matrix-div"> '+party_abbreviation+' <button class="btn">'+party_score+'</button><br clear="all" /></div>');
				pie +='{ label: "'+party_abbreviation+'", y: '+party_score+'},';
				}
			
				_get_pie(pie);
				_get_bar(pie);

			}else{
				$('#warning-div').html('<div><i class="bi-exclamation-octagon-fill"></i></div> CAUTION ALERT!<br /><span>'+message+'</span>').fadeIn(500).delay(5000).fadeOut(100);
			}
				
		}
	});
}







function _get_polling_unit_count(){
	var lga_id = $('#lga_id').val();
	var dataString ='lga_id='+ lga_id;
$('#matrix-div').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
$.ajax({
	type: "POST",
	url: total_polling_unit_url,
	data: dataString,
	dataType: 'json',
	cache: false,
	success: function(info){
		var polling_unit_count = info.polling_unit_count;	
		$('#matrix-div').html('<div class="matrix-div"> Total Polling Units <button class="btn">'+polling_unit_count+'</button><br clear="all" /></div>');	
		_get_pie('');
		_get_bar('');
	}
});
}


function _get_pie(pie){
	$('#pie').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		
	var dataString ='pie='+ pie;
	$.ajax({
		type: "POST",
		url: local_url+'?action=pie',
		data: dataString,
		cache: false,
		success: function(html){
		$('#pie').html(html);
		}
	});

}



function _get_bar(bar){
	$('#bar').html('<div class="ajax-loader"><img src="'+website_url+'/all-images/images/ajax-loader.gif"/></div>').fadeIn('fast');
		var dataString ='bar='+ bar;
	$.ajax({
		type: "POST",
		url: local_url+'?action=bar',
		data: dataString,
		cache: false,
		success: function(html){
		$('#bar').html(html);
		}
	});

}