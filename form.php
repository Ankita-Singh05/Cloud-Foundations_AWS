<HTML>
<title> Test Page_Ankita</title>
<head>
<link rel="stylesheet" href="STYLE.CSS">
</head>
<BODY>
	<h1 align='center'> COVID DATABASE </h1>
  <h2 align="center"> SEARCH RECORDS FOR DATE:  </h2>


  <form action="covidsearch.php" method="post">
  	<div class="container">
      <div class="row">
        <div class="col-25">
          <label for="fname"> COVID SEARCH FORM</label>
        </div>
        <div class="col-75">
  				<input type="text" name="SEARCHID" value="Auto-Generated searchID" disabled />
        </div>
      </div>
  <?php /* <div class="row">
  		<div class="col-25">
  			<label for="member">DATE OF INTEREST</label>
  		</div>
  		<div class="col-75">
  			<input type="text" name="DATE"
        value="<?php echo (isset ($_POST['DATE'])) ? $_POST['DATE']: ''; ?>" />
  		</div>
  	</div> */ ?>
      <div class="row">
        <div class="col-25">
          <label for="date"> OR CHOOSE FROM CALENDAR</label>
        </div>
        <div class="col-75">
          <input type="date" id="DATE" name="DATE"
          value="<?php echo (isset ($_POST['DATE'])) ? $_POST['DATE']: ''; ?>"">

        </div>
      </div>

  				<style="height:200px"></style>
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
  			<input type="cancel" value="Cancel">
      </div>
    </form>
  </div>
