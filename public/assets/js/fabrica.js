function MNuevaFabrica(){
    $("#modal-lg").modal("show")
  
    var obj=""
    $.ajax({
      type:"POST",
      url:"../Factories/RegisterFactory",
      data:obj,
      success:function(data){
        $("#content-lg").html(data)
      }
    })
  }