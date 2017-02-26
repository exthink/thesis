var base_url="http://localhost/gym-management-system/index.php/";

var cusid;
var etypeid;
var cat_id;
var y, t;
var select_eid;

function saveItemUser(){
	var cus_id=document.getElementById('cus_id').value;
	var lname=document.getElementById('lname').value;
	var fname=document.getElementById('fname').value;
	var m_i=document.getElementById('m_i').value;
	var b_date=document.getElementById('b_date').value;
	var sex=document.getElementById('sex').value;
	var c_status=document.getElementById('c_status').value;
	var home_add=document.getElementById('home_add').value;
	var item_user_type=document.getElementById('item_user_type').value;

	var vars="cus_id="+cus_id+"&lname="+lname+"&fname="+fname+"&m_i="+m_i+"&b_date="+b_date+"&sex="+sex+"&c_status="+c_status+"&home_add="+home_add+"&item_user_type="+item_user_type;
	// alert(vars);
	// return;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "addNew";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			//alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("result").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("result").innerHTML = "processing...";
}

function saveEquipmentType(){
	var item_code=document.getElementById('item_code').value;
	var description=document.getElementById('description').value;

	var vars="item_code="+item_code+"&description="+description;
	// alert(vars);
	// return;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "addNewEquipmentType";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			//alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("result").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("result").innerHTML = "processing...";
}

function saveEquipments(){
	var item_code=document.getElementById('item_code').value;
	var date_purchased=document.getElementById('date_purchased').value;
	var remarks=document.getElementById('remarks').value;

	var vars="item_code="+item_code+"&date_purchased="+date_purchased+"&remarks="+remarks;
	// alert(vars);
	// return;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "addNewEquipments";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			//alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("result").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("result").innerHTML = "processing...";
}

function saveActiveEquipment(){
	var borrower_id=document.getElementById('borrower_id').value;
	var date_borrowed=document.getElementById('date_borrowed').value;
	var lend_by=document.getElementById('lend_by').value;
	var status=document.getElementById('status').value;

	if(borrower_id==""){
		alert("Please select a Borrower.");
		return;
	}

	var vars="eid="+select_eid+"&borrower_id="+borrower_id+"&date_borrowed="+date_borrowed+"&lend_by="+lend_by+"&status="+status;
	alert(vars);
	// return;
	var hr = new XMLHttpRequest();
	var url = "addNewActiveEquipment";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result").innerHTML = return_data;

			}
		}
	hr.send(vars);
	document.getElementById("result").innerHTML = "processing...";
}


function searchInventory(eqs) {
	// alert(eqs);
	var vars = "search="+eqs;
	// alert(vars);

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchInventory";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("inventory_results").innerHTML = return_data;
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_equipments").innerHTML = "processing...";
}

function selectEquipment(eid){
	select_eid=eid;
	if(select_eid=="0"){
		alert("Please select an equipment.");
		return;
	}
}

function deleteActiveEquipment(cusid,bd){
	select_eid=cusid;
	borrower_id=bd;
	del_cusid=cusid;
	$("#modalDeleteActiveEquipment").modal("show");
}

function yesDeleteActiveEquipment(){
	var date_borrowed=document.getElementById('date_borrowed').value;
	var date_returned=document.getElementById('date_returned').value;
	var lend_by=document.getElementById('lend_by').value;
	var statuses=document.getElementById('statuses').value;
	var remarks=document.getElementById('remarks').value;

	var vars="eid="+select_eid+"&borrower_id="+borrower_id+"&date_borrowed="+date_borrowed+"&date_returned="+date_returned+"&lend_by="+lend_by+"&statuses="+statuses+"&remarks="+remarks+"&cusid="+del_cusid;
	// var vars="cusid="+del_cusid;
	 // alert(vars);
	var url = "deleteactiveequipment";
	var hr = new XMLHttpRequest();
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		//alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var data = hr.responseText;
				$("#"+del_cusid).fadeOut(2000);
				$("#modalDeleteActiveEquipment").modal("hide");
		}
	}
	hr.send(vars);
}

function searchActiveEquipments(ective_equipment) {
	// alert(ective_equipment);
	var vars = "search="+ective_equipment;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchActiveEquipments";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("result").innerHTML = return_data;
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("result").innerHTML = "processing...";
}

function searchEquipments(eq) {
	// alert(eq);
	var vars = "search="+eq;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchEquipments";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_equipments").innerHTML = return_data;
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_equipments").innerHTML = "processing...";
}

function searchEquipmentType(etype) {
	// alert(etype);
	var vars = "search="+etype;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchEquipmentType";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_equipment_type").innerHTML = return_data;
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_equipment_type").innerHTML = "processing...";
}

