/*==============
variables globales
================*/
var host="https://localhost:5001"
var codSistema="71D7A7B740E994C89373447"
var nitEmpresa=3726922011
var cuis="2E8B5B9E"
var rsEmpresa="SOFIA"
var telEmpresa="44594817"
let dirEmpresa="Calle Ballivian #3390"
var cufd;
var codControlCufd;
var fechaVigCufd;
var leyenda;
var token="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJqd3JvYmxlcyIsImNvZGlnb1Npc3RlbWEiOiI3MUQ3QTdCNzQwRTk5NEM4OTM3MzQ0NyIsIm5pdCI6Ikg0c0lBQUFBQUFBQUFETTJOekt6TkRJeU1EUUVBSTlYR3pjS0FBQUEiLCJpZCI6NzEwNTQ5LCJleHAiOjE2NzUzODI0MDAsImlhdCI6MTY0Mzk0NTI1Niwibml0RGVsZWdhZG8iOjM3MjY5MjIwMTEsInN1YnNpc3RlbWEiOiJTRkUifQ.nS8t-EDaBi-e3PGtnbnTI-7PKPy_6Kia1zFPKdzZgDnZ6VfXlimlrTsEgTb8_iDKoJ7Hy-vLw_0o_vgpLqSltA"

function verificarComunicacion(){
  var obj=""
  $.ajax({
    type:"POST",
    url:host+"/api/CompraVenta/comunicacion",
    data:JSON.stringify(obj),
    cache:false,
    contentType:"application/json",
    precessData:false,
    success:function(data){
      if(data["transaccion"]==true){
        document.getElementById("comunSiat").innerHTML="Conectado"
        document.getElementById("comunSiat").className="badge badge-success"
      }
    }
  }).fail(function(jqXHR, textSatus, errorThrown){
    if(jqXHR.status==500){
      document.getElementById("comunSiat").innerHTML="Desconectado"
      document.getElementById("comunSiat").className="badge badge-secondary"
    }
  })
}

setInterval(verificarComunicacion(),3000)

/*===================================
comprobar vigencia automatica de cufd
====================================*/
setTimeout(()=>{
  verificarVigenciaCufd()
},4000)
/*=============
solicitud cufd
==============*/
function solicitudCufd(){
  return new Promise((resolve, reject)=>{
    var obj={
      codigoAmbiente: 2,
      codigoModalidad: 2,
      codigoPuntoVenta: 0,
      codigoPuntoVentaSpecified: true,
      codigoSistema: codSistema,
      codigoSucursal: 0,
      nit: nitEmpresa,
      cuis: cuis
    }

    $.ajax({
      type: "POST",
      url: host+"/api/Codigos/solicitudCufd?token="+token,
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      success:function(data){
        cufd=data["codigo"]
        codControlCufd=data["codigoControl"]
        fechaVigCufd=transformaFecha(data["fechaVigencia"])
        resolve(cufd)
      }
    })
  })
}

function registrarNuevoCUFD(){
  solicitudCufd().then(ok=>{
    if(ok!=""||ok!=null){

      var obj={
        "cufd":cufd,
        "fechaVigCufd":fechaVigCufd,
        "codControlCufd":codControlCufd
      }

      $.ajax({
        type:"POST",
        data: obj,
        url: "controlador/ventaControlador.php?ctrNuevoCufd",
        cache: false,
        success:function(data){
          if(data=="ok"){
            $("#panelInfo").before("<span class='text-primary'>Cufd registrado</span><br>")
          }else{
            $("#panelInfo").before("<span class='text-danger'>Error de registro Cufd!!!</span><br>")
          }
        }
      })

    }
  })
}

function verificarVigenciaCufd(){
  /*obtenemos la fecha actual*/
  let date=new Date()

  /*obtenemos los datos del ultimo cufd*/
  var obj=""

  $.ajax({
    type:"POST",
    url:"controlador/ventaControlador.php?ctrUltimoCufd",
    data:obj,
    cache:false,
    dataType:"json",
    success:function(data){

      //fecha de vigencia del ultimo CUFD
      let vigCufdActual=new Date(data["fecha_vigencia"])

      //comparar fechas
      if(date.getTime()>vigCufdActual.getTime()){
        $("#panelInfo").before("<span class='text-warning'>Cufd caducado!!!</span><br>")
        $("#panelInfo").before("<span>Registrando Cufd...</span><br>")

        registrarNuevoCUFD()
      }else{
        $("#panelInfo").before("<span class='text-success'>Cufd vigente, puede factura!!!</span><br>")

        cufd=data["codigo_cufd"]
        codControlCufd=data["codigo_control"]
        fechaVigCufd=data["fecha_vigencia"]
      }
    }
  })
}

