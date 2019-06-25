<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<?php include("includes/header.php"); ?>
<main class="bundle-content">
  <div class="container">
    
	<div class="container">
	<form style="padding: 20px;">
		<div class="form-group">
		  <label for="exampleFormControlInput1">First Name</label>
		  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Please enter your first name">
		</div>
		<div class="form-group">
		  <label for="exampleFormControlInput1">Last Name</label>
		  <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Please enter your Last Name">
		</div>
		<div class="form-group">
		  <label for="exampleFormControlInput1">Phone</label>
		  <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="name@example.com">
		</div>
	  <div class="form-group">
	    <label for="exampleFormControlInput1">Email</label>
	    <input type="email" class="form-control" id="exampleFormControlInput4" placeholder="name@example.com">
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Institution</label>
	    <select class="form-control" id="exampleFormControlSelect1">
	      <option>University of West Georgia</option>
	      <option>Clayton State University</option>
	      <option>Albany State University</option>
	      <option>Kennesaw State University</option>
	      <option>University of Georgia</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect2">Which program are you interest in?</label>
	    <select multiple class="form-control" id="exampleFormControlSelect2">
	      <option>Bachelor's in Nursing</option>
	      <option>Master's in Nursing</option>
	      <option>Bachelor's in IT</option>
	      <option>Nexus Degree FinTech</option>
	      <option>Master's in Financial Accounting</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlTextarea1">Please list any specific questions you have regarding this program.</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

</div>

</main>
<?php include("includes/footer.php"); ?>
<script>
  

</html>