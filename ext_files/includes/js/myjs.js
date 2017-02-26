var base_url="http://localhost/gym-management-system/index.php/";

var cusid;
var etypeid;
var cat_id;
var y, t;
var select_eid;var select_id;
var select_nid;
var gamecount =1;
var play1count =0;
var play2count =0;
var play3count =0;
var play4count =0;
var play5count =0;
var play6count =0;
var play7count =0;
var play8count =0;
var play9count =0;
var play10count =0;
var play11count =0;
var play12count =0;
var play13count =0;
var play14count =0;
var play15count =0;
var gamecountVB =1;
var play1countVB =0;
var play2countVB =0;
var play3countVB =0;
var play4countVB =0;
var play5countVB =0;
var play6countVB =0;
var play7countVB =0;
var play8countVB =0;
var play9countVB =0;
var play10countVB =0;
var play11countVB =0;
var play12countVB =0;
var play13countVB =0;
var play14countVB =0;
var play15countVB =0;

function selectEquipment(eid){
	select_eid=eid;
	alert(eid);
	if(select_eid=="0"){
		alert("Please select an equipment.");
		return;
	}
}

function selectStudent(id){
	select_id=id;
	// alert(select_id);
	if(select_id=="0"){
		alert("Please select student fitness user.");
		return;
	}
}

function selectNonStud(nid){
	select_nid=nid;
	alert(select_nid);
	if(select_nid=="0"){
		alert("Please select non student fitness user.");
		return;
	}
}

var filter;
function changeFilter(sed){
	var filter=sed;
	// alert(s);
	var vars="filter="+sed;
	alert(vars);
	var hr = new XMLHttpRequest();
	var url = "changeSearchFilter";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("resultzz").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("resultzz").innerHTML = "processingpasdafsdf...";

}

var NonStudfilter;
function changeNonStudFilter(seds){
	var NonStudfilter=seds;
	// alert(s);
	var vars="filter="+seds;
	alert(vars);
	var hr = new XMLHttpRequest();
	var url = "changeNonStudSearchFilter";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("resultzs").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("resultzs").innerHTML = "processingpasdafsdf...";

}

var BorrowFilter;
function changeBorrowFilter(sedsz){
	var BorrowFilter=sedsz;
	// alert(s);
	var vars="filter="+sedsz;
	alert(vars);
	var hr = new XMLHttpRequest();
	var url = "changeBorrowSearchFilter";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result").innerHTML = "processingpasdafsdf...";

}

function startTimer(srcp) {
	
	var vars='a'+srcp;
	alert(vars);
  userInput = document.getElementById('userTime').value;
  	if(userInput.length == 0){
		alert("Please enter a value");
	} else {
	var numericExpression = /^[0-9]+$/;
	if(!userInput.match(numericExpression)){
	alert("Please enter a number")
	} else {

   function display( notifier, str ) {
    document.getElementById(notifier).innerHTML = str;
  }
        
  function toMinuteAndSecond( x ) {
  	var days        = Math.floor(x/24/60/60);
    var hoursLeft   = Math.floor((x) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    return Math.floor(hoursLeft/3600) + ":" + Math.floor(minutesLeft/60) + ":" + x%60;
  }
        
  function setTimer( remain, actions ) {
    (function countdown() {
       display(vars, toMinuteAndSecond(remain));         
       actions[remain] && actions[remain]();
       (remain -= 1) >= 0 && setTimeout(arguments.callee, 1000);
    })();
  }

  setTimer(userInput, {
     0: function () { display(vars, "<p style='color:red';><strong>Time is up</strong></hp>");       }
  }); 
}  
}
}
function deleteActiveFitnessStudent(id,bd){
	select_id=bd;
	alert(select_id);
	del_fid=id;
	var vars="id="+id;
	alert(vars);
	var hr = new XMLHttpRequest();
	var url = "displayactivefitnessuser";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	// alert(del_itemuserid);
	$("#modalDeleteActiveFitnessStudent").modal("show");
		hr.onreadystatechange = function() {
		//alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var fitness = JSON.parse(hr.responseText);
			document.getElementById('fhid').value=fitness.fhid;
			document.getElementById('idnum').value=fitness.idnum;

		}
	}
	hr.send(vars);

}
function yesDeleteActiveFitnessStudent(){
	var fhid=document.getElementById('fhid').value;
	var status3=document.getElementById('status3').value;
	var date_out=document.getElementById('date_out').value;
	var vars="idnum="+select_id+"&fhid="+fhid+"&date_out="+date_out+"&status3="+status3;
	alert(vars);
	var url = "deleteActiveFitnessStudent";
	var hr = new XMLHttpRequest();
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var data = hr.responseText;
				$("#"+select_id).fadeOut(2000);
				$("#modalDeleteActiveFitnessStudent").modal("hide");

		}
	}
	hr.send(vars);

	// alert(vars);
}
function saveActiveFitnessUser(){
	// var cid=document.getElementById('cid').value;
	var date_in=document.getElementById('date_in').value;
	var status=document.getElementById('status').value;
	// alert(select_id);	
	var vars="id="+select_id+"&date_in="+date_in+"&status="+status;
	alert(vars);
	// return;
	var hr = new XMLHttpRequest();
	var url = "addNewActiveFitnessUser";
	hr.open("POST", url, true);

	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
		
			document.getElementById("result3").innerHTML = return_data;
			
			}
		}
	hr.send(vars);
	document.getElementById("result3").innerHTML = "processingzzzzz...";

}
function saveActiveNonStudFitnessUser(){
	// var cid=document.getElementById('cid').value;
	var date_in=document.getElementById('date_in').value;
	var status=document.getElementById('status').value;
	// alert(select_nid);	
	var vars="nid="+select_nid+"&date_in="+date_in+"&status="+status;
	alert(vars);
	// return;
	var hr = new XMLHttpRequest();
	var url = "addNewActiveNonStudFitnessUser";
	hr.open("POST", url, true);

	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result4").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result4").innerHTML = "processingsss...";

}

function searchStudentFitnessHistoryDate(s){
	// alert(s);
	var vars="search="+s;
	alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchStudentFitnessHistoryDate";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result8").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result8").innerHTML = "processingpasdafsdf...";
}

function searchStudentFitnessHistoryLname(s){
	// alert(s);
	var vars="search="+s;
	// alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchStudentFitnessHistoryLname";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result8").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result8").innerHTML = "processingpasdafsdf...";
}