/*====================
extraer leyenda
=====================*/
function extraerLeyenda(){
  let obj=""
  $.ajax({
    type:"POST",
    url:"controlador/ventaControlador.php?ctrLeyenda",
    date:obj,
    dataType:"json",
    success:function(data){
      leyenda=data["descripcion_leyenda"];
    }
  })
}
setTimeout(()=>{extraerLeyenda()},4500)


/*====================================
transformar fecha con formato ISO 8601
=====================================*/
function transformaFecha(fechaISO){
  let fecha_iso=fechaISO.split("T")
  let hora_iso=fecha_iso[1].split(".")

  let fecha=fecha_iso[0]
  let hora=hora_iso[0]

  var fecha_hora=fecha+" "+hora
  return fecha_hora
}


function busCliente(){
  let nitCliente=document.getElementById("nitCliente").value

  var obj={
    nitCliente:nitCliente
  }

  $.ajax({
    type:"POST",
    url:"controlador/clienteControlador.php?ctrBusCliente",
    data:obj,
    dataType:"json",
    success:function(data){

      if(data["email_cliente"]==""){
        document.getElementById("emailCliente").value="null"
      }else{
        document.getElementById("emailCliente").value=data["email_cliente"]
      }

      document.getElementById("rsCliente").value=data["razon_social_cliente"]
      document.getElementById("idCliente").value=data["id_cliente"]
    }
  })
}

function busCod(){
  let codProducto=document.getElementById("codProducto").value

  var obj={
    codProducto:codProducto
  }

  $.ajax({
    type:"POST",
    url:"controlador/productoControlador.php?ctrBusProducto",
    data:obj,
    dataType:"json",
    success:function(data){
      document.getElementById("conceptoProducto").value=data["nombre_producto"]
      document.getElementById("uniMedida").value=data["unidad_medida"]
      document.getElementById("preUnitario").value=data["precio_producto"]
      document.getElementById("preUnitActual").value=data["precio_producto"]

      document.getElementById("codProductoSin").value=data["cod_producto_sin"]
      document.getElementById("uniMedidaSin").value=data["unidad_medida_sin"]
    }
  })

}

/*=================
calcular costos
==================*/
function calcularPreProd(){
  let catPro=parseInt(document.getElementById("cantProducto").value)
  let preUnit=parseFloat(document.getElementById("preUnitario").value)

  document.getElementById("preTotal").value=parseFloat(catPro*preUnit)
}

function descPreProducto(){
  let descProducto=parseFloat(document.getElementById("descProducto").value)
  let preUnitActual=parseFloat(document.getElementById("preUnitActual").value)

  document.getElementById("preUnitario").value=parseFloat(preUnitActual-descProducto)

  calcularPreProd()
}

/*==========
carrito
============*/
var arregloCarrito=[]
var listaDetalle=document.getElementById("listaDetalle")
function agregarCarrito(){
  let actEconomica= document.getElementById("actEconomica").value
  let codProducto= document.getElementById("codProducto").value
  let codProductoSin= parseInt(document.getElementById("codProductoSin").value)
  let conceptoProducto= document.getElementById("conceptoProducto").value
  let cantProducto= parseInt(document.getElementById("cantProducto").value)
  let uniMedida= document.getElementById("uniMedida").value
  let uniMedidaSin= parseInt(document.getElementById("uniMedidaSin").value)
  let preUnitario= parseFloat(document.getElementById("preUnitario").value)
  let descProducto= parseFloat(document.getElementById("descProducto").value)
  let preTotal= parseFloat(document.getElementById("preTotal").value)

  let objDetalle={
    actividadEconomica:actEconomica,
    codigoProductoSin:codProductoSin,
    codigoProducto:codProducto,
    descripcion:conceptoProducto,
    cantidad:cantProducto,
    unidadMedida:uniMedidaSin,
    precioUnitario:preUnitario,
    montoDescuento:descProducto,
    subTotal:preTotal
  }

  arregloCarrito.push(objDetalle)

  dibujarTablaCarrito()

  /* borrar formulario carrito*/
  document.getElementById("uniMedida").value=""
  document.getElementById("conceptoProducto").value=""
  document.getElementById("codProducto").value=""
  document.getElementById("cantProducto").value=0
  document.getElementById("descProducto").value="0.00"
  document.getElementById("preTotal").value="0.00"

  calcularTotal()
}

