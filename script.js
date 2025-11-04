/**
 * @author Folkert
 */

$().ready(function() {
	src = 'search.php'; 
	$( "#artiest4" ).autocomplete({ minLength: 2, source: 'search.php?k=a'});
	$( "#artiest5" ).autocomplete({ minLength: 2, source: 'search.php?k=a'});
	$( "#artiest6" ).autocomplete({ minLength: 2, source: 'search.php?k=a'});

	$("[name^=titel]").autocomplete({ minLength: 2, source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term,
                    artist : $($(this)).val(),
                    k: 't'
                },
                success: function(data) {
            		response(data);
          		}
            });
        },});

$("[name^=song]").on('change', function () {
		$('#song1 + strong').remove();
		$('#song2 + strong').remove();		
		$('#song3 + strong').remove();
			var s1 = $("#song1").val();
			var s2 = $("#song2").val();
			var s3 = $("#song3").val();			 
			$.ajax({
                        url: "checkSong.php",
						dataType: "json",
                        type: "get",
						data: {
							song1: s1,
						  song2: s2,
						  song3: s3
						},
							success: function(data) {
								 console.log(data);
								 var r="";
							if(data==true) var r= "Maximaal 2 keer dezelfde artiest!";
							if(data=="same") var r= "Niet 2x dezelfde Song a.u.b.!";
							if(data!=false){
								$($(this)).prop('selectedIndex',0);
								$($(this)).after("<strong> "+r+"</strong>");
							}
							
						}
                     });
});
 $("#stemForm").validate({
            rules: {
            	
                email: {
                    required: true,
                    email: true,
                    remote: {
						
						url: "checkEmail.php",
                        type: "get"
                     }
                }
            },
            messages: {
                email: {
                    required: "<strong> Voer een geldig email adres in!</strong>",
                    email: "<strong> Voer een geldig email adres in!</strong>",
                    remote: "<strong> Dit email adres is al gebruikt om te stemmen!</strong>"
                },
				
            },
            	errorPlacement: function (error, element) {
           			 element.after(error);
        		}
        });
		
      });