function searchStudentFitnessHistory(s){
	// alert(s);
	var vars="search="+s;
	// alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchStudentFitnessHistory";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result8").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result8").innerHTML = "processingpasdafsdf...";
}

function searchNonStudFitnessHistoryDate(s){
	// alert(s);
	var vars="search1="+s;
	// alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchNonStudFitnessHistoryDate";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result9").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result9").innerHTML = "processingpasdafsdf...";
}

function searchNonStudFitnessHistory(s){
	// alert(s);
	var vars="search1="+s;
	// alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchNonStudFitnessHistory";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result9").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result9").innerHTML = "processingpasdafsdf...";
}


function searchStudentFitnessUser(s){
	alert(s);
	var vars="search1="+s;
	alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchStudentFitnessUser";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result1").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result1").innerHTML = "processingpasdafsdf...";
}


function searchNonStudFitnessUser(s){
	alert(s);
	var vars="search2="+s;
	alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchNonStudFitnessUser";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result2").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result2").innerHTML = "processingafasfasfa...";
}



function saveFitnessUser(){
	// alert("hello");
	var lname1=document.getElementById('lname1').value;
	var fname1=document.getElementById('fname1').value;

	
	var vars="lname1="+lname1+"&fname1="+fname1;
	alert(vars);
	// return;
	var hr = new XMLHttpRequest();
	var url = "addNewNonStudFitnessUser";
	hr.open("POST", url, true);

	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result10").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result10").innerHTML = "processingcccccc...";

}	
    





// var interval;
//     var minutes = 0;
//     var seconds = 05;

//     function countdown(element) {
//     	$(".btng1").prop('disabled', true);
//     	// $("#play1").prop('disabled', true);
//         interval = setInterval(function(timer) {
//             var el = document.getElementById(element);
//             if(seconds == 0) {
//                 if(minutes == 0) {
//                 	$("#delete1").prop('disabled', false);
//                     (el.innerHTML = "Game Ended");     
                  	
                    	

//                     clearInterval(interval);
//                     return;
//                 } else {
//                     minutes--;
//                     seconds = 60;
//                 }
//             }
//             if(minutes > 0) {
//                 var minute_text = minutes + (minutes > 1 ? ' :' : ' :');
//             } else {
//                 var minute_text = '';
//             }
//             var second_text = seconds > 1 ? '' : '';
//             el.innerHTML = minute_text + ' ' + seconds + ' ' + second_text + '';
//             seconds--;
//         }, 1000);
//     }
// var start1 = document.getElementById('start1');
// var start2 = document.getElementById('start2');
// var start3 = document.getElementById('start3');
// start1.onclick = function(timer) {
//     if (!interval) {
//         countdown('countdown1');
//         countdown('countdown2');
//         countdown('countdown3');

      
//     }
// }

function addGame() {
	gamecount++;
	if(gamecount<=2){
	$("#game2").prop('hidden', false);
	}else if(gamecount<=3){
	$("#game3").prop('hidden', false);
	}else if(gamecount<=4){
	$("#game4").prop('hidden', false);
	}else if(gamecount<=5){
	$("#game5").prop('hidden', false);
	}else if(gamecount<=6){
	$("#game6").prop('hidden', false);
	}else if(gamecount<=7){
	$("#game7").prop('hidden', false);
	}else if(gamecount<=8){
	$("#game8").prop('hidden', false);
	}else if(gamecount<=9){
	$("#game9").prop('hidden', false);
	}else if(gamecount<=10){
	$("#game10").prop('hidden', false);
	}else if(gamecount<=11){
	$("#game11").prop('hidden', false);
	}else if(gamecount<=12){
	$("#game12").prop('hidden', false);
	}else if(gamecount<=13){
	$("#game13").prop('hidden', false);
	}else if(gamecount<=14){
	$("#game14").prop('hidden', false);
	}else if(gamecount<=15){
	$("#game15").prop('hidden', false);
	}else{
	alert("Games FUll");
	}
}

function addGameVB() {
	gamecount++;
	if(gamecount<=2){
	$("#game2").prop('hidden', false);
	}else if(gamecount<=3){
	$("#game3").prop('hidden', false);
	}else if(gamecount<=4){
	$("#game4").prop('hidden', false);
	}else if(gamecount<=5){
	$("#game5").prop('hidden', false);
	}else if(gamecount<=6){
	$("#game6").prop('hidden', false);
	}else if(gamecount<=7){
	$("#game7").prop('hidden', false);
	}else if(gamecount<=8){
	$("#game8").prop('hidden', false);
	}else if(gamecount<=9){
	$("#game9").prop('hidden', false);
	}else if(gamecount<=10){
	$("#game10").prop('hidden', false);
	}else if(gamecount<=11){
	$("#game11").prop('hidden', false);
	}else if(gamecount<=12){
	$("#game12").prop('hidden', false);
	}else if(gamecount<=13){
	$("#game13").prop('hidden', false);
	}else if(gamecount<=14){
	$("#game14").prop('hidden', false);
	}else if(gamecount<=15){
	$("#game15").prop('hidden', false);
	}else{
	alert("Games FUll");
	}
}

var gamedel;
var del_btng;
function del1(btnval,btn){
alert(btnval);
gamedel=btnval;
del_btng=btn;
	
	del_btng1 = del_btng.replace(/\d+/g, '');
$("#modalDeleteGameList2").modal("show");

	
} 


