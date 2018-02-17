//****************************************//
//	  		encrypt and decrypt
//				library
//			made by chan022
//              v.1.0
//****************************************//
function md5decode(hash){
var output;
$.ajax({
			   type: "POST",
			   url: ("brute-force.php?md5=" + hash),
			   data: {  
						},
			   async: false,
			   dataType: "json",
			   success: function(data){
			   output = data.output;
			}});
			return output;
}
function md5encode(hash){
var output;
$.ajax({
			   type: "POST",
			   url: ("encrypt.php?md5=" + hash),
			   data: {  
						},
			   async: false,
			   dataType: "json",
			   success: function(data){
			   output = data.output;
			}});
			return output;
}