function dibujarTablaCarrito(){

  listaDetalle.innerHTML=""
  arregloCarrito.forEach((detalle)=>{
    let fila=document.createElement("tr")

    fila.innerHTML='<td>'+detalle.descripcion+'</td>'+
      '<td>'+detalle.cantidad+'</td>'+
      '<td>'+detalle.precioUnitario+'</td>'+
      '<td>'+detalle.montoDescuento+'</td>'+
      '<td>'+detalle.subTotal+'</td>'

    let tdEliminar=document.createElement("td")
    let botonEliminar=document.createElement("button")
    botonEliminar.classList.add("btn", "btn-danger")
    botonEliminar.innerText="Eliminar"
    botonEliminar.onclick=()=>{
      eliminarCarrito(detalle.codigoProducto)
    }

    tdEliminar.appendChild(botonEliminar)
    fila.appendChild(tdEliminar)

    listaDetalle.appendChild(fila)
  })
}

function eliminarCarrito(cod){

  arregloCarrito=arregloCarrito.filter((detalle)=>{
    if(cod!=detalle.codigoProducto){
      return detalle
    }
  })

  dibujarTablaCarrito()

}

function calcularTotal(){
  let totalCarrito=0

  for(var i=0; i<arregloCarrito.length; i++){
    totalCarrito=totalCarrito+parseFloat(arregloCarrito[i].subTotal)
  }

  document.getElementById("subTotal").value=totalCarrito
  let descAdicional=parseFloat(document.getElementById("descAdicional").value)
  document.getElementById("totApagar").value=totalCarrito-descAdicional
}

/*=================
validar formulario
==================*/
function validarFormulario(){
  let numFactura=document.getElementById("numFactura").value

  if(numFactura==null || numFactura.length==0 || /^\s+$/.test(numFactura)){
    document.getElementById("error-numFactura").innerHTML="El campo #Factura tiene datos incorrectos"
    return false
  }

  return true
}

/*=============
emitir factura
===============*/
function emitirFactura(){
  if(validarFormulario()==true){

    /*encabezado*/
    let date= new Date()

    let numFactura=parseInt(document.getElementById("numFactura").value)
    let fechaFactura=date.toISOString()
    let rsCliente=document.getElementById("rsCliente").value
    let tpDocumento=parseInt(document.getElementById("tpDocumento").value)
    let nitCliente=document.getElementById("nitCliente").value /* tambien codigo cliente*/
    let metPago=parseInt(document.getElementById("metPago").value)
    let totApagar=parseFloat(document.getElementById("totApagar").value)
    let descAdicional=parseFloat(document.getElementById("descAdicional").value)
    let subTotal=parseFloat(document.getElementById("subTotal").value)
    let usuarioLogin=document.getElementById("usuarioLogin").innerHTML


    let actEconomica=document.getElementById("actEconomica").value
    let emailCliente=document.getElementById("emailCliente").value


    var obj={
      codigoAmbiente:2,
      codigoPuntoVenta:0,
      codigoPuntoVentaSpecified:true,
      codigoSistema:codSistema,
      codigoSucursal:0,
      nit:nitEmpresa,
      codigoDocumentoSector: 1,
      codigoEmision:1,
      codigoModalidad:2,
      cufd:cufd,
      cuis:cuis,
      tipoFacturaDocumento:1,
      archivo:null,
      fechaEnvio:fechaFactura,
      hashArchivo:"",
      tipoFactura:1,
      codigoControl:codControlCufd,
      factura:{
        cabecera:{
          nitEmisor:nitEmpresa,
          razonSocialEmisor:rsEmpresa,
          municipio:"Cochabamba",
          telefono:telEmpresa,
          numeroFactura:numFactura,
          cuf:"string",
          cufd:cufd,
          codigoSucursal:0,
          direccion:dirEmpresa,
          codigoPuntoVenta:0,
          fechaEmision:fechaFactura,
          nombreRazonSocial:rsCliente,
          codigoTipoDocumentoIdentidad:tpDocumento,
          numeroDocumento:nitCliente,
          complemento:"",
          codigoCliente:nitCliente,
          codigoMetodoPago:metPago,
          numeroTarjeta:null,
          montoTotal:totApagar,
          montoTotalSujetoIva:totApagar,
          codigoMoneda:1,
          tipoCambio:1,
          montoTotalMoneda:totApagar,
          montoGiftCard:0,
          descuentoAdicional:descAdicional,
          codigoExcepcion: "0",
          cafc:null,
          leyenda:leyenda,
          usuario:usuarioLogin,
          codigoDocumentoSector: 1
        },
        detalle:arregloCarrito
      }
    }
    //console.log(JSON.stringify(obj))
    $.ajax({
      type:"POST",
      url:host+"/api/CompraVenta/recepcion",
      data:JSON.stringify(obj),
      cache:false,
      contentType:"application/json",
      processData:false,
      success:function(data){

        if(data["codigoResultado"]!=908){
          $("panelInfo").before("<span class='text-danger'>Error, factura no emitida!!!</span><br>")
        }else{
          $("panelInfo").before("<span>Registrando factura...</span><br>")

          let datos={
            codigoResultado:data["codigoResultado"],
            codigoRecepcion:data["datoAdicional"]["codigoRecepcion"],
            cuf:data["datoAdicional"]["cuf"],
            xml:data["datoAdicional"]["xml"],
            sentDate:data["datoAdicional"]["sentDate"]

          }
          registroFactura(datos)
        }
      }
    })

  }
}

