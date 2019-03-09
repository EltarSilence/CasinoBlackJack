<form method="POST">
	<div class="form-group">
		<select name="lang" id="lang" class="form-control" onchange="this.form.submit()">
<?php
foreach($langs as $short => $lang):
    $options .= '<option value="'.$short.'"';
    if(isset($_SESSION['lang']) && $_SESSION['lang'] === $short)
        $options .= 'selected';
    $options .= '>' . $lang;
    $options .= '</option>';
endforeach;
echo $options;
?>
		</select>
	</div>
</form>
