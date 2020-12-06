<style>
	.class:hover {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }

  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
.icon-fts{
    background-color: #000000;
	-webkit-border-radius: 50%;
    border-radius: 50%;
	display: inline-block;
    line-height: 1;
	padding: .5em;
    color: #fff;
    fill: #fff;
	font-size: 50px;
}
.div-shake{animation: shake 1.5s infinite;}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}
.embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
.embed-responsive-16by9{padding-top:56.25%;margin-bottom:15px;}

	</style>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
        	$("#btn_test").click(function(){
        	var name_client = $("#Nom").val();
        	var phone_client = $("#Telephone").val();
        	var city_client = $("#Ville").val();
        	if(name_client != "" && phone_client != "" && city_client != ""){
        	$(this).html('<img style="max-height:16px;" src="assets/img/loading.gif" /> المرجو الإنتظار');
        	}
        	});
            var now = new Date();
            $('#DateOrder').val(now.getFullYear() + "-" + (now.getMonth() + 1) + "-" + now.getDate() + " " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds());

            $('#Prix').on('change', function () {
            let prix = $(this).val();
            if (prix == 399) {
                $('#Quantite').val(1);
            } else if (prix == 599) {
                $('#Quantite').val(2);
            } else if (prix == 799) {
                $('#Quantite').val(3);
            }
            });
        });
    </script>
	
    <script>
    
    </script>
    
<script type="text/javascript" src="assets/js/grafiksoft.js"></script>