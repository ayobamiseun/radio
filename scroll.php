
<script type="text/javascript">

	$(document).on('scroll', function()
	{
		if($(window).scrollTop() > 91)
		{
			$('.header').css({
				"position": "fixed"
			});
		}
		else
		{
			$('.header').css({
				"position": "relative"
			});
		}
	});


	var audioplayer4 = document.getElementById("audio-player23");

                      $(".btnc").addClass('fa-spinner');

                    //audioplayer4.play();

                    //alert(audioplayer4.attr('src'));
                    //if(store.has('TunesStationLink')){

                        audioplayer4.addEventListener('canplaythrough', (event) => {
                        	//$(".plynow").click();
                           audioplayer4.play();
                           $(".btnc").addClass('fa-pause');
                           $(".btnc").removeClass('fa-play');
                           $(".btnc").removeClass('fa-spinner');
                           //$(".plynow").click();
                        });

                        //alert('y');

                        //audioplayer4.play();

                        //audioplayer4.play();

                        /*if (audioplayer4.paused) {
                           //audioplayer2.attr('src',t_link);
                           audioplayer4.play();
                           //$(".plynow").addClass('fa-pause');
                           //$(".plynow").removeClass('fa-play');
                           //$(this).attr('src', 'images/stp.png');

                           $(".btnc").addClass('icon-pause');
                           $(".btnc").removeClass('icon-play');
                        
                        }
                        else {
                           audioplayer4.play();
                           //audioplayer2.attr('src',t_link);
                           //$(this).attr('src', 'images/ply.png');
                           //$(".plynow").removeClass('fa-pause');
                           //$(".plynow").addClass('fa-play');

                           $(".btnc").addClass('icon-pause');
                           $(".btnc").removeClass('icon-play');
                           //audioplayer2.pause();
                           //$(".plynow").addClass('fa-play');
                           //$(".plynow").removeClass('fa-pause');

                        }*/
                      


                     

                $(".plynow").click(function(){

                    if (audioplayer4.paused) {
                       //audioplayer2.attr('src',t_link);
                       audioplayer4.play();
                       $(".btnc").addClass('fa-pause');
                       $(".btnc").removeClass('fa-play');
                       //$(this).attr('src', 'images/stp.png');
                    }
                    else {
                       audioplayer4.pause();
                       //audioplayer2.attr('src',t_link);
                       //$(this).attr('src', 'images/ply.png');
                       $(".btnc").removeClass('fa-pause');
                       $(".btnc").addClass('fa-play');

                    }

                    //$(this).toggleClass('pause');
                });

	
</script>