function yesDeleteGameList2() {
	

	var vars="btnval="+gamedel+"&btn="+del_btng1;
	// alert(vars);
	// return;

		var hr = new XMLHttpRequest();
		
		var url="deleteGameList";
		
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			alert(hr.readyState + "-" + hr.status);
			// alert(hr.responseText);
			if(hr.readyState == 4 && hr.status == 200) {
					// $("#"+del_pid).fadeOut(2000);
					if(gamedel=="1"){
					$("#game1").prop('hidden', true);
					}else if(gamedel=="2"){
					$("#game2").prop('hidden', true);
					}else if(gamedel=="3"){
					$("#game3").prop('hidden', true);
					}else if(gamedel=="4"){
					$("#game4").prop('hidden', true);
					}else if(gamedel=="5"){
					$("#game5").prop('hidden', true);
					}else if(gamedel=="6"){
					$("#game6").prop('hidden', true);
					}else if(gamedel=="7"){
					$("#game7").prop('hidden', true);
					}else if(gamedel=="8"){
					$("#game8").prop('hidden', true);
					}else if(gamedel=="9"){
					$("#game9").prop('hidden', true);
					}else if(gamedel=="10"){
					$("#game10").prop('hidden', true);
					}else if(gamedel=="11"){
					$("#game11").prop('hidden', true);
					}else if(gamedel=="12"){
					$("#game12").prop('hidden', true);
					}else if(gamedel=="13"){
					$("#game13").prop('hidden', true);
					}else if(gamedel=="14"){
					$("#game14").prop('hidden', true);
					}else if(gamedel=="15"){
					$("#game15").prop('hidden', true);
					}
					// $("#modalDeleteGameList").modal("hide");
						
					
					
						
					
					
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars);
	// document.getElementById("result").innerHTML = "processing...";
}

function yesDeleteGameList2VB() {
	

	var vars="btnval="+gamedel+"&btn="+del_btng1;
	// alert(vars);
	// return;

		var hr = new XMLHttpRequest();
		
		var url="deleteGameList";
		
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			alert(hr.readyState + "-" + hr.status);
			// alert(hr.responseText);
			if(hr.readyState == 4 && hr.status == 200) {
					// $("#"+del_pid).fadeOut(2000);
					if(gamedel=="1"){
					$("#game1").prop('hidden', true);
					}else if(gamedel=="2"){
					$("#game2").prop('hidden', true);
					}else if(gamedel=="3"){
					$("#game3").prop('hidden', true);
					}else if(gamedel=="4"){
					$("#game4").prop('hidden', true);
					}else if(gamedel=="5"){
					$("#game5").prop('hidden', true);
					}else if(gamedel=="6"){
					$("#game6").prop('hidden', true);
					}else if(gamedel=="7"){
					$("#game7").prop('hidden', true);
					}else if(gamedel=="8"){
					$("#game8").prop('hidden', true);
					}else if(gamedel=="9"){
					$("#game9").prop('hidden', true);
					}else if(gamedel=="10"){
					$("#game10").prop('hidden', true);
					}else if(gamedel=="11"){
					$("#game11").prop('hidden', true);
					}else if(gamedel=="12"){
					$("#game12").prop('hidden', true);
					}else if(gamedel=="13"){
					$("#game13").prop('hidden', true);
					}else if(gamedel=="14"){
					$("#game14").prop('hidden', true);
					}else if(gamedel=="15"){
					$("#game15").prop('hidden', true);
					}
					// $("#modalDeleteGameList").modal("hide");
						
					
					
						
					
					
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars);
	// document.getElementById("result").innerHTML = "processing...";
}




function deleteplayer(){
	alert("hello");
}
var gamenum;
function addPlayer(gnum){
	gamenum=gnum;
	$("#modalAddPlayer").modal("show");

}
var gamenumVB;
function addPlayerVB(gnumVB){
	gamenumVB=gnumVB;
	$("#modalAddPlayerVB").modal("show");

}

function nonStudent(){
	$("#modalAddNonStudFitUser").modal("show");
}