function searchUserAccount(user) {
	// alert(user);
	var vars = "search="+user;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchUserAccount";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_account").innerHTML = return_data;
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_account").innerHTML = "processing...";
}

function login(){
	var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;

	if(username==""){
		alert("Please enter username..");
		return;
	}
	if(password==""){
		alert("Please enter password..");
		return;
	}	

	var vars="username="+username+"&password="+password;
	// alert(vars);

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = base_url+"admin/check_username";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var login = JSON.parse(hr.responseText);
				if(login.message!=""){
					document.getElementById('msg').innerHTML = "<div style='color:white;font-family:calibri;font-size:14px;'>"+login.message+"</div>";
				}else{
					// document.getElementById('msg').innerHTML = "Loading...";
					window.open(base_url+"admin/home","_self");
				}
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	// document.getElementById("result").innerHTML = "processing...";	
}

function signUp(){
	// alert("hello");
	$("#modalSignUp").modal("show");
}

// function saveSignUp(){
// 	// alert("hello");
// 	var customer_id=document.getElementById('customer_id').value;
// 	var l_name=document.getElementById('l_name').value;
// 	var f_name=document.getElementById('f_name').value;
// 	var m_i_i=document.getElementById('m_i_i').value;
// 	var b_date_day=document.getElementById('b_date_day').value;
// 	var sex_x=document.getElementById('sex_x').value;
// 	var c_status_tus=document.getElementById('c_status_tus').value;
// 	var home_add_ress=document.getElementById('home_add_ress').value;

// 	if(customer_id==''){
// 		alert('Please enter your ID');
// 		return;
// 	}

// 	if(l_name==''){
// 		alert('Please enter your lastname');
// 		return;
// 	}

// 	if(f_name==''){
// 		alert('Please enter your firstname');
// 		return;
// 	}

// 	if(m_i_i==''){
// 		alert('Please enter your mi');
// 		return;
// 	}

// 	if(b_date_day==''){
// 		alert('Please enter your birthday');
// 		return;
// 	}

// 	if(sex_x==''){
// 		alert('Please select your gender');
// 		return;
// 	}

// 	if(c_status_tus==''){
// 		alert('Please select your civilstatus');
// 		return;
// 	}

// 	if(home_add_ress==''){
// 		alert('Please enter your address');
// 		return;
// 	}	

// 	var vars="customer_id="+customer_id+"&l_name="+l_name+"&f_name="+f_name+"&m_i_i="+m_i_i+"&b_date_day="+b_date_day+"&sex_x="+sex_x+"&c_status_tus="+c_status_tus+"&home_add_ress="+home_add_ress;
// 	// alert(vars);
// 	// return;

// 	var hr = new XMLHttpRequest();
// 	// Create some variables we need to send to our PHP file
// 		var url = base_url+"admin/addNewSignUp";
// 		hr.open("POST", url, true);
// 		// Set content type header information for sending url encoded variables in the request
// 		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// 		// Access the onreadystatechange event for the XMLHttpRequest object
// 		hr.onreadystatechange = function() {
// 			alert(hr.readyState + "-" + hr.status)
// 			if(hr.readyState == 4 && hr.status == 200) {
// 				var return_data = hr.responseText;
// 				alert(return_data);
// 				$("#modalSignUp").modal("hide");
// 			}
// 		}
// 		//Send the data to PHP now... and wait for response to update the status div
// 	hr.send(vars); // Actually execute the request
// 	// document.getElementById("result").innerHTML = "processing...";
// }

function searchItemUser(cus){
	// alert(cus);
	var vars = "search="+cus;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchItemUser";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_result").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_result").innerHTML = "processing...";	
}

function searchItemUser2(cus){
	$("#modalDisplayUserDetails").modal("show");
	var vars = "search="+cus;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchItemUser2";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_result2").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_result2").innerHTML = "processing...";	
}

var edit_cusid
function editItemUser(cusid){
	// alert(id);
	edit_cusid = cusid;
	$("#modalEditItemUser").modal("show");

	var vars = "cusid="+cusid;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "displayItemUserInfo";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var item_user = JSON.parse(hr.responseText);
				// document.getElementById('id').value=item_user.id;
				document.getElementById('lastname').value=item_user.lastname;
				document.getElementById('firstname').value=item_user.firstname;
				document.getElementById('mi').value=item_user.mi;
				document.getElementById('gender').value=item_user.gender;
				document.getElementById('bdate').value=item_user.bdate;
				document.getElementById('civilstatus').value=item_user.civilstatus;
				document.getElementById('address').value=item_user.address;
				document.getElementById('item_usertype').value=item_user.item_usertype;
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request	
}


