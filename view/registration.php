

		<div class="container">
		<legend><h2>Реєстрація: </h2></legend>
		<div class="form">
			<form class="form-horizontal" action="./registr.html" method="POST" name="form1" id="form" role="form" >
				
				<div class="form-group">
					<legend><h3>Загальна інфоррмація про заклад:</h3></legend>
					<label class="control-label col-sm-4">Назва<input class="form-control" type="text" name="name" placeholder="Введіть назву" data-toggle="tooltip" title="Введіть назву закладу харчування"/> </label>
					<label class="control-label col-sm-2">Тип<select class="form-control" id="type" name="type" data-toggle="tooltip" title="Виберіть тип вашого закладу">
						<option>Бар</option>
						<option>Кафе</option>
						<option>Комплекс</option>
						<option>Фаст-фуд</option>
						<option>Кондитерська</option>
						<option>Чайна</option>
						<option>Кофейня</option>
						<option>Паб</option>
						<option>Піцерія</option>
						<option>Ресторан</option>
						<option>Столова</option>
						<option>Суші-бар</option>
					</select></label>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-6">Опис<textarea class="form-control" rows="5" id="info" placeholder="Введіть інформацію про ваш заклад яку ви бажаєте опублікувати" data-toggle="tooltip" title="Введіть інформацію про ваш заклад яку ви бажаєте опублікувати"></textarea></label>
				</div>

				
				<div class="form-group">
					<legend><h3>Додаткові опції:</h3></legend>
					<label><input class="checkbox-inline" type="checkbox" value="Банкетний зал">Банкетний зал</label>
					<label><input class="checkbox-inline" type="checkbox" value="Банкетний зал">Доставка їжі</label>
					<label><input class="checkbox-inline" type="checkbox" value="Банкетний зал">Дитяче меню</label>
					<label><input class="checkbox-inline" type="checkbox" value="Банкетний зал">Бізнес-ланч</label>
					<label><input class="checkbox-inline" type="checkbox" value="Банкетний зал">Кава</label>
					<label><input class="checkbox-inline" type="checkbox" value="Банкетний зал">Сніданок</label>
				</div>
				
				<div class="form-group">
					<legend><h3>Контактна особа:</h3></legend>
						<label class="control-label col-sm-2"> Email <input class="form-control" type="email" name="email" placeholder="Введіть Email" data-toggle="tooltip" title="Введіть Email контактної особи"/></label>
						<label class="control-label col-sm-2"> Ім'я <input class="form-control" type="text" name="name" placeholder="Введіть ПІБ" data-toggle="tooltip" title="Введіть прізвище та імя контактної особи"/></label>
						<label class="control-label col-sm-2">Телефон <input class="form-control" type="text" name="tel" placeholder="Введіть номер телефону" data-toggle="tooltip" title="Введіть номер телефону контактної особи"/></label>
				</div>
				<div class="form-group">
						<input class="btn btn-default" type="submit" value="Надіслати"/>
				</div>
			</form>
			</div>
			</div>


	</div>