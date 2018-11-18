  function validateQty(event) {
	var key = window.event ? event.keyCode : event.which;
	if (event.keyCode == 8 || event.keyCode == 46
	 || event.keyCode == 37 || event.keyCode == 39) {
		return true;
	}
	else if ( key < 48 || key > 57 ) {
		return false;
	}
	else return true;
}

$(function () {	
  var e15 = $('#e15');
  var d15 = $('#d15');
  var e16 = $('#e16');
  var d16 = $('#d16');
  var e17 = $('#e17');
  var d17 = $('#d17');
  var e18 = $('#e18');
  var d18 = $('#d18');
  var e19 = $('#e19');
  var d19 = $('#d19');
  var e20 = $('#e20');
  var d20 = $('#d20');
  var e21 = $('#e21');
  var d21 = $('#d21');
  var e22 = $('#e22');
  var d22 = $('#d22');
  var e23 = $('#e23');
  var d23 = $('#d23');
  var f24 = $('#f24');
  var d14 = $('#d14');
  var f14 = $('#f14');
  var e25 = $('#e25');
  var d25 = $('#d25');
  var e26 = $('#e26');
  var d26 = $('#d26');
  var e27 = $('#e27');
  var d27 = $('#d27');
  var e28 = $('#e28');
  var d28 = $('#d28');
  var e29 = $('#e29');
  var d29 = $('#d29');
  var e32 = $('#e32');
  var d32 = $('#d32');
  var e33 = $('#e33');
  var d33 = $('#d33');
  var e34 = $('#e34');
  var d34 = $('#d34');
  var e35 = $('#e35');
  var d35 = $('#d35');
  var e36 = $('#e36');
  var d36 = $('#d36');
  var e37 = $('#e37');
  var d37 = $('#d37');
  var f31 = $('#f31');
  var e39 = $('#e39');
  var d39 = $('#d39');
  var e40 = $('#e40');
  var d40 = $('#d40');
  var e41 = $('#e41');
  var d41 = $('#d41');
  var e42 = $('#e42');
  var d42 = $('#d42');
  var e43 = $('#e43');
  var d43 = $('#d43');
  var e44 = $('#e44');
  var d44 = $('#d44');
  var e45 = $('#e45');
  var d45 = $('#d45');
  var e46 = $('#e46');
  var d46 = $('#d46');
  var e47 = $('#e47');
  var d47 = $('#d47');
  var e48 = $('#e48');
  var d48 = $('#d48');
  var e49 = $('#e49');
  var d49 = $('#d49');
  var e50 = $('#e50');
  var d50 = $('#d50');
  var e51 = $('#e51');
  var d51 = $('#d51');
  var e52 = $('#e52');
  var d52 = $('#d52');
  var e53 = $('#e53');
  var d53 = $('#d53');
  var e54 = $('#e54');
  var d54 = $('#d54');
  var f38 = $('#f38');
  var e56 = $('#e56');
  var d56 = $('#d56');
  var e57 = $('#e57');
  var d57 = $('#d57');
  var e58 = $('#e58');
  var d58 = $('#d58');
  var f55 = $('#f55');
  var d60 = $('#d60');
  var e60 = $('#e60');
  var e61 = $('#e61');
  var d61 = $('#d61');
  var e62 = $('#e62');
  var d62 = $('#d62');
  var e63 = $('#e63');
  var d63 = $('#d63');
  var f59 = $('#f59');
  var d65 = $('#d65');
  var e65 = $('#e65');
  var d66 = $('#d66');
  var e66 = $('#e66');
  var e67 = $('#e67');
  var d67 = $('#d67');
  var e68 = $('#e68');
  var d68 = $('#d68');
  var e69 = $('#e69');
  var d69 = $('#d69');
  var f64 = $('#f64');
  var d71 = $('#d71');
  var e71 = $('#e71');
  var d72 = $('#d72');
  var e72 = $('#e72');
  var e73 = $('#e73');
  var d73 = $('#d73');
  var e74 = $('#e74');
  var d74 = $('#d74');
  var e75 = $('#e75');
  var d75 = $('#d75');
  var d76 = $('#d76');
  var e76 = $('#e76');
  var f70 = $('#f70');
  var rez_1720 = $('#rez_1720'); 

  var initTheForm = function(){ 
	if(existingData == null){
	  for(var i=14;i<=76;i++){
		  $("#d"+i).val(0);
		  $("#e"+i).val(0);
	  }
	  rez_1720.val(0);
	  f14.val(0);
	  f24.val(0);
	  f31.val(0);
	  f38.val(0);
	  f55.val(0);
	  f59.val(0);
	  f64.val(0);
	  f70.val(0);
	}else{
	  for(var i=15;i<=76;i++){
		  if(existingData["d"+i] != null){
			  $("#d"+i).val(existingData["d"+i]);  			  
		  }
		  else{
			  $("#d"+i).val(0);
		  }
		  calculate("e"+i);
	  }
	  $("#facultate").val(existingData["facultate"]); 
	  $("#departament").val(existingData["departament"]); 
	  $("#grad").val(existingData["grad"]); 
	  $("#nume").val(existingData["nume"]); 
	  $("#alte_activ").val(existingData["alte_activ"]); 
	  $("#data").val(existingData["data"]); 
	  $("#nume_prenume").val(existingData["nume_prenume"]); 
	  calculate("d14");
	  calculate("f14");	
	  calculate("f24");	
	  calculate("f31");
	  calculate("d39");
	  calculate("e39");
	  calculate("d40");
	  calculate("e40");
	  calculate("d41");
	  calculate("e41");
	  calculate("d42");
	  calculate("e42");
	  calculate("f38");
	  calculate("f55");
	  calculate("f59");		
	  calculate("f64");
	  calculate("f70");
	  calculate("rez_1720");
	  
	}
  }
  var calculate = function(cellToCalculate){
	  switch(cellToCalculate){
		  case "e15":
			  e15.val(2*d15.val());
			  break;
		  case "e16":
			  e16.val(2.5*d16.val());
			  break;
		  case "e17":
			  e17.val(d17.val());
			  break;
		  case "e18":
			 e18.val(1.5*d18.val());
			  break;
		  case "e19":
			  e19.val(d19.val());
			  break;
		  case "e20":
			  e20.val(1.25*d20.val());
			  break;
		   case "e21":
			  e21.val(d21.val());
			  break;
		  case "e22":
			  e22.val(1.25*d22.val());
			  break;
		   case "e23":
			  e23.val(d23.val());
			  break;
		  case "d14":
	 		 d14.val((parseFloat(e15.val())+parseFloat(e16.val())+parseFloat(e17.val())+parseFloat(e18.val())+parseFloat(e19.val())+parseFloat(e20.val())+parseFloat(e21.val())+parseFloat(e22.val())+parseFloat(e23.val()))/2);
			  break;
		   case "f14":
	  		f14.val(28*d14.val());
			  break;
		   case "e25":
			  e25.val(0.5*d25.val());
			  break;
		  case "e26":
			  e26.val(0.5*14*d26.val());
			  break;
		  case "e27":
			  e27.val(0.5*14*d27.val());
			  break;
		  case "e28":
			 e28.val(0.5*14*d28.val());
			  break;
		  case "e29":
			  e29.val(0.5*14*d29.val());
			  break;
		  case "e32":
			  e32.val(d32.val());
			  break;
		   case "e33":
			  e33.val(d33.val());
			  break;
		  case "e34":
			  e34.val(d34.val());
			  break;
		   case "e35":
			  e35.val(d35.val());
		   case "e36":
			  e36.val(d36.val());
			  break;
		   case "e37":
			  e37.val(d37.val());

			case "d39":
				  for(var i=15;i<=76;i++){
						if($("d"+i).val() == null)
						{
							$("d"+i).val(0);  	  
						}
					}
				d39.val((parseFloat(d15.val())+parseFloat(d16.val()))*14); 
				break;
			 case "d40":
				d40.val((parseFloat(d17.val())+parseFloat(d18.val()))*14); 
				break;
			case "d41":
				d41.val((parseFloat(d19.val())+parseFloat(d20.val()))*14); 
				break;
			case "d42":
				d42.val((parseFloat(d21.val())+parseFloat(d22.val()))*14); 
				break;
		   case "f24":
			  f24.val(parseFloat(e25.val())+parseFloat(e26.val())+parseFloat(e27.val())+parseFloat(e28.val())+parseFloat(e29.val()));
			  break;
		   case "f31":
			  f31.val(parseFloat(e32.val())+parseFloat(e33.val())+parseFloat(e34.val())+parseFloat(e35.val())+parseFloat(e36.val())+parseFloat(e37.val()));
		    case "e43":
			  e43.val(14*d43.val());
			  break;
		  case "e44":
			 e44.val(d44.val());
			  break;
		  case "e45":
			  e45.val(3*d45.val());
			  break;
		  case "e46":
			 e46.val(3*d46.val());
			  break;
		  case "e47":
			  e47.val(d47.val());
			  break;
		  case "e48":
			  e48.val(0.3*d48.val());
			  break;
		   case "e49":
			 e49.val(0.3*d49.val());
			  break;
		  case "e50":
			  e50.val(0.3*d50.val());
			  break;
		   case "e51":
			  e51.val(0.3*d51.val());
		   case "e52":
			  e52.val(0.3*d52.val());
			  break;
		   case "e53":
			  e53.val(0.3*d53.val());
			  break;
		   case "e54":
			  e54.val(0.5*d54.val());
			  break;
		    case "e39":
			  e39.val(0.5*d39.val());
		   case "e40":
			  e40.val(0.5*d40.val());
			  break;
		   case "e41":
			  e41.val(0.5*d41.val());
			  break;
		   case "e42":
			  e42.val(0.5*d42.val());
			  break;
		   case "f38":
			  f38.val(parseFloat(e39.val())+parseFloat(e40.val())+parseFloat(e41.val())+parseFloat(e42.val())+parseFloat(e43.val())+parseFloat(e44.val())+parseFloat(e45.val())+parseFloat(e46.val())+parseFloat(e47.val())+parseFloat(e48.val())+parseFloat(e49.val())+parseFloat(e50.val())+parseFloat(e51.val())+parseFloat(e52.val())+parseFloat(e53.val())+parseFloat(e54.val()));
			  break;
		   case "e56":
			  e56.val(d56.val());
			  break;
		   case "e57":
			  e57.val(0.5*d57.val());
		   case "e58":
			  e58.val(0.5*d58.val());
			  break;
		   case "f55":
			  f55.val(parseFloat(e56.val())+parseFloat(e57.val())+parseFloat(e58.val()));
			  break;
		   case "e60":
			  e60.val(0.1*d60.val());
			  break;
		    case "e61":
			  e61.val(0.5*d61.val());
		   case "e62":
			  e62.val(0.5*d62.val());
			  break;
		   case "e63":
			  e63.val(d63.val());
			  break;
		   case "f59":
			  f59.val(parseFloat(e60.val())+parseFloat(e61.val())+parseFloat(e62.val())+parseFloat(e63.val()));
			  break;
		   case "e65":
			 e65.val(d65.val());
			  break;
		  case "e66":
			  e66.val(d66.val());
			  break;
		  case "e67":
			 e67.val(d67.val());
			  break;
		  case "e68":
			  e68.val(d68.val());
			  break;
		  case "e69":
			  e69.val(d69.val());
			  break;
		   case "f64":
			 f64.val(parseFloat(e65.val())+parseFloat(e66.val())+parseFloat(e67.val())+parseFloat(e68.val())+parseFloat(e69.val()));
			  break;
		  case "e71":
			  e71.val(2*d71.val());
			  break;
		   case "e72":
			  e72.val(2*d72.val());
		   case "e73":
			  e73.val(2*d73.val());
			  break;
		   case "e74":
			  e74.val(d74.val());
			  break;
		   case "e75":
			  e75.val(d75.val());
			  break;
		    case "e76":
			  e76.val(d76.val());
		   case "f70":
			  f70.val(parseFloat(e71.val())+parseFloat(e72.val())+parseFloat(e73.val())+parseFloat(e74.val())+parseFloat(e75.val())+parseFloat(e76.val()));
			  break;
		   case "rez_1720":
	 			 rez_1720.val((parseFloat(e15.val())+parseFloat(e16.val())+parseFloat(e17.val())+parseFloat(e18.val())+parseFloat(e19.val())+parseFloat(e20.val())+parseFloat(e21.val())+parseFloat(e22.val())+parseFloat(e23.val()))*14+(parseFloat(e25.val())+parseFloat(e26.val())+parseFloat(e27.val())+parseFloat(e28.val())+parseFloat(e29.val())+parseFloat(e32.val())+parseFloat(e33.val())+parseFloat(e34.val())+parseFloat(e35.val())+parseFloat(e36.val())+parseFloat(e37.val())+parseFloat(e39.val())+parseFloat(e40.val())+parseFloat(e41.val())+parseFloat(e42.val())+parseFloat(e43.val())+parseFloat(e44.val())+parseFloat(e45.val())+parseFloat(e46.val())+parseFloat(e47.val())+parseFloat(e48.val())+parseFloat(e49.val())+parseFloat(e50.val())+parseFloat(e51.val())+parseFloat(e52.val())+parseFloat(e53.val())+parseFloat(e54.val())+parseFloat(e56.val())+parseFloat(e57.val())+parseFloat(e58.val())+parseFloat(e60.val())+parseFloat(e61.val())+parseFloat(e62.val())+parseFloat(e63.val())+parseFloat(e65.val())+parseFloat(e66.val())+parseFloat(e67.val())+parseFloat(e68.val())+parseFloat(e69.val())+parseFloat(e71.val())+parseFloat(e72.val())+parseFloat(e73.val())+parseFloat(e74.val())+parseFloat(e75.val())+parseFloat(e76.val())));  
			  break;

		  default:
	  }

  }	
  initTheForm();
   
  d15.on('keypress', function () {
    setTimeout(function () {
	  calculate("e15");
	  calculate("d14");
	  calculate("f14");
	  calculate("d39");
	  calculate("e39");
	  calculate("rez_1720");
   }, 0);
  });
    d16.on('keypress', function () {
    setTimeout(function () {
	  calculate("e16");
	  calculate("d14");
	  calculate("f14");
	  calculate("d39");
	  calculate("e39"); 
	  calculate("rez_1720");
    }, 0);
  });
   d17.on('keypress', function () {
    setTimeout(function () {
	  calculate("e17");
	  calculate("d14");
	  calculate("f14");
	  calculate("d40");
	  calculate("e40");
	  calculate("rez_1720");

    }, 0);
  });
   d18.on('keypress', function () {
    setTimeout(function () {
	 calculate("e18");
	  calculate("d14");
	  calculate("f14");
	  calculate("rez_1720");
	  calculate("d40");
	  calculate("e40");
	  
    }, 0);
  });
     d19.on('keypress', function () {
    setTimeout(function () {
	 calculate("e19");
	  calculate("d14");
	  calculate("f14");
	  calculate("d41");
	  calculate("e41");
	  calculate("rez_1720");

    }, 0);
  });
     d20.on('keypress', function () {
    setTimeout(function () {
	  calculate("e20");
	  calculate("d14");
	  calculate("f14");
	  calculate("d41");
	  calculate("e41");
	  calculate("rez_1720");

    }, 0);
  });
     d21.on('keypress', function () {
    setTimeout(function () {
	 calculate("e21");
	  calculate("d14");
	  calculate("f14");
	  calculate("d42");
	  calculate("e42");
	  calculate("rez_1720");

    }, 0);
  });
     d22.on('keypress', function () {
    setTimeout(function () {
	calculate("e22");
	  calculate("d14");
	  calculate("f14");
	  calculate("d42");
	  calculate("e42");
	  calculate("rez_1720");

    }, 0);
  });
     d23.on('keypress', function () {
    setTimeout(function () {
	  calculate("e23");
	  calculate("d14");
	  calculate("f14");
	  calculate("rez_1720");

    }, 0);
  });
  
 
    d25.on('keypress', function () {
    setTimeout(function () {
	  calculate("e25");
	  calculate("f24");
	  calculate("rez_1720");

    }, 0);
  });

    d26.on('keypress', function () {
    setTimeout(function () {
	  calculate("e26");
	  calculate("f24");
	  calculate("rez_1720");

    }, 0);
  });

    d27.on('keypress', function () {
    setTimeout(function () {
	  calculate("e27");
	  calculate("f24");
	  calculate("rez_1720");

    }, 0);
  });

    d28.on('keypress', function () {
    setTimeout(function () {
	  calculate("e28");
	  calculate("f24");
	  calculate("rez_1720");

    }, 0);
  });

    d29.on('keypress', function () {
    setTimeout(function () {
	  calculate("e29");
	  calculate("f24");
	  calculate("rez_1720");

    }, 0);
  });

  
  d32.on('keypress', function () {
    setTimeout(function () {
	  calculate("e32");
	  calculate("f31");
	  calculate("rez_1720");
    }, 0);
  });
  
  d33.on('keypress', function () {
    setTimeout(function () {
	  calculate("e33");
	  calculate("f31");
	  calculate("rez_1720");
  }, 0);
  });
  d34.on('keypress', function () {
    setTimeout(function () {
	  calculate("e34");
	  calculate("f31");
	  calculate("rez_1720");
   }, 0);
  });
  d35.on('keypress', function () {
    setTimeout(function () {
	  calculate("e35");
	  calculate("f31");
	  calculate("rez_1720");
   }, 0);
  });
  d36.on('keypress', function () {
    setTimeout(function () {
	  calculate("e36");
	  calculate("f31");
	  calculate("rez_1720");
  }, 0);
  });
  d37.on('keypress', function () {
    setTimeout(function () {
	  calculate("e37");
	  calculate("f31");
	  calculate("rez_1720");
  }, 0);
  });
	
    d43.on('keypress', function () {
    setTimeout(function () {
	  calculate("e43");
	  calculate("f38");
	  calculate("rez_1720");
   }, 0);
  });
  
  d44.on('keypress', function () {
    setTimeout(function () {
	  calculate("e44");
	  calculate("f38");
	  calculate("rez_1720");
   }, 0);
  });
  d45.on('keypress', function () {
    setTimeout(function () {
	  calculate("e45");
	  calculate("f38");
	  calculate("rez_1720");
   }, 0);
  });
  d46.on('keypress', function () {
    setTimeout(function () {
	  calculate("e46");
	  calculate("f38");
	  calculate("rez_1720");
   }, 0);
  });
  d47.on('keypress', function () {
    setTimeout(function () {
	  calculate("e47");
	  calculate("f38");
	  calculate("rez_1720");
  }, 0);
  });
  d48.on('keypress', function () {
    setTimeout(function () {
	  calculate("e48");
	  calculate("f38");
	  calculate("rez_1720");
  }, 0);
  });
    d49.on('keypress', function () {
    setTimeout(function () {
	  calculate("e49");
	  calculate("f38");
	  calculate("rez_1720");
  }, 0);
  });
  
  d50.on('keypress', function () {
    setTimeout(function () {
	  calculate("e50");
	  calculate("f38");
	  calculate("rez_1720");
  }, 0);
  });
  d51.on('keypress', function () {
    setTimeout(function () {
	  calculate("e51");
	  calculate("f38");
	  calculate("rez_1720");
   }, 0);
  });
  d52.on('keypress', function () {
    setTimeout(function () {
	  calculate("e52");
	  calculate("f38");
	  calculate("rez_1720");
    }, 0);
  });
  d53.on('keypress', function () {
    setTimeout(function () {
	 calculate("e53");
	 calculate("f38");
	 calculate("rez_1720");
  }, 0);
  });
  d54.on('keypress', function () {
    setTimeout(function () {
	  calculate("e54");
	  calculate("f38");
	  calculate("rez_1720");
  }, 0);
  });
  
    
  
    d56.on('keypress', function () {
    setTimeout(function () {
	  calculate("e56");
	  calculate("f55");
	  calculate("rez_1720");
   
    }, 0);
  });
  d57.on('keypress', function () {
    setTimeout(function () {
	  calculate("e57");
	  calculate("f55");
	  calculate("rez_1720");
   
   }, 0);
  });
  d58.on('keypress', function () {
    setTimeout(function () {
	  calculate("e58");
	  calculate("f55");
	  calculate("rez_1720");
   
   }, 0);
  });
  
 
    d60.on('keypress', function () {
    setTimeout(function () {
	  calculate("e60");
	  calculate("f59");
	  calculate("rez_1720");
   
    }, 0);
  });
  d61.on('keypress', function () {
    setTimeout(function () {
	  calculate("e61");
	  calculate("f59");
	  calculate("rez_1720");
   
   }, 0);
  });
  d62.on('keypress', function () {
    setTimeout(function () {
	  calculate("e62");
	  calculate("f59");
	  calculate("rez_1720");
   
   }, 0);
  });
    d63.on('keypress', function () {
    setTimeout(function () {
	  calculate("e63");
	  calculate("f59");
	  calculate("rez_1720");
   
   }, 0);
  });
  
  
    d65.on('keypress', function () {
    setTimeout(function () {
	  calculate("e65");
	  calculate("f64");
	  calculate("rez_1720");
   
    }, 0);
  });
  d66.on('keypress', function () {
    setTimeout(function () {
	  calculate("e66");
	  calculate("f64");
	  calculate("rez_1720");

   }, 0);
  });
  d67.on('keypress', function () {
    setTimeout(function () {
	  calculate("e67");
	  calculate("f64");
	  calculate("rez_1720");
     
   }, 0);
  });
    d68.on('keypress', function () {
    setTimeout(function () {
	  calculate("e68");
	  calculate("f64");
	  calculate("rez_1720");
     
   }, 0);
  });
        d69.on('keypress', function () {
    setTimeout(function () {
	  calculate("e69");
	  calculate("f64");
	  calculate("rez_1720");
     
   }, 0);
  });
  
    d71.on('keypress', function () {
    setTimeout(function () {
	  calculate("e71");
	  calculate("f70");
	  calculate("rez_1720");
   
    }, 0);
  });
  d72.on('keypress', function () {
    setTimeout(function () {
	  calculate("e72");
	  calculate("f70");
	  calculate("rez_1720");
   
   }, 0);
  });
  d73.on('keypress', function () {
    setTimeout(function () {
	  calculate("e73");
	  calculate("f70");
	  calculate("rez_1720");
   }, 0);
  });
    d74.on('keypress', function () {
    setTimeout(function () {
	  calculate("e74");
	  calculate("f70");
	  calculate("rez_1720");
   
   }, 0);
  });
        d75.on('keypress', function () {
    setTimeout(function () {
	  calculate("e75");
	  calculate("f70");
	  calculate("rez_1720");
   
   }, 0);
  });
       d76.on('keypress', function () {
    setTimeout(function () {
	  calculate("e76");
	  calculate("f70");
	  calculate("rez_1720");
   
   }, 0);
  });
   
})