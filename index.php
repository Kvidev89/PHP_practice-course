<?php
$color = [
	'red'=> 'красный',
	'yellow' => 'желтый',
	'blue' => 'голубой',
	'orange' => 'оранжевый',
	'grey' => 'серый',
];
$option = [];
foreach ($color as $key => $value) {
	$option[] = '<option value="'.$key.'">'.$value.'</option>';
}

$submit = filter_input(INPUT_POST, 'user_name');
if (null !== $submit) {
	$color = filter_input(INPUT_POST, 'color');
	echo '<span style="color: '.$color.'">!!!</span>';
}

echo '<html>

<head></head>
<body>
<span style="font-size: 200px">O X A N A</span>
<form action="" method="post">
  <ul>
    <li>
      <label for="name">Name:</label>
      <input type="text" id="name" name="user_name" value="Отправить">
    </li>
	<li>
      <label for="select_o">Color:</label>
      <select name="color"> 
  		'.join("\n", $option).'
	  </select>
	</li>
	<li>
	<input type="submit" name="submit" value="Отправить">
	</li>
  </ul>
</form>
</body>
';