function savePlayerVB(){
	// alert("hello");
	if(gamenumVB=="play1VB"){
		gnoVB=1;
	}else if(gamenumVB=="play2VB"){
		gnoVB=2;
	}
	// }else if(gamenum=="play3"){
	// 	gno=3;
	// }else if(gamenum=="play4"){
	// 	gno=4;
	// }else if(gamenum=="play5"){
	// 	gno=5;
	// }else if(gamenum=="play6"){
	// 	gno=6;
	// }else if(gamenum=="play7"){
	// 	gno=7;
	// }else if(gamenum=="play8"){
	// 	gno=8;
	// }else if(gamenum=="play9"){
	// 	gno=9;
	// }else if(gamenum=="play10"){
	// 	gno=10;
	// }else if(gamenum=="play11"){
	// 	gno=11;
	// }else if(gamenum=="play12"){
	// 	gno=12;
	// }else if(gamenum=="play13"){
	// 	gno=13;
	// }else if(gamenum=="play14"){
	// 	gno=14;
	// }else if(gamenum=="play15"){
	// 	gno=15;
	// }

	
	var gidVB=gnoVB
	var pidVB=document.getElementById('pidVB').value;
	var date_nowVB=document.getElementById('date_nowVB').value;
	var list_byVB=document.getElementById('list_byVB').value;
	var gametypeVB=document.getElementById('gametypeVB').value;

	
	if(pidVB==""){
		alert("Please enter Player ID.");
		return;
	}
	if(gidVB=="1"){
		play1countVB++;
	}else if(gidVB=="2"){
		play2countVB++;
	}else if(gidVB=="3"){
		play3countVB++;
	}else if(gidVB=="4"){
		play4countVB++;
	}else if(gidVB=="5"){
		play5countVB++;
	}else if(gidVB=="6"){
		play6countVB++;
	}else if(gidVB=="7"){
		play7countVB++;
	}else if(gidVB=="8"){
		play8countVB++;
	}else if(gidVB=="9"){
		play9countVB++;
	}else if(gidVB=="10"){
		play10countVB++;
	}else if(gidVB=="11"){
		play11countVB++;
	}else if(gidVB=="12"){
		play12countVB++;
	}else if(gidVB=="13"){
		play13countVB++;
	}else if(gidVB=="14"){
		play14countVB++;
	}else if(gidVB=="15"){
		play15countVB++;
	}
	alert("Game1=" +play1countVB + " "+
						"Game2=" +play2countVB +" "+
						"Game3=" +play3countVB +" "+
						"Game4=" +play4countVB +" "+
						"Game5=" +play5countVB +" "+
						"Game6=" +play6countVB +" "+
						"Game7=" +play7countVB +" "+
						"Game8=" +play8countVB +" "+
						"Game9=" +play9countVB +" "+
						"Game10=" +play10countVB +" "+
						"Game11=" +play11countVB +" "+
						"Game12=" +play12countVB +" "+
						"Game13=" +play13countVB +" "+
						"Game14=" +play14countVB +" "+
						"Game15=" +play15countVB
						);		

	if(play1countVB==12){
		$("#play1VB").prop('disabled', true);
		$("#start1VB").prop('disabled', false);
	}else if(play1countVB<12){
		$("#play1VB").prop('disabled', false);
		$("#start1VB").prop('disabled', true);
	}
	if(play2countVB==10){
		$("#play2VB").prop('disabled', true);
		$("#start2VB").prop('disabled', false);
	}else if(play2countVB<10){
		$("#play2VB").prop('disabled', false);
		$("#start2VB").prop('disabled', true);
	}
	if(play3countVB==10){
		$("#play3VB").prop('disabled', true);
		$("#start3VB").prop('disabled', false);
	}else if(play3countVB<10){
		$("#play3VB").prop('disabled', false);
		$("#start3VB").prop('disabled', true);
	}
	if(play4countVB==10){
		$("#play4VB").prop('disabled', true);
		$("#start4VB").prop('disabled', false);
	}else if(play4countVB<10){
		$("#play4VB").prop('disabled', false);
		$("#start4VB").prop('disabled', true);
	}
	if(play5countVB==10){
		$("#play5VB").prop('disabled', true);
		$("#start5VB").prop('disabled', false);
	}else if(play5countVB<10){
		$("#play5VB").prop('disabled', false);
		$("#start5VB").prop('disabled', true);
	}
	if(play6countVB==10){
		$("#play6VB").prop('disabled', true);
		$("#start6VB").prop('disabled', false);
	}else if(play6countVB<10){
		$("#play6VB").prop('disabled', false);
		$("#start6VB").prop('disabled', true);
	}
	if(play7countVB==10){
		$("#play7VB").prop('disabled', true);
		$("#start7VB").prop('disabled', false);
	}else if(play7countVB<10){
		$("#play7VB").prop('disabled', false);
		$("#start7VB" ).prop('disabled', true);
	}
	if(play8countVB==10){
		$("#play8VB").prop('disabled', true);
		$("#start8VB").prop('disabled', false);
	}else if(play8countVB<10){
		$("#play8VB").prop('disabled', false);
		$("#start8VB").prop('disabled', true);
	}
	if(play9countVB==10){
		$("#play9VB").prop('disabled', true);
		$("#start9VB").prop('disabled', false);
	}else if(play9countVB<10){
		$("#play9VB").prop('disabled', false);
		$("#start9VB").prop('disabled', true);
	}
	if(play10countVB==10){
		$("#play10VB").prop('disabled', true);
		$("#start10VB").prop('disabled', false);
	}else if(play10countVB<10){
		$("#play10VB").prop('disabled', false);
		$("#start10VB").prop('disabled', true);
	}
	if(play11countVB==10){
		$("#play11VB").prop('disabled', true);
		$("#start11VB").prop('disabled', false);
	}else if(play11countVB<10){
		$("#play11VB").prop('disabled', false);
		$("#start11VB").prop('disabled', true);
	}
	if(play12countVB==10){
		$("#play12VB").prop('disabled', true);
		$("#start12VB").prop('disabled', false);
	}else if(play12countVB<10){
		$("#play12VB").prop('disabled', false);
		$("#start12VB").prop('disabled', true);
	}
	if(play13countVB==10){
		$("#play13VB").prop('disabled', true);
		$("#start13VB").prop('disabled', false);
	}else if(play13countVB<10){
		$("#play13VB").prop('disabled', false);
		$("#start13VB").prop('disabled', true);
	}
	if(play14countVB==10){
		$("#play14VB").prop('disabled', true);
		$("#start1VB4").prop('disabled', false);
	}else if(play14countVB<10){
		$("#play14VB").prop('disabled', false);
		$("#start14VB").prop('disabled', true);
	}
	if(play15countVB==10){
		$("#play15VB").prop('disabled', true);
		$("#start15VB").prop('disabled', false);
	}else if(play15countVB<10){
		$("#play15VB").prop('disabled', false);
		$("#start15VB").prop('disabled', true);
	}

	var vars="gidVB="+gidVB+"&pidVB="+pidVB+"&date_nowVB="+date_nowVB+"&list_byVB="+list_byVB+"&gametype="+gametypeVB;
alert(vars);
// 	return;
	// return;

	var hr = new XMLHttpRequest();
	var url = "addNewPlayer";
	hr.open("POST", url, true);

	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		alert(hr.readyState + "-" + hr.status)
		// alert(hr.responseText);
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result").innerHTML = return_data;
			$('#g1VB').load(document.URL +  ' #g1VB');
			$('#g2VB').load(document.URL +  ' #g2VB');
			$('#g3VB').load(document.URL +  ' #g3VB');
			$('#g4VB').load(document.URL +  ' #g4VB');
			$('#g5VB').load(document.URL +  ' #g5VB');
			$('#g6VB').load(document.URL +  ' #g6VB');
			$('#g7VB').load(document.URL +  ' #g7VB');
			$('#g8VB').load(document.URL +  ' #g8VB');
			$('#g9VB').load(document.URL +  ' #g9VB');
			$('#g10VB').load(document.URL +  ' #g10VB');
			$('#g11VB').load(document.URL +  ' #g11VB');
			$('#g12VB').load(document.URL +  ' #g12VB');
			$('#g13VB').load(document.URL +  ' #g13VB');
			$('#g14VB').load(document.URL +  ' #g14VB');
			$('#g15VB').load(document.URL +  ' #g15VB');

			

			 
			 
			  
			}
		}
	hr.send(vars);
	document.getElementById("result").innerHTML = "processing...";
	
	
}

	

