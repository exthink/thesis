

			<div class="row" id="moreInfo">
			<div class="col-sm-12">
				<div class="modal fade" id="modalEditProduct">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">Edit Products</h4>		
							</div>	
													
							<div class="modal-body" style="height:160px;" align="center">
								<table class=''>						
									<tr>
										<td class='ITEM_CODE'>&nbsp;&nbsp;Item Code:</td>	
										<td>
											<input type='text'  class='form-control' id='products_code' placeholder='Item Code' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
										</td>				
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>						
									<tr>
										<td class='DESC'>&nbsp;&nbsp;Description:	
										<td>
											<input type='text'  class='form-control' id='description' placeholder='Description' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
										</td>					
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>
									<tr>
										<td class='QTY'>&nbsp;&nbsp;Quantity:	
										<td>
											<input type='text'  class='form-control' id='quantity' placeholder='Quantity' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
										</td>					
									</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>																			
									<tr>
										<td class='PRESYO'>&nbsp;&nbsp;Price:</td>	
										<td>
											<input type='text'  class='form-control' id='price' placeholder='Price' style='height:22px;width:400px;border-radius:0px;font-size:12px;' />
										</td>	
							    	</tr>
									<tr>
										<td style='padding-top:10px;'></td>
									</tr>		    				    		
								</table>
							</div><!--end of mdal body-->	
															
							<div class="modal-footer" style="background-color:#dddddd;">
								<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
								<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick="updateProduct()">Update</button>							
							</div><!--end of mdal footer-->

						</div><!--end of modal-content-->
					</div><!--end of modal-dialog-->
				</div><!--end of mymodal-->				


				<div class="modal fade" id="modalDeleteProduct">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="height:20px;background-color:#90bb4f;">
								<button class="close" data-dismiss="modal" style="margin-top:-10px;">&times;</button>

								<h4 class="modal-title" style="color:white;font-size:12px;font-weight:bold;margin-top:-6px;">Delete Item</h4>		
							</div>	
													
							<div class="modal-body" style='height:60px;'>
								<h4 style = "color:black; text-align:center; font-size:15px; font-family:arial;">Are you sure you want to delete this item?</h4>		
							</div><!--end of mdal body-->	
															
							<div class="modal-footer" style="background-color:#dddddd;">
								<button class="btn btn-danger" data-dismiss="modal" type="button" style="border-radius:0px;">No</button>
								<button class="btn btn-primary"  type="button"   data-dismiss="modal" data-dismiss="modal" style="border-radius:0px;" onclick='yesDeleteProduct()'>Yes</button>
							</div><!--end of mdal footer-->

						</div><!--end of modal-content-->
					</div><!--end of modal-dialog-->
				</div><!--end of mymodal-->			

				<!-- FOR SEARCH PRODUCTS -->

				<div class="row" id="moreInfo">
					<div class="col-sm-12" style="padding-top:70px;">
						<h3 style="font-size:16px;font-weight:bold;">Search Products</h3>
						<table class=''>
							<tr>
								<td>
									<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
									<input type='text' class='form-control' id='search' onkeyup='searchProducts(this.value)' placeholder='Search this site here...' style='height:22px;width:1165px;border-radius:0px;font-size:12px;'></td>
								</td>
							</tr>						
						</table>

						<h3><img src="<?php echo base_url(); ?>ext_files/images/128px/compose.png" style="height:50px;width:50px;"></h3>
						<table class=''>
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='pro_code' placeholder='Procducts Code' style='height:22px;width:200px;border-radius:0px;font-size:12px;' /></td>					
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>											
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='desc' placeholder='Description' style='height:22px;width:400px;border-radius:0px;font-size:12px;' /></td>					
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='qty' placeholder='Quantity' style='height:22px;width:80px;border-radius:0px;font-size:12px;' /></td>					
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>													
							<tr>
								<td style='background-color:#90bb4f;height:26px;margin-left:50px;'>
								<input type='text' class='form-control' id='pricess' placeholder='Price' style='height:22px;width:150px;border-radius:0px;font-size:12px;' /></td>					
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>
					    	<tr>
								<td class='' align='center'>						    
									<button class='btn btn-primary' id='btn2' onclick='saveProducts();'/>SAVE</button></td>								
							</tr>
							<tr>
								<td style='padding-top:10px;'></td>
							</tr>																   		
							<tr>
								<td><div id='result' style='height:30px;'></div></td>
							</tr>	
						</table>

						<h3></h3>
						<table class='' align='' style='margin-top:-209px;margin-left:420px;'>					
							<tr>
								<td>
									<div id='products_result'></div>
								</td>
							</tr>
						</table>						
					</div>
				</div>	