function updateItemUser() {
	// var cusid=document.getElementById('id').value;
	var lastname=document.getElementById('lastname').value;
	var firstname=document.getElementById('firstname').value;
	var mi=document.getElementById('mi').value;
	var bdate=document.getElementById('bdate').value;
	var gender=document.getElementById('gender').value;
	var civilstatus=document.getElementById('civilstatus').value;
	var address=document.getElementById('address').value;
	var item_usertype=document.getElementById('item_usertype').value;
	var vars="cusid="+edit_cusid+"&lastname="+lastname+"&firstname="+firstname+"&mi="+mi+"&gender="+gender+"&bdate="+bdate+"&civilstatus="+civilstatus+"&address="+address+"&item_usertype="+item_usertype;

	// alert(vars);
	var url = "updateItemUser";
	var hr = new XMLHttpRequest();

		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var item_user = JSON.parse(hr.responseText);
				// alert(hr.responseText);
				if(item_user.message==1) {
					alert("Item users has been updated.");
					//document.getElementById("cusid"+edit_cusid).innerHTML = item_user.id;
					document.getElementById("lastname"+edit_cusid).innerHTML = item_user.lastname;
					document.getElementById("firstname"+edit_cusid).innerHTML = item_user.firstname;
					document.getElementById("mi"+edit_cusid).innerHTML = item_user.mi;
					document.getElementById("bdate"+edit_cusid).innerHTML = item_user.bdate;
					document.getElementById("gender"+edit_cusid).innerHTML = item_user.gender;
					document.getElementById("civilstatus"+edit_cusid).innerHTML = item_user.civilstatus;
					document.getElementById("address"+edit_cusid).innerHTML = item_user.address;
					document.getElementById("item_usertype"+edit_cusid).innerHTML = item_user.item_usertype;
				}else
					alert("Item users was not updated.");				
		
				$("#modalEditItemUser").modal("hide");				
			}

		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	//document.getElementById("result").innerHTML = "processing...";
}

var edit_etypeid
function editEType(etypeid){
	// alert(etypeid);
	edit_etypeid = etypeid;
	$("#modalEditEType").modal("show");

	var vars = "etypeid="+etypeid;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "displayETYPEUserInfo";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var e_type = JSON.parse(hr.responseText);
				// document.getElementById('id').value=e_type.id;
				document.getElementById('item_code').value=e_type.item_code;
				document.getElementById('description').value=e_type.description;
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request	
}


function updateEType() {
	// var etypeid=document.getElementById('id').value;
	var item_code=document.getElementById('item_code').value;
	var description=document.getElementById('description').value;
	var vars="etypeid="+edit_etypeid+"&item_code="+item_code+"&description="+description;

	// alert(vars);
	var url = "updateEType";
	var hr = new XMLHttpRequest();

		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var eq_type = JSON.parse(hr.responseText);
				// alert(hr.responseText);
				if(eq_type.message==1) {
					alert("Equipment type has been updated.");
					//document.getElementById("etypeid"+edit_etypeid).innerHTML = eq_type.id;
					document.getElementById("item_code"+edit_etypeid).innerHTML = eq_type.item_code;
					document.getElementById("description"+edit_etypeid).innerHTML = eq_type.description;
				}else
					alert("Equipment type was not updated.");				
		
				$("#modalEditEType").modal("hide");				
			}

		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	//document.getElementById("result").innerHTML = "processing...";
}

var del_cusid;
function deleteItemUser(cusid) {
	del_cusid=cusid;
	$("#modalDeleteItemUser").modal("show");
}

