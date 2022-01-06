<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <title>Kokybes patikra</title>
  </head>
  <body>
   <section id="overlay">
      <img src="./logo/index.png" alt="Slacknet" id="logo">
      <hr>
        <h1>Kokybės patikra</h1>
        <hr>
		<!-- formos pradzia-->
		<form action="/rezultatas.html">
		
		<!--Emailas kas pildo-->
        <section class="email">
          <span>Kas pildo kokybės protokolą?</span>
          <br>
          <input type="checkbox" name="email" id="email" value="email">
          <label for="email">ultra@pam.sim</label>
		  <br>
		  <input type="checkbox" name="email" id="email" value="email">
		  <label for="email">lele@trim.se</label>
		  <br>
		  <input type="checkbox" name="email" id="email" value="email">
		  <label for="email">ano@bolt.pim</label>
		  <br>
		  <input type="checkbox" name="email" id="email" value="email">
		  <input type="text" name="email" id="email" value="Jūsų@paštas.lt">
		  <br>
          
        </section>
        
		<!--Uzsakovas-->
		
		
		
		<section class="client">
          <span>Užsakovas</span>
		  <div>
    <datalist id="client">
        <?php
			include 'csv_read.php'
			?>
    </datalist>
    <input  autoComplete="on" list="client"/> 
</div>
	<!--Uzsakymo ID-->
        </section>
		
		<section class="order_id">
		<span>Užsakymo ID</span>
		<br>
		<input type="number" name="order_id" id="order_id" >
         
		
		</section>
		
		<!--Detales ID-->
		
		<section class="part_id">
		<span>Detalės ID</span>
		<br>
		<input type="number" name="part_id" id="part_id" >
         
		
		</section>
		
		<!--Produkto tipas-->
		
		<section class="product_type">
		<span>Produkto tipas</span>
		<br>
		<div>
		<datalist id="product_type">
			<option>verzle</option>
			<option>varztas</option>
			<option>pintine</option>
			<option>freza</option>
		</datalist>
		<input  autoComplete="on" list="product_type"/> 
		</div>
		       
		
		</section>
		
		<!--Detaliu kiekis-->
		
		<section class="part_count">
		<span>Kiek detalių?</span>
		<br>
		<input type="number" name="part_count" id="part_count" >
         
		
		</section>
		
		<!--Jungciu tipas-->
        
		
		<section class="connection_type">
		<span>Jungčių tipas</span>
		<br>
		<input type="text" name="connection_type" id="connection_type" >
         
		
		</section>
		
		
		<!--Medziaga-->
        
		
		<section class="material">
		<span>Medžiaga</span>
          <br>
          <input type="radio" name="material" id="material" value="ti">
          <label for="ti">Titanas</label>
          <input type="radio" name="material" id="material" value="cocr">
          <label for="no">Kobaltas</label>
		  <input type="radio" name="material" id="material" value="peek">
          <label for="no">PEEK</label>
		
		</section>
		
		<section class="modeling">
          <span>Modeliavimo darbai</span>
          <br>
          <input type="checkbox" name="modeling" id="modeling" value="modeling">
          <label for="modeling">1</label>
		  <br>
		  <input type="checkbox" name="modeling" id="modeling" value="modeling">
		  <label for="modeling">2</label>
		  <br>
		  <input type="checkbox" name="modeling" id="modeling" value="modeling">
		  <label for="modeling">3</label>
		  <br>
		  <input type="checkbox" name="modeling" id="modeling" value="modeling">
		  <label for="modeling">4</label>
		  <br>
          
        </section>
		<!--formos pabaiga-->
		     <input type="submit" value="Pateikti">
		</form>    
        
	
	  </body>
</html>