function savePlayer(){
	// alert("hello");
	if(gamenum=="play1"){
		gno=1;
	}else if(gamenum=="play2"){
		gno=2;
	}else if(gamenum=="play3"){
		gno=3;
	}else if(gamenum=="play4"){
		gno=4;
	}else if(gamenum=="play5"){
		gno=5;
	}else if(gamenum=="play6"){
		gno=6;
	}else if(gamenum=="play7"){
		gno=7;
	}else if(gamenum=="play8"){
		gno=8;
	}else if(gamenum=="play9"){
		gno=9;
	}else if(gamenum=="play10"){
		gno=10;
	}else if(gamenum=="play11"){
		gno=11;
	}else if(gamenum=="play12"){
		gno=12;
	}else if(gamenum=="play13"){
		gno=13;
	}else if(gamenum=="play14"){
		gno=14;
	}else if(gamenum=="play15"){
		gno=15;
	}

	
	var gid=gno
	var pid=document.getElementById('pid').value;
	var date_now=document.getElementById('date_now').value;
	var list_by=document.getElementById('list_by').value;
	var gametype=document.getElementById('gametype').value;

	if(gid==""){
		alert("Please enter Game number.");
		return;
	}
	if(pid==""){
		alert("Please enter Player ID.");
		return;
	}
	if(gid=="1"){
		play1count++;
	}else if(gid=="2"){
		play2count++;
	}else if(gid=="3"){
		play3count++;
	}else if(gid=="4"){
		play4count++;
	}else if(gid=="5"){
		play5count++;
	}else if(gid=="6"){
		play6count++;
	}else if(gid=="7"){
		play7count++;
	}else if(gid=="8"){
		play8count++;
	}else if(gid=="9"){
		play9count++;
	}else if(gid=="10"){
		play10count++;
	}else if(gid=="11"){
		play11count++;
	}else if(gid=="12"){
		play12count++;
	}else if(gid=="13"){
		play13count++;
	}else if(gid=="14"){
		play14count++;
	}else if(gid=="15"){
		play15count++;
	}
	alert("Game1=" +play1count + " "+
						"Game2=" +play2count +" "+
						"Game3=" +play3count +" "+
						"Game4=" +play4count +" "+
						"Game5=" +play5count +" "+
						"Game6=" +play6count +" "+
						"Game7=" +play7count +" "+
						"Game8=" +play8count +" "+
						"Game9=" +play9count +" "+
						"Game10=" +play10count +" "+
						"Game11=" +play11count +" "+
						"Game12=" +play12count +" "+
						"Game13=" +play13count +" "+
						"Game14=" +play14count +" "+
						"Game15=" +play15count
						);		

	if(play1count==10){
		$("#play1").prop('disabled', true);
		$("#start1").prop('disabled', false);
	}else if(play1count<10){
		$("#play1").prop('disabled', false);
		$("#start1").prop('disabled', true);
	}
	if(play2count==10){
		$("#play2").prop('disabled', true);
		$("#start2").prop('disabled', false);
	}else if(play2count<10){
		$("#play2").prop('disabled', false);
		$("#start2").prop('disabled', true);
	}
	if(play3count==10){
		$("#play3").prop('disabled', true);
		$("#start3").prop('disabled', false);
	}else if(play3count<10){
		$("#play3").prop('disabled', false);
		$("#start3").prop('disabled', true);
	}
	if(play4count==10){
		$("#play4").prop('disabled', true);
		$("#start4").prop('disabled', false);
	}else if(play4count<10){
		$("#play4").prop('disabled', false);
		$("#start4").prop('disabled', true);
	}
	if(play5count==10){
		$("#play5").prop('disabled', true);
		$("#start5").prop('disabled', false);
	}else if(play5count<10){
		$("#play5").prop('disabled', false);
		$("#start5").prop('disabled', true);
	}
	if(play6count==10){
		$("#play6").prop('disabled', true);
		$("#start6").prop('disabled', false);
	}else if(play6count<10){
		$("#play6").prop('disabled', false);
		$("#start6").prop('disabled', true);
	}
	if(play7count==10){
		$("#play7").prop('disabled', true);
		$("#start7").prop('disabled', false);
	}else if(play7count<10){
		$("#play7").prop('disabled', false);
		$("#start7" ).prop('disabled', true);
	}
	if(play8count==10){
		$("#play8").prop('disabled', true);
		$("#start8").prop('disabled', false);
	}else if(play8count<10){
		$("#play8").prop('disabled', false);
		$("#start8").prop('disabled', true);
	}
	if(play9count==10){
		$("#play9").prop('disabled', true);
		$("#start9").prop('disabled', false);
	}else if(play9count<10){
		$("#play9").prop('disabled', false);
		$("#start9").prop('disabled', true);
	}
	if(play10count==10){
		$("#play10").prop('disabled', true);
		$("#start10").prop('disabled', false);
	}else if(play10count<10){
		$("#play10").prop('disabled', false);
		$("#start10").prop('disabled', true);
	}
	if(play11count==10){
		$("#play11").prop('disabled', true);
		$("#start11").prop('disabled', false);
	}else if(play11count<10){
		$("#play11").prop('disabled', false);
		$("#start11").prop('disabled', true);
	}
	if(play12count==10){
		$("#play12").prop('disabled', true);
		$("#start12").prop('disabled', false);
	}else if(play12count<10){
		$("#play12").prop('disabled', false);
		$("#start12").prop('disabled', true);
	}
	if(play13count==10){
		$("#play13").prop('disabled', true);
		$("#start13").prop('disabled', false);
	}else if(play13count<10){
		$("#play13").prop('disabled', false);
		$("#start13").prop('disabled', true);
	}
	if(play14count==10){
		$("#play14").prop('disabled', true);
		$("#start14").prop('disabled', false);
	}else if(play14count<10){
		$("#play14").prop('disabled', false);
		$("#start14").prop('disabled', true);
	}
	if(play15count==10){
		$("#play15").prop('disabled', true);
		$("#start15").prop('disabled', false);
	}else if(play15count<10){
		$("#play15").prop('disabled', false);
		$("#start15").prop('disabled', true);
	}

	var vars="gid="+gid+"&pid="+pid+"&date_now="+date_now+"&list_by="+list_by+"&gametype="+gametype;
// alert(vars);
// 	return;
	// return;

	var hr = new XMLHttpRequest();
	var url = "addNewPlayer";
	hr.open("POST", url, true);

	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.readyState + "-" + hr.status)
		// alert(hr.responseText);
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result").innerHTML = return_data;
			$('#g1').load(document.URL +  ' #g1');
			$('#g2').load(document.URL +  ' #g2');
			$('#g3').load(document.URL +  ' #g3');
			$('#g4').load(document.URL +  ' #g4');
			$('#g5').load(document.URL +  ' #g5');
			$('#g6').load(document.URL +  ' #g6');
			$('#g7').load(document.URL +  ' #g7');
			$('#g8').load(document.URL +  ' #g8');
			$('#g9').load(document.URL +  ' #g9');
			$('#g10').load(document.URL +  ' #g10');
			$('#g11').load(document.URL +  ' #g11');
			$('#g12').load(document.URL +  ' #g12');
			$('#g13').load(document.URL +  ' #g13');
			$('#g14').load(document.URL +  ' #g14');
			$('#g15').load(document.URL +  ' #g15');

			

			 // $( "#pota" ).load(window.location.href + " #pota" );
			 
			  
			}
		}
	hr.send(vars);
	document.getElementById("result").innerHTML = "processing...";
	
	
}





