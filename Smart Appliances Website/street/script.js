$(document).ready(function() {

  //creamos un objeto de firebase, y le pasamos la URL como parametro
  var ref = new Firebase("https://street-lights.firebaseio.com/123/states");
   /*****************************************************************
   Obtenemos el valor del último estado 
  ******************************************************************/
  ref.once("value", function(res) {

    var luzSala = res.child("001").val();
    $('#strswitch').attr('checked', luzSala); // 
	// $('#livswitch').attr('livchecked', res.val().livswitch); // 
  //  console.log("Done: " +luzSala)
    var luzComedor = res.child("002").val();
    $('#strlivswitch').attr('checked', luzComedor);
	
	 var luz = res.child("003").val();
    $('#strlightswitch').attr('checked', luz);
	
 });
 
   ref.child("001").on("value", function(snapshot){
    
    var luz_sala = snapshot.val();
    $('#strswitch').prop('checked', luz_sala);
    //console.log(" " + luz_sala);
    
  });
  
    ref.child("002").on("value", function(snapshot){
    
    var luz_comedor = snapshot.val();
    $('#strlivswitch').prop('checked', luz_comedor);
    //console.log(" " + luz_comedor);
    
  }); 

      ref.child("003").on("value", function(snapshot){
    
    var lawn = snapshot.val();
    $('#strlightswitch').prop('checked', lawn);
    //console.log(" " + luz_comedor);
    
  }); 




 /*****************************************************************
   Actualizamos el valor, cambiado el estado del Switch 
  ******************************************************************/

  $('#strswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("strOn")
          ref.update({ 001: true });
      }
      else{
          console.log("strOff")
          ref.update({ 001: false });
      }
    });
	
	  $('#strlivswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("strlivOn")
          ref.update({ 002: true });
      }
      else{
          console.log("strlivOff")
          ref.update({ 002: false });
      }
    });
	
	  	$('#strlightswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("strliOn")
          ref.update({ 003: true });
      }
      else{
          console.log("strliOff")
          ref.update({ 003: false });
      }
    });
});