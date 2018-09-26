<form action="" method="POST"><tr>
<td>Genre Film</td>
<td><br><br>
<input type="checkbox" name="checkboxvar[]" value="pilihan1">Horror<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan2">Action<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan3">Anime<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan4">Thrille<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan5">Animasi<br>
</td>
<td>Tempat Wisata Tujuan</td>
<td><br><br>
<input type="checkbox" name="checkboxvar[]" value="pilihan1">Bali<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan2">Raja Ampat<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan3">Pulau Derawan<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan4">Bangka Belitung<br>
<input type="checkbox" name="checkboxvar[]" value="pilihan5">Labuan Bajo<br>
</tr>
</table><input type="submit" class="button" value="kirim">
</form>
<?php
if (isset($_POST["checkboxvar"]))
{
	print_r($_POST["checkboxvar"]);
}
?>
<a href="form.php">Logut</a><br>
