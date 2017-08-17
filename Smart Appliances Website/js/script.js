$(document).ready(function() {

  //creamos un objeto de firebase, y le pasamos la URL como parametro
  var ref = new Firebase("https://smart-home-6ad7f.firebaseio.com/bedroom/");
   /*****************************************************************
   Obtenemos el valor del último estado 
  ******************************************************************/
  ref.once("value", function(res) {

    var luzSala = res.child("led").val();
    $('#bedswitch').attr('checked', luzSala); // 
	// $('#livswitch').attr('livchecked', res.val().livswitch); // 
  //  console.log("Done: " +luzSala)
    var luzComedor = res.child("livled").val();
    $('#livswitch').attr('checked', luzComedor);
	
	 var luz = res.child("lawnwater").val();
    $('#waterswitch').attr('checked', luz);
	
	 var Comedor = res.child("lawnled").val();
    $('#lawnswitch').attr('checked', Comedor);
	
		 var Servo = res.child("servo").val();
    $('#doorswitch').attr('checked', Servo);
	
	var study = res.child("study").val();
    $('#studyswitch').attr('checked', study);
	
		var kitchen = res.child("kitchen").val();
    $('#kitchenswitch').attr('checked', kitchen);
	
	var bathroom = res.child("bathroom").val();
    $('#bathswitch').attr('checked', bathroom);
	
		var dining = res.child("dining").val();
    $('#diningswitch').attr('checked', dining);
 
 });
 
   ref.child("led").on("value", function(snapshot){
    
    var luz_sala = snapshot.val();
    $('#bedswitch').prop('checked', luz_sala);
    //console.log("Cambio de estado_sala: " + luz_sala);
    
  });
  
    ref.child("lawnwater").on("value", function(snapshot){
    
    var luz_comedor = snapshot.val();
    $('#waterswitch').prop('checked', luz_comedor);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  }); 

      ref.child("lawnled").on("value", function(snapshot){
    
    var lawn = snapshot.val();
    $('#lawnswitch').prop('checked', lawn);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  }); 

  
      ref.child("livled").on("value", function(snapshot){
    
    var liv = snapshot.val();
    $('#livswitch').prop('checked', liv);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  }); 
  
    
      ref.child("servo").on("value", function(snapshot){
    
    var ga = snapshot.val();
    $('#doorswitch').prop('checked', ga);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  });

    ref.child("study").on("value", function(snapshot){
    
    var ST = snapshot.val();
    $('#studyswitch').prop('checked', ST);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  });  

  
    ref.child("kitchen").on("value", function(snapshot){
    
    var kit = snapshot.val();
    $('#kitchenswitch').prop('checked', kit);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  }); 
  
      ref.child("bathroom").on("value", function(snapshot){
    
    var bath = snapshot.val();
    $('#bathswitch').prop('checked', bath);
    //console.log("Cambio de estado_comedor: " + luz_comedor);
    
  }); 
  
        ref.child("dining").on("value", function(snapshot){
    
    var dining = snapshot.val();
    $('#diningswitch').prop('checked', dining);
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

  $('#bedswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("bedOn")
          ref.update({ led: true });
      }
      else{
          console.log("bedOff")
          ref.update({ led: false });
      }
    });
	
	  $('#livswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("livOn")
          ref.update({ livled: true });
      }
      else{
          console.log("livOff")
          ref.update({ livled: false });
      }
    });
	
	  	$('#lawnswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("lawnOn")
          ref.update({ lawnled: true });
      }
      else{
          console.log("lawnOff")
          ref.update({ lawnled: false });
      }
    });
	
	
		  	$('#waterswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("waterOn")
          ref.update({ lawnwater: true });
      }
      else{
          console.log("waterOff")
          ref.update({ lawnwater: false });
      }
    });
	
		
	$('#doorswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("doorOn")
          ref.update({ servo: true });
      }
      else{
          console.log("doorOff")
          ref.update({ servo: false });
      }
    });
	
	$('#studyswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("studyOn")
          ref.update({ study: true });
      }
      else{
          console.log("studyOff")
          ref.update({ study: false });
      }
    });
	
	$('#kitchenswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("kitchenOn")
          ref.update({ kitchen: true });
      }
      else{
          console.log("kitchenOff")
          ref.update({ kitchen: false });
      }
    });
	
		$('#bathswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("bathOn")
          ref.update({ bathroom: true });
      }
      else{
          console.log("bathOff")
          ref.update({ bathroom: false });
      }
    });
	
			$('#diningswitch').on('change', function(){ 
     if(this.checked) 
      {
          console.log("diningOn")
          ref.update({ dining: true });
      }
      else{
          console.log("diningOff")
          ref.update({ dining: false });
      }
    });
});