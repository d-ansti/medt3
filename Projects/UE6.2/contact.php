	<main>
		<h2 style="color: red;">Kontakt</h2>
        <h3>Wir freuen uns auf ihre Anfrage!</h3>
        <form action="contact2.php" method="post">
        	<p>Der Grund für ihre Anfrage!*</p>
        	<label><input type="radio" name="rsn" value="cat1" required=""> Freie Stellen</label>
			<br>
			<label><input type="radio" name="rsn" value="cat2" required=""> Produktreklamation</label>
			<br>
			<label><input type="radio" name="rsn" value="cat3" required=""> Produktneuheiten</label>
			<br>
			<p style="display: inline-block;">Anrede*</p>
			<label><input type="radio" name="anrd" value="cat1" required=""> Frau</label>
			<label><input type="radio" name="anrd" value="cat2" required=""> Herr</label>
			<br>
			<label>Vorname* <input type="text" name="vn" required=""></label>
			<label>Nachname* <input type="text" name="nn" required=""></label>
			<br>
			<label>Straße* <input type="text" name="str" required=""></label>
			<label>PLZ* <input type="text" name="plz" required=""></label>
			<br>
			<label>Ort* <input type="text" name="ort" required=""></label>
			<label>Land* <select size="1" name="cntr" required=""><option>Österreich</option>
													 			  <option>Deutschland</option>
													 			  <option>Schweiz</option></select></label>
			<br>
			<label>Tel.* <input type="text" name="tel" required=""></label>
			<label>E-Mail* <input type="text" name="eml" required=""></label>
			<br>
			<p>Anfrage*</p>
			<textarea name="anfrg" rows="5" style="width: 444px"></textarea>
			<br>
			<label><input type="submit" name="submitbtn" value="Anfrage senden"></label>
			<br>
			<p style="font-size: 8pt;">* Pflichtfelder - bitte ausfüllen</p>
        </form>
	</main>
