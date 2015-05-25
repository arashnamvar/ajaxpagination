
<html>
<head>
	<title>Leads Ajax example</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$.get("/leads/update", function(res){
			$(".part").html(res);
		});
			// return false;
		$("body").on("submit", "form", function(){
			$.post("/leads/update" , $("form").serialize(), function(res){
				$(".part").html(res);
			});
			return false;
		});

		$("body").on("click" , ".page_button", function(){
			var lol = $(this).attr("href");
			$("#page").attr("value", lol);
			$.post("/leads/update" , $("form").serialize(), function(res){
				$(".part").html(res);
			});

					return false;
    	});

    	$("input").keyup(function(){
    			$("#page").attr("value", 0);
    			$.post("/leads/update" , $(this).parent().serialize(), function(res){
				$(".part").html(res);

    		});
 	   });

    	$("form").on("change", "input" , function(){	
     		$.post("/leads/update" , $(this).parent().serialize(), function(res){
				$(".part").html(res);
    		});
     		return false;
    	});

    	$("body").on("click", "a", function(){
     		$.post("/leads/update" , $("form").serialize(), function(res){
				$(".part").html(res);
    		});
     		return false;
    	});
	});

	</script>
</head>
<style type="text/css">
	td, table {
		border:1px black solid;
	}
	table {
		border-collapse: collapse;
	}
</style>
<body>

	<form method="POST" action="/leads/update">
		Name:<input type="text" name="name" />
		To:<input type="date" name="to_date" />
		From: <input type="date" name="from_date" />
		
		<input id="page" type="hidden" value="0" name="page"> 
	</form>
	<div class="part">
		
	</div>


</body>
</html>