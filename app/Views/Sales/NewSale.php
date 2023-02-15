<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Registro de Venta</h4>
            <form class="forms-sample" method="POST" id="formEditProduct" name="formEditProduct" action="<?php echo base_url('ProductsController/UpdateProduct') ?>">
                <h4>Datos del Cliente</h4>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="client">Cliente</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="clientName" id="clientName" placeholder="Buscar Cliente">
                            <input type="hidden" id="idCliente" name="idCliente">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-inverse-dark btn-icon" style="height: 33px;">
                                    <i class="ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nit">NIT</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <h4>Productos</h4>
                <div class="row">
                    <div class="form-group col-md-2">
                        <label for="">Cod. Producto</label>
                        <div class="input-group form-group">
                            <input list="listaProductos" type="text" class="form-control" name="codProduct" id="codProduct">
                            <input type="hidden" id="codProducto" name="codProduct">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" onclick="busCod()">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="">Concepto</label>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" name="nameProduct" id="nameProduct">
                        </div>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="">Cantidad</label>
                        <div class="input-group form-group">
                            <input type="number" class="form-control" name="quanProd" id="quanProd" value="0" onkeyup="calcularPreProd()">
                        </div>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="">U.Medida</label>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" name="uSize" id="uSize">
                            <input type="hidden" id="uSizesin" name="uSizesin">
                        </div>
                    </div>

                    <div class="form-group col-md-1">
                        <label for="">P. Unit</label>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" name="uPrice" id="uPrice" readonly>
                            <input type="hidden" name="actUPrice" id="actUPrice">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="">Descuento</label>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" name="descProducto" id="descProducto" value="0.00" onkeyup="descPreProducto()">
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="">P. Total</label>
                        <div class="input-group form-group">
                            <input type="text" class="form-control" name="preTotal" id="preTotal" readonly value="0.00">
                        </div>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="">Añadir</label>
                        <div class="input-group form-group">
                            <button class="btn btn-info form-control" onclick="agregarCarrito()">
                                <i class="ti-share"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!--carrito-->
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>P. Unitario</th>
                        <th>Descuento</th>
                        <th>P. Total</th>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody id="listaDetalle">

                </tbody>

            </table>
        </div>
    </div>
</div>


<script>
    function busCliente(){
  let clientName=document.getElementById("clientName").value

  var obj={
    clientName:clientName
  }

  $.ajax({
    type:"POST",
    url:"Controller/ClientController.php?ctrBusCliente",
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
  let codProducto=document.getElementById("codProduct").value

  var obj={
    codProduct:codProduct
  }

  $.ajax({
    type:"POST",
    url:"Controller/ProductController.php?ctrBusProducto",
    data:obj,
    dataType:"json",
    success:function(data){
      document.getElementById("nameProduct").value=data["nombre_producto"]
      document.getElementById("uSize").value=data["unidad_medida"]
      document.getElementById("uPrice").value=data["precio_producto"]
      document.getElementById("actUPrice").value=data["precio_producto"]
    }
  })

}

/*=================
calcular costos
==================*/
function calcularPreProd(){
  let catPro=parseInt(document.getElementById("quanProduct").value)
  let preUnit=parseFloat(document.getElementById("uPrice").value)

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
  document.getElementById("uSize").value=""
  document.getElementById("nameProduct").value=""
  document.getElementById("codProduct").value=""
  document.getElementById("quanProduct").value=0
  document.getElementById("descProduct").value="0.00"
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
</script>