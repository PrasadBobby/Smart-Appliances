$(document).ready(function() {

  //creamos un objeto de firebase, y le pasamos la URL como parametro
  var ref = new Firebase("https://smart-home-6ad7f.firebaseio.com/bedroom/");
   /*****************************************************************
   Obtenemos el valor del último estado 
  ******************************************************************/
  ref.once("value", function(res) {
	
		 var Servo = res.child("servo").val();
    $('#switch_Off').attr('checked', Servo);
	
		 var ServoTwo = res.child("servotwo").val();
    $('#switch_Green').attr('checked', ServoTwo);
	
		 var ServoThree = res.child("servothree").val();
    $('#switch_Blue').attr('checked', ServoThree);
	
		 var ServoFour = res.child("servofour").val();
    $('#switch_Red').attr('checked', ServoFour);
 });
 	 //servo
	 ref.child("servo").on("value", function(snapshot){
    
    var ser = snapshot.val();
    $('#switch_Off').prop('checked', ser);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
	
	  ref.child("servotwo").on("value", function(snapshot){
    
    var serv = snapshot.val();
    $('#switch_Green').prop('checked', serv);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
	
	  ref.child("servothree").on("value", function(snapshot){
    
    var se = snapshot.val();
    $('#switch_Blue').prop('checked', se);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
	
	  ref.child("servofour").on("value", function(snapshot){
    
    var servoo = snapshot.val();
    $('#switch_Red').prop('checked', servoo);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  }); 


  /*****************************************************************
   Obtenemos el valor del estado de la luz en tiempo real, 
   cada vez que haya cambio
  ***************************************************************** /*
   /*  ref.on("child_changed", function(res) {

    var luz_sala = res.val();
    $('#bedswitch').prop('checked', luz_sala);
    //console.log("Cambio de estado: " +luz_sala)
	}); 
	
	 ref.on("child_changed", function(result) {
	   var luz = result.val();
    $('#livswitch').prop('checked', luz);
	}); 
	
	 ref.on("child_changed", function(res) {
	   var lusala = res.val();
    $('#lawnswitch').prop('checked', lusala);
	}); 
	
	 ref.on("child_changed", function(res) {
	   var sala = res.val();
    $('#waterswitch').prop('checked', sala);

  });     

  */



 /*****************************************************************
   Actualizamos el valor, cambiado el estado del Switch 
  ******************************************************************/
	
	//servo
	
	  	$('#switch_Off').on('change', function(){ 
     if(this.checked) 
      {
          console.log("thirty")
          ref.update({ servo: true });
		  ref.update({ servotwo: false });
		  ref.update({ servothree: true });
		  ref.update({ servofour: true });
      }
     
    });
	
		
	  	$('#switch_Green').on('change', function(){ 
     if(this.checked) 
      {
          console.log("sxity")
          ref.update({ servo: false });
		  ref.update({ servotwo: true });
		  ref.update({ servothree: false });
		  ref.update({ servofour: false });
      }
     
    });
	
		  	$('#switch_Blue').on('change', function(){ 
     if(this.checked) 
      {
          console.log("ninty")
          ref.update({ servo: false });
		  ref.update({ servotwo: false });
		  ref.update({ servothree: true });
		  ref.update({ servofour: false });
      }
     
    });
	
		  	$('#switch_Red').on('change', function(){ 
     if(this.checked) 
      {
          console.log("eighty")
          ref.update({ servo: false });
		  ref.update({ servotwo: false });
		  ref.update({ servothree: false });
		  ref.update({ servofour: true });
      }
     
    });
	
});