function saveNonStud(){
	var lname1=document.getElementById('lname1').value;
	var fname1=document.getElementById('fname1').value;

	var vars="lname1="+lname1+"&fname1="+fname1;
	// alert(vars);
	// return;

	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "addNewNonStudFitUser";
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
	// var cid=document.getElementById('cid').value;
	var borrower_id=document.getElementById('borrower_id').value;
	var date_borrowed=document.getElementById('date_borrowed').value;
	var lend_by=document.getElementById('lend_by').value;
	var status=document.getElementById('status').value;


	var vars="eid="+select_eid+"&borrower_id="+borrower_id+"&date_borrowed="+date_borrowed+"&lend_by="+lend_by+"&status="+status;
	alert(vars);

	if(borrower_id==""){
		alert("Please select a Borrower.");
		return;
	}


	
	
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
	document.getElementById("result").innerHTML = "processing4...";

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

function searchFitnessUser(s){
	// alert(s);
	var vars="search1="+s;
	// alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchFitnessUser";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result1").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result1").innerHTML = "processing...";
}



function searchActiveStudentFitnessUser(s){
	// alert(s);
	var vars="search="+s;
	// alert(vars);
	var hr = new XMLHttpRequest();
	var url = "searchActiveStudentFitnessUser";
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		// alert(hr.responseText);
		// alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("result").innerHTML = return_data;
			}
		}
	hr.send(vars);
	document.getElementById("result").innerHTML = "processing...";
}




