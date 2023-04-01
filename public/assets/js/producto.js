//#region Linea
function MNuevaLinea(){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"../Lines/RegisterLine",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function RegLine(){

  var formData= new FormData($("#FormRegLines")[0])

  $.ajax({
    type:"POST",
    url:"../Lines/InsertLine",
    data:formData,
    cache:false,
    contentType:false,
    processData:false,
    success:function(data){
      console.log(data)
      if(data=="ok"){
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'El Producto ha sido registrado',
          timer: 1000
        })
        setTimeout(function(){
          location.reload()
        },1200)
      }else{
        Swal.fire({
          icon:'error',
          title:'Error!',
          text:'Error de registro!!!',
          showConfirmButton: false,
          timer:1500
        })
      }
    }
  })


}

function MVerLinea(){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"../Lines/InfoLine",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function MELiLinea(id){
  var obj={
    id:id
  }

  Swal.fire({
    title:'Esta seguro de eliminar esta Linea?',
    showDenyButton:true,
    showCancelButton:false,
    confirmButtonText:'Confirmar',
    denyButtonText:'Cancelar'    
  }).then((result)=>{
    if(result.isConfirmed){
      $.ajax({
        type:"POST",
        data:obj,
        url:"controlador/ProductoControlador.php?ctrEliProducto",
        success:function(data){

          if(data=="ok"){
            location.reload()
          }else{
            Swal.fire({
              icon:'error',
              title:'Error!!!',
              text:'El Producto no puede ser eliminado',
              showConfirmButton:false,
              time:1500
            })
          }
        }
      })



    }
  })
}

function MNuevoProducto(){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"../Products/RegisterProduct",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function RegProducto(){

  var formData= new FormData($("#FormRegProducto")[0])

  $.ajax({
    type:"POST",
    url:"Controllers/Products.php?InsertProduct",
    data:formData,
    cache:false,
    contentType:false,
    processData:false,
    success:function(data){
      console.log(data)
      if(data=="ok"){
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'El Producto ha sido registrado',
          timer: 1000
        })
        setTimeout(function(){
          location.reload()
        },1200)
      }else{
        Swal.fire({
          icon:'error',
          title:'Error!',
          text:'Error de registro!!!',
          showConfirmButton: false,
          timer:1500
        })
      }
    }
  })


}

function MEditProducto(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/producto/FEditProducto.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function EditProducto(){

  var formData= new FormData($("#FormEditProducto")[0])

  $.ajax({
    type:"POST",
    url:"controlador/productoControlador.php?ctrEditProducto",
    data:formData,
    cache:false,
    contentType:false,
    processData:false,
    success:function(data){
      if(data=="ok"){
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'El producto ha sido actualizado',
          timer: 1000
        })
        setTimeout(function(){
          location.reload()
        },1200)
      }else{
        Swal.fire({
          icon:'error',
          title:'Error!',
          text:'No se ha podido actualizar!!!',
          showConfirmButton: false,
          timer:1500
        })
      }
    }
  })

}

function MVerProducto(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/producto/MVerProducto.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function MEliProducto(id){
  var obj={
    id:id
  }

  Swal.fire({
    title:'Esta seguro de eliminar este Producto?',
    showDenyButton:true,
    showCancelButton:false,
    confirmButtonText:'Confirmar',
    denyButtonText:'Cancelar'    
  }).then((result)=>{
    if(result.isConfirmed){
      $.ajax({
        type:"POST",
        data:obj,
        url:"controlador/ProductoControlador.php?ctrEliProducto",
        success:function(data){

          if(data=="ok"){
            location.reload()
          }else{
            Swal.fire({
              icon:'error',
              title:'Error!!!',
              text:'El Producto no puede ser eliminado',
              showConfirmButton:false,
              time:1500
            })
          }
        }
      })



    }
  })
}

function previsualizar(){
  let imagen=document.getElementById("ImgProducto").files[0]

  if(imagen["type"]!="image/png" && imagen["type"]!="image/jpeg"){
    $("#ImgProducto").val("")
    swal.fire({
      icon:"error",
      showConfirmButton:true,
      title:"La imagen debe ser formato PNG o JPG"
    })
  }else if(imagen["size"]>10000000){
    $("#ImgProducto").val("")
    Swal.fire({
      icon: "error",
      showConfirmButton:true,
      title: "La imagen no debe superior a 10MB"
    })

  }else{
    let datosImagen=new FileReader
    datosImagen.readAsDataURL(imagen)

    $(datosImagen).on("load", function(event){
      let rutaImagen=event.target.result
      $(".previsualizar").attr("src", rutaImagen)

    })
  }
}