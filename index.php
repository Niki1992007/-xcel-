<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Вводимые значения</title>
	<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
	<script type="text/javascript" src="js/view.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="icons/top.png" alt="">
	<div id="form_container">
		
		<h1><a>Вводимые значения</a></h1>
		<form id="form_9398" class="appnitro"  method="post" action="">
			<div class="form_description">
				<h2>Вводимые значения</h2>
				<p>Значения этой формы, отобразятся в конечном файле, который будет доступен для скачивания</p>
			</div>						
			<ul >
				
				<li id="li_1" >
					<label class="description" for="element_1"> </label>
					<div>
						<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_1"><small>Введите вашу Фамилию</small></p> 
				</li>		<li class="section_break">
					<h3></h3>
					<p></p>
				</li>		<li id="li_2" >
					<label class="description" for="element_2"> </label>
					<div>
						<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_2"><small>Введите ваше имя</small></p> 
				</li>		<li class="section_break">
					<h3></h3>
					<p></p>
				</li>		<li id="li_3" >
					<label class="description" for="element_3"> </label>
					<div>
						<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_3"><small>Введите ваше отчество</small></p> 
				</li>		<li class="section_break">
					<h3></h3>
					<p></p>
				</li>		<li id="li_6" >
					<label class="description" for="element_6">Укажите ваш пол </label>
					<div>
						<select class="element select medium" id="element_6" name="element_6"> 
							<option value="" selected="selected"></option>
							<option value="1" >Мужской</option>
							<option value="2" >Женский</option>

						</select>
					</div> 
				</li>		<li class="section_break">
					<h3></h3>
					<p></p>
				</li>		<li id="li_4" >
					<label class="description" for="element_4">Дата вашего рождения </label>
					<span>
						<input id="element_4_1" name="element_4_1" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_4_1">MM</label>
					</span>
					<span>
						<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_4_2">DD</label>
					</span>
					<span>
						<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
						<label for="element_4_3">YYYY</label>
					</span>
					
					<span id="calendar_4">
						<img id="cal_img_4" class="datepicker" src="icons/calendar.gif" alt="Pick a date.">	
					</span>
					<script type="text/javascript">
						Calendar.setup({
							inputField	 : "element_4_3",
							baseField    : "element_4",
							displayArea  : "calendar_4",
							button		 : "cal_img_4",
							ifFormat	 : "%B %e, %Y",
							onSelect	 : selectDate
						});
					</script>
					<p class="guidelines" id="guide_4"><small>Дата вашего рождения</small></p> 
				</li>		<li class="section_break">
					<h3></h3>
					<p></p>
				</li>		<li id="li_12" >
					<label class="description" for="element_12">Вес,кг </label>
					<div>
						<input id="element_12" name="element_12" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_12"><small>Введите вес. Числа с "плавающим значениями" допустимы"</small></p> 
				</li>		<li class="section_break">
					<h3></h3>
					<p></p>
				</li>		<li id="li_14" >
					<label class="description" for="element_14">Рост, см </label>
					<div>
						<input id="element_14" name="element_14" class="element text medium" type="text" maxlength="255" value=""/> 
					</div><p class="guidelines" id="guide_14"><small>Введите рост. Числа с "плавающими значениями" допустимы"</small></p> 
				</li>
				
				<li class="buttons">
					<input type="hidden" name="form_id" value="9398" />
					
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Внести данные" />
				</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="icons/bottom.png" alt="">
</body>
</html>