var del_pidVB;
var del_gid1VB;
var delbtngVB;
function deleteGamesListVB(pidVB,gid1VB,btngVB){
	// alert(btng);
	del_pidVB=pidVB;
	del_gid1VB=gid1VB;
	delbtngVB=btngVB;
	wew=btngVB;
	delbtng1VB = delbtngVB.replace(/\d+/g, '');
	
	$("#modalDeleteGameListVB").modal("show");
}
var delnumVB;
function yesDeleteGameListVB() {
	
	if(del_gid1VB=="1"){
		delnumVB=1;
		play1countVB--;
	}else if(del_gid1VB=="2"){
		delnumVB=2;
		play2countVB--;
	}else if(del_gid1VB=="3"){
		delnumVB=3;
		play3countVB--;
	}else if(del_gid1VB=="4"){
		delnumVB=4;
		play4countVB--;
	}else if(del_gid1VB=="5"){
		delnumVB=5;
		play5countVB--;
	}else if(del_gid1VB=="6"){
		delnumVB=6;
		play6countVB--;
	}else if(del_gid1VB=="7"){
		delnumVB=7;
		play7countVB--;
	}else if(del_gid1VB=="8"){
		delnumVB=8;
		play8countVB--;
	}else if(del_gid1VB=="9"){
		delnumVB=9;
		play9countVB--;
	}else if(del_gid1VB=="10"){
		delnumVB=10;
		play10countVB--;
	}else if(del_gid1VB=="11"){
		delnumVB=11;
		play11countVB--;
	}else if(del_gid1VB=="12"){
		delnumVB=12;
		play12countVB--;
	}else if(del_gid1VB=="13"){
		delnumVB=13;
		play13countVB--;
	}else if(del_gid1VB=="14"){
		delnumVB=14;
		play14countVB--;
	}else if(del_gid1VB=="15"){
		delnumVB=15;
		play15countVB--;
	}
	

	var vars="pidVB="+del_pidVB+"&deletenumberVB="+delnumVB+"&btngVB="+delbtng1VB;
	// alert(vars);
	// return;

		var hr = new XMLHttpRequest();
		
		var url="deleteGameListVB";
		
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			alert(hr.readyState + "-" + hr.status);
			// alert(hr.responseText);
			if(hr.readyState == 4 && hr.status == 200) {
					// $("#"+del_pid).fadeOut(2000);
					$('#g1VB').load(document.URL +  ' #g1VB');
					$('#g2VB').load(document.URL +  ' #g2VB');
					$('#g3VB').load(document.URL +  ' #g3VB');
					$('#g4VB').load(document.URL +  ' #g4VB');
					$('#g5VB').load(document.URL +  ' #g5VB');
					$('#g6VB').load(document.URL +  ' #g6VB');
					$('#g7VB').load(document.URL +  ' #g7VB');
					$('#g8VB').load(document.URL +  ' #g8VB');
					$('#g9VB').load(document.URL +  ' #g9VB');
					$('#g10VB').load(document.URL +  ' #g10VB');
					$('#g11VB').load(document.URL +  ' #g11VB');
					$('#g12VB').load(document.URL +  ' #g12VB');
					$('#g13VB').load(document.URL +  ' #g13VB');
					$('#g14VB').load(document.URL +  ' #g14VB');
					$('#g15VB').load(document.URL +  ' #g15VB');
					$("#modalDeleteGameListVB").modal("hide");
						
					if(play1countVB==10){
						$("#play1VB").prop('disabled', true);
						$("#start1VB").prop('disabled', false);
					}else if(play1countVB<10){
						$("#play1VB").prop('disabled', false);
						$("#start1VB").prop('disabled', true);
					}
					if(play2countVB==10){
						$("#play1VB").prop('disabled', true);
						$("#start1VB").prop('disabled', false);
					}else if(play2countVB<10){
						$("#play1VB").prop('disabled', false);
						$("#start1VB").prop('disabled', true);
					}
					if(play3countVB==10){
						$("#play1VB").prop('disabled', true);
						$("#start1VB").prop('disabled', false);
					}else if(play3countVB<10){
						$("#play1VB").prop('disabled', false);
						$("#start1VB").prop('disabled', true);
					}
					if(play4countVB==10){
						$("#play1VB").prop('disabled', true);
						$("#start1VB").prop('disabled', false);
					}else if(play4countVB<10){
						$("#play1VB").prop('disabled', false);
						$("#start1VB").prop('disabled', true);
					}
					if(play5countVB==10){
						$("#play1VB").prop('disabled', true);
						$("#start1VB").prop('disabled', false);
					}else if(play5countVB<10){
						$("#play1VB").prop('disabled', false);
						$("#start1VB").prop('disabled', true);
					}
					if(play6countVB==10){
						$("#play1VB").prop('disabled', true);
						$("#start1VB").prop('disabled', false);
					}else if(play6countVB<10){
						$("#play1VB").prop('disabled', false);
						$("#start1VB").prop('disabled', true);
					}
					if(play7countVB==10){
						$("#play7VB").prop('disabled', true);
						$("#start7VB").prop('disabled', false);
					}else if(play7countVB<10){
						$("#play7VB").prop('disabled', false);
						$("#start7VB").prop('disabled', true);
					}
					if(play8countVB==10){
						$("#play8VB").prop('disabled', true);
						$("#start8VB").prop('disabled', false);
					}else if(play8countVB<10){
						$("#play8VB").prop('disabled', false);
						$("#start8VB").prop('disabled', true);
					}
					if(play9countVB==10){
						$("#play9VB").prop('disabled', true);
						$("#start9VB").prop('disabled', false);
					}else if(play9countVB<10){
						$("#play9VB").prop('disabled', false);
						$("#start9VB").prop('disabled', true);
					}
					if(play10countVB==10){
						$("#play10VB").prop('disabled', true);
						$("#start10VB").prop('disabled', false);
					}else if(play10countVB<10){
						$("#play10VB").prop('disabled', false);
						$("#start10VB").prop('disabled', true);
					}
					if(play11countVB==10){
						$("#play11VB").prop('disabled', true);
						$("#start11VB").prop('disabled', false);
					}else if(play11countVB<10){
						$("#play11VB").prop('disabled', false);
						$("#start11VB").prop('disabled', true);
					}
					if(play12countVB==10){
						$("#play12VB").prop('disabled', true);
						$("#start12VB").prop('disabled', false);
					}else if(play12countVB<10){
						$("#play12VB").prop('disabled', false);
						$("#start12VB").prop('disabled', true);
					}
					if(play13countVB==10){
						$("#play13VB").prop('disabled', true);
						$("#start13VB").prop('disabled', false);
					}else if(play13countVB<10){
						$("#play13VB").prop('disabled', false);
						$("#start13VB").prop('disabled', true);
					}
					if(play14countVB==10){
						$("#play14VB").prop('disabled', true);
						$("#start14VB").prop('disabled', false);
					}else if(play14countVB<10){
						$("#play14VB").prop('disabled', false);
						$("#start14VB").prop('disabled', true);
					}
					if(play15countVB==10){
						$("#play15VB").prop('disabled', true);
						$("#start15VB").prop('disabled', false);
					}else if(play15countVB<10){
						$("#play15VB").prop('disabled', false);
						$("#start15VB").prop('disabled', true);
					}
					
					
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	// document.getElementById("result").innerHTML = "processing...";
}


var del_pid;
var del_gid1;
var delbtng;
function deleteGamesList(pid,gid1,btng){
	// alert(btng);
	del_pid=pid;
	del_gid1=gid1;
	delbtng=btng;
	
	delbtng1 = delbtng.replace(/\d+/g, '');
	
	$("#modalDeleteGameList").modal("show");
}
var delnum;
function yesDeleteGameList() {
	
	if(del_gid1=="1"){
		delnum=1;
		play1count--;
	}else if(del_gid1=="2"){
		delnum=2;
		play2count--;
	}else if(del_gid1=="3"){
		delnum=3;
		play3count--;
	}else if(del_gid1=="4"){
		delnum=4;
		play4count--;
	}else if(del_gid1=="5"){
		delnum=5;
		play5count--;
	}else if(del_gid1=="6"){
		delnum=6;
		play6count--;
	}else if(del_gid1=="7"){
		delnum=7;
		play7count--;
	}else if(del_gid1=="8"){
		delnum=8;
		play8count--;
	}else if(del_gid1=="9"){
		delnum=9;
		play9count--;
	}else if(del_gid1=="10"){
		delnum=10;
		play10count--;
	}else if(del_gid1=="11"){
		delnum=11;
		play11count--;
	}else if(del_gid1=="12"){
		delnum=12;
		play12count--;
	}else if(del_gid1=="13"){
		delnum=13;
		play13count--;
	}else if(del_gid1=="14"){
		delnum=14;
		play14count--;
	}else if(del_gid1=="15"){
		delnum=15;
		play15count--;
	}
	

	var vars="pid="+del_pid+"&deletenumber="+delnum+"&btng="+delbtng1;
	alert(vars);
	// return;

		var hr = new XMLHttpRequest();
		
		var url="deleteGameList";
		
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			alert(hr.readyState + "-" + hr.status);
			// alert(hr.responseText);
			if(hr.readyState == 4 && hr.status == 200) {
					// $("#"+del_pid).fadeOut(2000);
					$('#g1').load(document.URL +  ' #g1');
					$('#g2').load(document.URL +  ' #g2');
					$('#g3').load(document.URL +  ' #g3');
					$('#g4').load(document.URL +  ' #g4');
					$('#g5').load(document.URL +  ' #g5');
					$('#g6').load(document.URL +  ' #g6');
					$('#g7').load(document.URL +  ' #g7');
					$('#g8').load(document.URL +  ' #g8');
					$('#g9').load(document.URL +  ' #g9');
					$('#g10').load(document.URL +  ' #g10');
					$('#g11').load(document.URL +  ' #g11');
					$('#g12').load(document.URL +  ' #g12');
					$('#g13').load(document.URL +  ' #g13');
					$('#g14').load(document.URL +  ' #g14');
					$('#g15').load(document.URL +  ' #g15');
					$("#modalDeleteGameList").modal("hide");
						
					if(play1count==10){
						$("#play1").prop('disabled', true);
						$("#start1").prop('disabled', false);
					}else if(play1count<10){
						$("#play1").prop('disabled', false);
						$("#start1").prop('disabled', true);
					}
					if(play2count==10){
						$("#play1").prop('disabled', true);
						$("#start1").prop('disabled', false);
					}else if(play2count<10){
						$("#play1").prop('disabled', false);
						$("#start1").prop('disabled', true);
					}
					if(play3count==10){
						$("#play1").prop('disabled', true);
						$("#start1").prop('disabled', false);
					}else if(play3count<10){
						$("#play1").prop('disabled', false);
						$("#start1").prop('disabled', true);
					}
					if(play4count==10){
						$("#play1").prop('disabled', true);
						$("#start1").prop('disabled', false);
					}else if(play4count<10){
						$("#play1").prop('disabled', false);
						$("#start1").prop('disabled', true);
					}
					if(play5count==10){
						$("#play1").prop('disabled', true);
						$("#start1").prop('disabled', false);
					}else if(play5count<10){
						$("#play1").prop('disabled', false);
						$("#start1").prop('disabled', true);
					}
					if(play6count==10){
						$("#play1").prop('disabled', true);
						$("#start1").prop('disabled', false);
					}else if(play6count<10){
						$("#play1").prop('disabled', false);
						$("#start1").prop('disabled', true);
					}
					if(play7count==10){
						$("#play7").prop('disabled', true);
						$("#start7").prop('disabled', false);
					}else if(play7count<10){
						$("#play7").prop('disabled', false);
						$("#start7").prop('disabled', true);
					}
					if(play8count==10){
						$("#play8").prop('disabled', true);
						$("#start8").prop('disabled', false);
					}else if(play8count<10){
						$("#play8").prop('disabled', false);
						$("#start8").prop('disabled', true);
					}
					if(play9count==10){
						$("#play9").prop('disabled', true);
						$("#start9").prop('disabled', false);
					}else if(play9count<10){
						$("#play9").prop('disabled', false);
						$("#start9").prop('disabled', true);
					}
					if(play10count==10){
						$("#play10").prop('disabled', true);
						$("#start10").prop('disabled', false);
					}else if(play10count<10){
						$("#play10").prop('disabled', false);
						$("#start10").prop('disabled', true);
					}
					if(play11count==10){
						$("#play11").prop('disabled', true);
						$("#start11").prop('disabled', false);
					}else if(play11count<10){
						$("#play11").prop('disabled', false);
						$("#start11").prop('disabled', true);
					}
					if(play12count==10){
						$("#play12").prop('disabled', true);
						$("#start12").prop('disabled', false);
					}else if(play12count<10){
						$("#play12").prop('disabled', false);
						$("#start12").prop('disabled', true);
					}
					if(play13count==10){
						$("#play13").prop('disabled', true);
						$("#start13").prop('disabled', false);
					}else if(play13count<10){
						$("#play13").prop('disabled', false);
						$("#start13").prop('disabled', true);
					}
					if(play14count==10){
						$("#play14").prop('disabled', true);
						$("#start14").prop('disabled', false);
					}else if(play14count<10){
						$("#play14").prop('disabled', false);
						$("#start14").prop('disabled', true);
					}
					if(play15count==10){
						$("#play15").prop('disabled', true);
						$("#start15").prop('disabled', false);
					}else if(play15count<10){
						$("#play15").prop('disabled', false);
						$("#start15").prop('disabled', true);
					}
					
					
			}
		}
	//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	// document.getElementById("result").innerHTML = "processing...";
}


