
<script type="text/javascript">
	
			//alert(dist.val);
		
			$.ajax({
			type:"GET",
			cache:false,
			url: "<?=base_url()?>index.php/form/play",
			datatype:"json",
		
			success: function (data) {
			var value_data=$.parseJSON(data);
			var dat_sch=value_data.date_sch;
			var date_sch=value_data.date;

			var vid = document.getElementById("audio-player");
			vid.src=value_data.url;
			vid.load();
			vid.play();
			}	
			
		});



</script>

<audio id="player" src="http://localhost/demo/uploads/admin/selai_buri.mp3" autoplay loop controls></audio>
<div>
    <button onclick="document.getElementById('player').play()">Play</button>
    <button onclick="document.getElementById('player').pause()">Pause</button>
    <button onclick="document.getElementById('player').volume += 0.1">Vol+ </button>
    <button onclick="document.getElementById('player').volume -= 0.1">Vol- </button>
</div>



