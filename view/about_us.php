
	<div id="team" class="container text-center">
	  <h3>Наша команда</h3>
	  <p><em>Ми любимо нашу роботу, і робимо її якнайкраще)</em></p>
	  <p>Наша маленька команда складаєиться з 4 осіб. Всі студенти Чернівецького національного університету і це наш спільний проект. Якщо ми робимо якусь роботу, то ми робимо її на найвищому рівні.</p>
	  <br>
	  <div class="row">
		<div class="col-sm-3">
		  <p class="text-center"><strong>Поляниця Віта</strong></p><br>
		  <a href="#demo" data-toggle="collapse">
			<img src="view/images/vita.JPG" class="img-circle person" alt="Random Name" width="160" height="160">
		  </a>
		  <div id="demo" class="collapse">
			<p>Директор</p>
			<p>Любить малювати на парах</p>
		  </div>
		</div>
		<div class="col-sm-3">
		  <p class="text-center"><strong>Герасимчук Олександр</strong></p><br>
		  <a href="#demo1" data-toggle="collapse">
			<img src="view/images/alex.JPG" class="img-circle person" alt="Random Name" width="160" height="160">
		  </a>
		  <div id="demo1" class="collapse">
			<p>Заступник Директора</p>
			<p>Любить полінитися</p>
		  </div>
		</div>
		<div class="col-sm-3">
		  <p class="text-center"><strong>Гожда Михайло</strong></p><br>
		  <a href="#demo2" data-toggle="collapse">
			<img src="view/images/mischa.JPG" class="img-circle person" alt="Random Name" width="160" height="160">
		  </a>
		  <div id="demo2" class="collapse">
			<p>Головний розробник</p>
			<p>Любить коли все гут</p>
		  </div>
		</div>
		<div class="col-sm-3">
		  <p class="text-center"><strong>Палюга Любов</strong></p><br>
		  <a href="#demo3" data-toggle="collapse">
			<img src="view/images/lubov.JPG" class="img-circle person" alt="Random Name" width="160" height="160">
		  </a>
		  <div id="demo3" class="collapse">
			<p>Бухгалтер</p>
			<p>Любить 1С</p>
		  </div>
		</div>
	  </div>
	</div>

	<div id="contact" class="container-fluid bg-grey">
		<h2 class="text-center">CONTACT</h2>
		<div class="row">
			<div class="col-sm-5">
				<p>Ваші побажання чи запити відсилайте нам на пошту і ми зв'яжемось з вами.</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Україна, м.Чернівці</p>
				<p><span class="glyphicon glyphicon-phone"></span> +380987375067</p>
				<p><span class="glyphicon glyphicon-envelope"></span> foodfinder@i.ua</p>
			</div>
			<div class="col-sm-7 slideanim">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-default pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="googleMap" style="height:400px;width:100%;"></div>

	<!-- Add Google Maps -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
		var myCenter = new google.maps.LatLng(48.2931783,25.9291373);

		function initialize() {
			var mapProp = {
				center:myCenter,
				zoom:12,
				scrollwheel:false,
				draggable:false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker = new google.maps.Marker({
				position:myCenter,
			});

			marker.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

    </div>