function yesDeleteItemUser() {
	var vars="cusid="+del_cusid;
	var url="deleteItemUser";

		var hr = new XMLHttpRequest();
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			//alert(hr.readyState + "-" + hr.status);
			if(hr.readyState == 4 && hr.status == 200) {
				var data = hr.responseText;
					$("#"+del_cusid).fadeOut(2000);
					$("#modalDeleteItemUser").modal("hide");			
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	//document.getElementById("result").innerHTML = "processing...";
}

var del_user_id;
function deleteUser(user_id) {
	del_user_id=user_id;
	$("#modalDeleteUser").modal("show");
}

function yesDeleteUser() {
	var vars="user_id="+del_user_id;
	var url="deleteUser";

		var hr = new XMLHttpRequest();
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status);
			if(hr.readyState == 4 && hr.status == 200) {
				var data = hr.responseText;
					$("#"+del_user_id).fadeOut(2000);
					$("#modalDeleteUser").modal("hide");			
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	//document.getElementById("result").innerHTML = "processing...";
}

var del_eq_id;
function deleteEquipments(eq_id) {
	del_eq_id=eq_id;
	$("#modalDeleteEquipments").modal("show");
}

function yesDeleteEquipments() {
	var vars="eq_id="+del_eq_id;
	var url="deleteEquipments";

		var hr = new XMLHttpRequest();
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status);
			if(hr.readyState == 4 && hr.status == 200) {
				var data = hr.responseText;
					$("#"+del_eq_id).fadeOut(2000);
					$("#modalDeleteEquipments").modal("hide");			
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	//document.getElementById("result").innerHTML = "processing...";
}

var del_etype_id;
function deleteEType(etype_id) {
	del_etype_id=etype_id;
	$("#modalDeleteEType").modal("show");
}

function yesDeleteEType() {
	var vars="etype_id="+del_etype_id;
	var url="deleteEType";

		var hr = new XMLHttpRequest();
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status);
			if(hr.readyState == 4 && hr.status == 200) {
				var data = hr.responseText;
					$("#"+del_etype_id).fadeOut(2000);
					$("#modalDeleteEType").modal("hide");			
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	//document.getElementById("result").innerHTML = "processing...";
}

function pakGanern(){
	$("#modalpakGanern").modal("show");	
}

function store_desc(){
	$("#modalStore_Desc").modal("show");	
}

function changePass(){
	// alert("hello");
	// edit_userid = idnum;
	$("#modalChangePass").modal("show");
}

function checkMe(){
	var cpw = document.getElementById('cpw').value;
	if(cpw==''){
		alert('Please type your password..')
		return;
	}

	var vars="currpw="+cpw;

	var hr = new XMLHttpRequest();
	//create content variable we need to sennd to our php file
	 var url = "checkpass";
	 // var url = "profile";
	 hr.open("POST",url,true);
	 //set content type header information for sending url encoded variable inthe request 
	 hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 	//access the  onreadystatechange event for XMLHttpRequest object
	 hr.onreadystatechange = function(){
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			// alert(hr.responseText);
			var login=hr.responseText;
			document.getElementById('result').innerHTML=login;
		}
	 }
	 //send the data to php now...and wait for response to update the status div
	 hr.send(vars);//actually execute the request
}

function changePw(){
	var newpass=document.getElementById('nwpw').value;
	var retnewpass=document.getElementById('rnwpw').value;
	if(newpass==""){
		alert('Please fill this box');
		return;
	}

	if(newpass!=retnewpass){
		alert('Password did not match');
		document.getElementById('nwpw').value="";
		document.getElementById('rnwpw').value="";
		return;
	}

	var vars = "nwpass="+newpass;
	// alert(vars);

	var hr = new XMLHttpRequest();
	//create content variable we need to sennd to our php file
	 var url = "changepassword";
	 // var url = "profile";
	 hr.open("POST",url,true);
	 //set content type header information for sending url encoded variable inthe request 
	 hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 	//access the  onreadystatechange event for XMLHttpRequest object
	 hr.onreadystatechange = function(){
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			// alert(hr.responseText);
			var return_data = hr.responseText;
			alert(return_data);
			$('#modalChangePass').modal('hide');
		}
	 }
	 //send the data to php now...and wait for response to update the status div
	 hr.send(vars);//actually execute the request
}

function saveUserAccount(){
	// alert('dlsf');
	var uname = document.getElementById('uname').value;
	var pass = document.getElementById('pass').value;
	var usertype = document.getElementById('usertype').value;
	var cus_id = document.getElementById('cus_id').value;

	if(uname==''){
		alert('complete the information');
		return;
	}

	if(pass==''){
		alert('complete the information');
		return;
	}

	if(usertype==''){
		alert('complete the information');
		return;
	}

	if(cus_id==''){
		alert('complete the information');
		return;
	}

	var vars = "uname="+uname+"&pass="+pass+"&usertype="+usertype+"&cus_id="+cus_id;
	// alert(vars);
	var hr = new XMLHttpRequest();
	//create content variable we need to sennd to our php file
	 var url = "saveUser";
	 // var url = "profile";
	 hr.open("POST",url,true);
	 //set content type header information for sending url encoded variable inthe request 
	 hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 	//access the  onreadystatechange event for XMLHttpRequest object
	 hr.onreadystatechange = function(){
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			// alert(hr.responseText);
			var return_data = hr.responseText;
			document.getElementById('uname').value ="";
			document.getElementById('pass').value ="";
			document.getElementById('usertype').value ="";
			document.getElementById('cus_id').value ="";
			alert(return_data);
		}
	 }
	 //send the data to php now...and wait for response to update the status div
	 hr.send(vars);//actually execute the request
}