var delete_hid;

function deleteActiveEquipment(sid,bd,hid){
	delete_hid=hid;
	alert(hid);
	select_eid=sid;
	borrower_id=bd;
	alert(borrower_id);
	del_sid=sid;
	// alert(del_itemuserid);
	$("#modalDeleteActiveEquipment").modal("show");

}

function yesDeleteActiveEquipment(){
	// var cid=document.getElementById('cid').value;
	// var borrower_id=document.getElementById('borrower_id').value;
	var date_returned=document.getElementById('date_returned').value;
	var lend_by=document.getElementById('lend_by').value;
	var statuses=document.getElementById('statuses').value;
	var remarks=document.getElementById('remarks').value;

	var vars="eid="+select_eid+"&borrower_id="+borrower_id+"&date_returned="+date_returned+"&statuses="+statuses+"&remarks="+remarks+"&sid="+del_sid+"&hid="+delete_hid;
	// var vars="sid="+del_sid;
	 alert(vars);
	var url = "deleteactiveequipment";
	var hr = new XMLHttpRequest();
	hr.open("POST", url, true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	hr.onreadystatechange = function() {
		//alert(hr.readyState + "-" + hr.status)
		if(hr.readyState == 4 && hr.status == 200){
			var data = hr.responseText;
				$("#"+select_eid).fadeOut(2000);
				$("#modalDeleteActiveEquipment").modal("hide");

		}
	}
	hr.send(vars);

	// alert(vars);
}

function searchActiveEquipments(active_equipment) {
	// alert(ective_equipment);
	var vars = "search="+active_equipment;

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

function searchBorrowingHistory(b_h){
	// alert(b_h);
	var vars = "search="+b_h;
	alert(vars);
	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchBorrowingHistory";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_result_bh").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_result_bh").innerHTML = "processing...";	
}

function searchBorrowingHistoryLname(b_h_l){
	// alert(b_h);
	var vars = "search="+b_h_l;
	alert(vars);
	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchBorrowingHistoryLname";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_result_bh").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_result_bh").innerHTML = "processing...";	
}

function searchBorrowingHistoryDate(b_h_d){
	// alert(b_h);
	var vars = "search="+b_h_d;
	alert(vars);
	var hr = new XMLHttpRequest();
	// Create some variables we need to send to our PHP file
		var url = "searchBorrowingHistoryDate";
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status)
			if(hr.readyState == 4 && hr.status == 200) {
				var return_data = hr.responseText;
				document.getElementById("search_result_bh").innerHTML = return_data;
			}
		}
		//Send the data to PHP now... and wait for response to update the status div
	hr.send(vars); // Actually execute the request
	document.getElementById("search_result_bh").innerHTML = "processing...";	
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

var del_bh_id;
function deleteBH(bh_id) {
	del_bh_id=bh_id;
	$("#modalDeleteBH").modal("show");
}

function yesDeleteBH() {
	var vars="bh_id="+del_bh_id;
	var url="deleteBH";

		var hr = new XMLHttpRequest();
		hr.open("POST", url, true);
		// Set content type header information for sending url encoded variables in the request
		hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// Access the onreadystatechange event for the XMLHttpRequest object
		hr.onreadystatechange = function() {
			// alert(hr.readyState + "-" + hr.status);
			if(hr.readyState == 4 && hr.status == 200) {
				var data = hr.responseText;
					$("#"+del_bh_id).fadeOut(2000);
					$("#modalDeleteBH").modal("hide");			
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