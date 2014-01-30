$(document).ready(function() 
{
	$("#sport_name").keyup(function()
	{
		var faq_search_input = $(this).val();
		var dataString = 'keyword='+ faq_search_input;
		if(faq_search_input.length>0)
		{
			$.ajax({
				type: "GET",
				url: "../../backend/sportlist.php",
				data: dataString,
				beforeSend:  function() 
				{
					$('input#sport_name').addClass('loading');
				},
				success: function(server_response)
				{
					$('#searchresultdata').html(server_response).show();
					$('span#faq_category_title').html(faq_search_input);
					if ($('input#sport_name').hasClass("loading")) 
					{
						$("input#sport_name").removeClass("loading");
					}
				}
			});
		}
			return false;
	});
});