function registroFactura(datos){
  let numFactura=parseInt(document.getElementById("numFactura").value)
  let idCliente=parseInt(document.getElementById("idCliente").value)
  let usuarioLogin=document.getElementById("usuarioLogin").innerHTML
  let totApagar=parseFloat(document.getElementById("totApagar").value)
  let descAdicional=parseFloat(document.getElementById("descAdicional").value)
  let subTotal=parseFloat(document.getElementById("subTotal").value)
  let fechaEmision=transformaFecha(datos["sentDate"])

  let obj={
    "numFactura":numFactura,
    "idCliente":idCliente,
    "productos":JSON.stringify(arregloCarrito),
    "subTotal":subTotal,
    "descAdicional":descAdicional,
    "totApagar":totApagar,
    "fechaEmision":fechaEmision,
    "cufd":cufd,
    "cuf":datos["cuf"],
    "xml":datos["xml"],
    "usuarioLogin":usuarioLogin,
    "leyenda":leyenda
  }

  $.ajax({
    type:"POST",
    url:"controlador/ventaControlador.php?ctrRegistroFactura",
    data:obj,
    cache:false,
    success:function(data){

      if(data=="ok"){
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Factura registrada',
          timer: 1000
        })
        setTimeout(function(){
          location.reload()
        },1200)
      }else{
        Swal.fire({
          icon:'error',
          title:'Error!',
          text:'Error de registro',
          showConfirmButton: false,
          timer:1500
        })
      }
    }
  })
}

function MVerFactura(id){
  $("#modal-xl").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/factura/VerFactura.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-xl").html(data)
    }
  })
}

function MEliFactura(cuf){

  var obj={
    codigoAmbiente: 2,
    codigoPuntoVenta: 0,
    codigoPuntoVentaSpecified: true,
    codigoSistema: codSistema,
    codigoSucursal: 0,
    nit:nitEmpresa,
    codigoDocumentoSector:1,
    codigoEmision:1,
    codigoModalidad: 2,
    cufd:cufd,
    cuis:cuis,
    tipoFacturaDocumento:1,
    codigoMotivo:1,
    cuf:cuf
  }

  Swal.fire({
    title:'Esta seguro de anular esta Factura?',
    showDenyButton:true,
    showCancelButton:false,
    confirmButtonText:'Confirmar',
    denyButtonText:'Cancelar'    
  }).then((result)=>{
    if(result.isConfirmed){

      $.ajax({
        type:"POST",
        url:host+"/api/CompraVenta/anulacion",
        data:JSON.stringify(obj),
        cache:false,
        contentType:"application/json",
        processData:false,
        success:function(data){
          console.log(data)
          if(data["codigoEstado"]==905){
            anularFactura(cuf)
            Swal.fire({
              icon: 'success',
              showConfirmButton: false,
              title: 'Factura anulada',
              timer: 1000
            })
            setTimeout(function(){
              location.reload()
            },1200)
          }else{
            Swal.fire({
              icon:'error',
              title:'Error!!!',
              text:'Anulacion rechazada',
              showConfirmButton:false,
              timer:1500
            })
          }

        }
      })

    }
  })
}

function anularFactura(cufFactura){
  let obj={
    cuf:cufFactura
  }
  $.ajax({
    type:"POST",
    url:"controlador/ventaControlador.php?ctrAnularFactura",
    data:obj,
    success:function(data){
      console.log(data)
    }
  })
}
