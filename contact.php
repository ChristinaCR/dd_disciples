<?php include('includes/doc.php');?>

<title>DD Contact</title>

<?php include('includes/header.php');?>

	<div id="wrapper">

		<div id="main">

            <div id="pagetitle">
                <h2>CONTACT FORM</h2>

            </div><!--end pagetitle-->

<div id="imgcont">
    <img src="images/DD_Picks.jpg" alt="Picks">
</div>

<div id="fcont">

        <form action="formhandler.php" method="post" id="form">
<label>Name:</label>
<input type="text" name="name" id="name">
<!--Don't forget that the label and input tags are inline therefore if you would like to present them vertically, in CSS, display them block-->
<label>Email:</label>
<input type="email" name="email" id="email">
<label>Comments:</label>
<textarea name="comments" id="comments" rows="6">
</textarea>
<br />
<button class="red" type="submit">Submit</button>   
</form>
</div>


        </div><!--end main-->      

	</div><!--end wrapper-->

    <footer>

<div id="copyright">
<ul>
    <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~cclark09%2Fweb120%2Ffinal%2Fcontact.php">
        <img class="css" style="border:0;width:88px;height:31px"
            src="images/valid-css-blue.png"
            alt="Valid CSS!" />
    </a>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fedison.seattlecentral.edu%2F~cclark09%2Fweb120%2Ffinal%2Fcontact.php">
    
<?php include('includes/footer.php');?>