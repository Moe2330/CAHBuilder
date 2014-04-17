$(document).ready(function(){
	$(".btn_disable").prop('disabled',true);
	$(".vote").click(function(){
		var id = $(this).attr("id");
		var dir = $(this).attr("dir");

		$.ajax({
			'url':'vote',
			'data': {'vote':dir,'id':id,'_token':$('meta[name="csrf-token"]').attr('content')},
			'type':'POST',
		    'beforeSend': function(xhr, settings) {
  				console.log('ABOUT TO SEND');
			},
			'success': function(result, status_code, xhr) {
      			console.log('SUCCESS!');
			},
			'complete': function(xhr, text_status) {
      			console.log('Done.');
      			if(dir == 'up'){
      				$('#votes_'+id).html(parseInt($('#votes_'+id).html(),10)+1);
      			} else {
      				$('#votes_'+id).html(parseInt($('#votes_'+id).html(),10)-1);
      			}
			},
    		'error': function(xhr, text_status, error_thrown) {
     			 console.log('ERROR!', text_status, error_thrown);
    		}		
		});
		
		$(this).prop('disabled',true);
		if(dir == 'up'){
			console.log($('.votedown_'+id));
			$('.votedown_'+id).prop('disabled', function(i,val){
				if(val == true){
					return !val;
				}
			});
		} else {
			console.log($('.voteup_'+id));
			$('.voteup_'+id).prop('disabled', function(i,val){
				if(val == true){
					return !val;
				}
			});
		}
	});
});
