<?php include("metatag.php"); ?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
				               <!-- Pre Page Content -->
				               
            <div id="pre-page-content">
              <h1><!-- Page Content -->
            </h1>
            </div>
            <div id="page-content">
              <!-- END Breadcrumb -->
              <!-- General Forms Block -->
<div class="block block-themed block-last">
                    <!-- General Forms Title -->
                    <div class="block-title">
                        <h4>Artist Info</h4>
                    </div>
                    <!-- END General Forms Title -->

                    <!-- General Forms Content -->
                    <div class="block-content">
					<?php include('val.php');?>
<form name="formID" id="formID" method="post" action="artist_info_insert.php">
  <table width="200" height="537" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>ARTIST INFORMATION </strong></div></td>
    </tr>
    <tr>
      <td><strong>FIRST NAME </strong></td>
      <td><input name="fname" type="text" id="fname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>MIDDLE NAME </strong></td>
      <td><input name="middlename" type="text" id="middlename"class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>LAST NAME </strong></td>
      <td><input name="lastname" type="text" id="lastname" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td><strong>PHONE </strong></td>
      <td><input name="phone" type="text" id="phone" class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td><strong>GENDER</strong></td>
      <td><input name="gender" type="radio" value="male">      
        <strong>Male
        <input name="gender" type="radio" value="female" checked>
      Female</strong></td>
    </tr>
    <tr>
      <td><strong>EMAILID </strong></td>
      <td><input name="emailid" type="text" id="emailid" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td><strong>ADDRESS</strong></td>
      <td><textarea name="address" id="address" class="validate[required,custom[address]]"></textarea></td>
    </tr>
    <tr>
      <td><strong>PINCODE</strong></td>
      <td><input name="pincode" type="text" id="pincode" class="validate[required,custom[onlyNumber]]"></tr>
	  </td>
    <tr>
      <td><strong>SPECILIZATION_ART</strong></td>
      <td><select name="specilization_art" size="1" id="specilization_art">
        <option>SELECT</option>
        <option value="DRAWING">DRAWING</option>
        <option value="PAINTING">PAINTING</option>
        <option value="SCULPTURE">SCULPTURE</option>
        <option value="CERAMICS">CERAMICS</option>
                  </select></td>
    </tr>
    <tr>
      <td><strong>TOTAL_EXPERIANCE</strong></td>
      <td><select name="total_experiance" size="1" id="total_experiance">
        <option>SELECT</option>
        <option value="0-5">0-5</option>
        <option value="5-10">5-10</option>
        <option value="10-15">10-15</option>
        <option value="15-ABOVE">15-ABOVE</option>
            </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
      </div></td>
    </tr>
  </table>
</form>
 </div>
                    <!-- END General Forms Content -->
              </div>
                <!-- END General Forms Block -->
            </div>
            <!-- END Page Content -->
			
			
<?php include("footer.php"); ?>
