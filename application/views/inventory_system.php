

						<div class="row" id="moreInfo">
							<div class="col-sm-8" style="padding-top:90px;" align="left">
								<h3 style="font-size:16px;font-weight:bold;" align="left">Borrow Equipments</h3>
								<table class='' align='left'>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>														
									<tr>
							



										<td>Borrow Item:</td>
										<td><select id='search' class='form-control' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:80px;' onchange='searchInventory(this.value)'>
										<option value=''>--Select--</option>
										<?php
											foreach ($equipment_type as $e_type) {
												echo "<option value='".$e_type->item_code."'>";
													echo $e_type->item_code." | ".$e_type->description;
													//echo $e_type->id;
												echo "</option>";
											}
										?>
										</select></td>
									</tr>
									<td colspan='2'>
									<div id='inventory_results' style='margin-top:20px;'>
									</br><table class='table table-condensed table-striped table-bordered'>
										<thead>

										</thead>	
										<tbody>
											<?php

											?>
										</tbody>									
									</table>																			
										<tr>
											<td>Item Users:</td>							
											<td><select id='borrower_id' class='form-control' style='height:35px;width:250px;border-radius:0px;font-size:12px;margin-left:80px;'>
											<option value=''>--Select--</option>
											<?php
												foreach ($item_users as $its) {
													echo "<option value='".$its->id."'>";
														echo $its->id." | ".$its->lastname.", " .$its->firstname." " .$its->mi.".";
														//echo $its->id;
													echo "</option>";
												}
											?>
											</select><br /></td>
										</tr>		
									<tr>
										<td>Date:</td>
										<!-- <td><form action="demo.html" id="myForm">
										    <p>
										        <input type="datetime" name="anniversaire" style="border:none;" readonly="text" id="date_borrowed"/>
										    </p>
										</form></td> -->															
										<td><p>
										       <?php echo "<input type='text' id='date_borrowed' readonly='' style='height:35px;width:150px;border-radius:0px;font-size:12px;margin-left:80px;background:transparent;border:none;font-weight:bold;font-family:verdana;' value='".date('y/m/d')."'";?>   /> <br /></td>
										    </p></td>		
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>									
									<tr>
										<td>Status:</td>
										<td><input type='text' id='status' style='border:none;margin-left:80px;font-weight:bold;font-family:verdana;' readonly='text' value='Out' /></td>
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>														
									<tr>
										<td><input type='hidden' id='lend_by' style='border:none;' readonly='text' value='<?php echo $this->session->id;?>' /></td>
									</tr>													    	
							    	<tr>
										<td class='back_style'>						    
											<button class='btn btn-primary' id='btn' onclick='saveActiveEquipment();'/>SAVE</button></td>								
									</tr>	
								</table>
		
				

<html>
    <head>
    <title>jQuery enable/disable button</title>
        <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
        <script type='text/javascript'>
            $(function () {
                $('#searchInput').keyup(function () {
                    if ($(this).val() == '') {
                        //Check to see if there is any text entered
                        // If there is no text within the input ten disable the button
                        $('.enableOnInput').prop('disabled', true);
                    } else {
                        //If there is text in the input, then enable the button
                        $('.enableOnInput').prop('disabled', false);
                    }
                });
            }); 
        </script>
        <style type='text/css'> /* Lets use a Google Web Font :) */
        @import url(http://fonts.googleapis.com/css?family=Finger+Paint); /* Basic CSS for positioning etc */
        body {
            font-family: 'Finger Paint', cursive;
            background-image: url('bg.jpg');
        }
    
        #frame {
            width: 700px;
            margin: auto;
            margin-top: 125px;
            border: solid 1px #CCC; /* SOME CSS3 DIV SHADOW */
            -webkit-box-shadow: 0px 0px 10px #CCC;
            -moz-box-shadow: 0px 0px 10px #CCC;
            box-shadow: 0px 0px 10px #CCC; /* CSS3 ROUNDED CORNERS */
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
            border-radius: 5px;
            background-color: #FFF;
        }
    
        #searchInput {
            height: 30px;
            line-height: 30px;
            padding: 3px;
            width: 300px;
        }
    
        #submitBtn {
            height: 40px;
            line-height: 40px;
            width: 120px;
            text-align: center;
        }
    
        #frame h1 {
            text-align: center;
        }
    
        #frame form {
            text-align: center;
            margin-bottom: 30px;
        } </style>
    </head>
    <body>
    <div id='frame'>
        <div class='search'><h1>jQuery Enable and Disable button</h1>
            <form method='post'>
                <input type='text' name='searchQuery' id='searchInput' />
                <input type='submit' name='submit' id='submitBtn' class='enableOnInput' disabled='disabled' />
                 <input type='submit' name='submit' id='submitBtn' class='enableOnInput' disabled='disabled' />
                  <input type='submit' name='submit' id='submitBtn' class='enableOnInput' disabled='disabled' />
                   <input type='submit' name='submit' id='submitBtn' class='enableOnInput' disabled='disabled' />
                    <input type='submit' name='submit' id='submitBtn' class='enableOnInput' disabled='disabled' />
            </form>
        </div>
    </div>
    </body>
</html>
