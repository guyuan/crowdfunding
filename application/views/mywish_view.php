<html>
<body>
<?=form_open('mywish_controller/seek')?>
<table>
	<tr>
		<td><i><?="我想要 …"?></i></td>
		<td><?=form_input('keywords')?></td>
		
	</tr>	
	<tr>
		<td><i><?="描述"?></i></td>
		<td><?=form_textarea('describe')?></td>
	</tr>
	<tr>
		<td></td>
		<td><?=form_submit('submit', '去淘宝看看吧')?></td>
	</tr>
</table>
</form>
</body>
</html>
