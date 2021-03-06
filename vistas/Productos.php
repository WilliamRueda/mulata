<!-- CONTENT-HEADER -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Productos</h1>
            </div>

            <div class="col-sm-6">

                <ol class="breadcrumb float-sm-right">

                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>

                    <li class="breadcrumb-item active">Gestor Productos</li>
                </ol>

            </div>
        </div>
    </div>

</section>


<!-- FORMULARIO DE PRODUCTO -->
<!-- 
<div class="modal-body" >
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input type="hidden" id="idCategoria" name="categoria" value="">
                <label for="txtId">id</label>
                <input type="text" class="form-control" name="Id" id="txtId" placeholder="Ingrese el id">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="txtNombre" placeholder="Inghrese la nombre">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="ddlEstado">Estado</label>
                <select name="estado" id="ddlEstado" class="form-control select2bs4">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div>
    </div>
    ============================================================
   =MODAL FOOTER
    ===============================================================
    <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btnGuardarR" class="btn btn-primary">Guardar</button>
    </div>
</div>
 -->



<!-- /. CONTENT HEADER -->

<!-- CONTENT -->
<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-categoria btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-gestionar-producto" data-dismiss="modal"> <i class="fas fa-plus-square"></i> Agregar Categor??a</button>
        </div>

        <table id="tablaProductos" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="bg-info">
                <tr>
                    <!-- <td style="width:5%;">Id</td>
                    <td>nombre</td> -->
                    <!-- <td>Ruta</td> -->
                    <!-- <td style="width:15%;">Fecha</td> -->
                    <!-- <td style="width:10%;">Estado</td> -->
                    <td style="width:5%;">idrestaurante</td>
                    <td style="width:5%;">idproducto</td>
                    <td style="width:5%;">nombre</td>
                    <td style="width:5%;">idcategoriap</td>
                    <td style="width:5%;">precio</td>
                    <td style="width:5%;">imagen</td>
                    <td style="width:5%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>

    </div>

</section>
<!-- ./ CONTENT -->

<!-- VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->

<!-- <div class="modal fade" id="modal-gestionar-categoria">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            ============================================================
            =MODAL HEADER
            ===============================================================
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            ============================================================
            =MODAL BODY
            ===============================================================
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idCategoria" name="categoria" value="">
                            <label for="txtCategoria">Categor??a</label>
                            <input type="text" class="form-control" name="categoria" id="txtCategoria" placeholder="Ingrese la categor??a">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtRuta">Ruta</label>
                            <input type="text" class="form-control" name="ruta" id="txtRuta" placeholder="Inghrese la ruta">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado" id="ddlEstado" class="form-control select2bs4">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            ============================================================
            =MODAL FOOTER
            ===============================================================
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardarr" class="btn btn-primary">Guardar</button>
            </div>

        </div>

    </div>

</div>
 -->



<div class="modal fade" id="modal-gestionar-producto">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- ============================================================
        =MODAL HEADER
        =============================================================== -->
            <div class="modal-header bg-info">
                <h4 class="modal-title">Gestionar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- 
            ============================================================
            =MODAL BODY
            =============================================================== -->
            <div class="modal-body">
                <div class="row">
                    <!-- <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idCategoria" name="categoria" value="">
                            <label for="txtId">id</label>
                            <input type="text" class="form-control" name="Id" id="txtId" placeholder="Ingrese el id">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtNombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="txtNombre" placeholder="Inghrese la nombre">
                        </div>
                    </div> -->
                    <!-- <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado" id="ddlEstado" class="form-control select2bs4">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div> -->

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtidrestaurante">id del restaurante</label>
                            <input type="text" class="form-control" name="idrestaurante" id="txtidrestaurante" placeholder="Ingrese el id">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtidproducto">idproducto</label>
                            <input type="text" class="form-control" name="idproducto" id="txtidproducto" placeholder="Inghrese el id del producto">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtnombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="txtnombre" placeholder="Inghrese la nombre">
                        </div>
                    </div>
                    <!-- categoria  -->

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtidcategoriap">id del restaurante</label>
                            <input type="text" class="form-control" name="idcategoriap" id="txtidcategoriap" placeholder="Ingrese el id">
                        </div>
                    </div>

                    

                    

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtprecio">precio</label>
                            <input type="text" class="form-control" name="precio" id="txtprecio" placeholder="Inghrese el precio">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtimagen">imagen</label>
                            <input type="file" class="form-control" name="imagen" id="txtimagen" placeholder="Inghrese la imagen">
                        </div>
                    </div>
                  



                    


                </div>
            </div>
            <!-- ============================================================
        =MODAL FOOTER
        =============================================================== -->
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>

        </div>

    </div>

</div>



<!-- ./ VENTANA MODAL PARA REGISTRO Y ACTUALIZACION -->

<script>
    $(document).ready(function() {

        var accion = "";

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var table = $("#tablaProductos").DataTable({
            "ajax": {
                "url": "ajax/productos.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [
                // {
                // 	"targets": 4,
                // 	"sortable": false,
                // 	"render": function (data, type, full, meta){

                // 		if(data == 1){
                // 			return "<div class='bg-primary color-palette text-center'>ACTIVO</div> " 
                // 		}else{
                // 			return "<div class='bg-danger color-palette text-center'>INACTIVO</div> " 
                // 		}

                // 	}
                // },
                {
                    // "targets": 2,
                    "targets": 6,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        return "<center>" +
                            "<button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-producto'> " +
                            "<i class='fas fa-pencil-alt'></i> " +
                            "</button> " +
                            "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
                            "<i class='fas fa-trash'> </i> " +
                            "</button>" +
                            "</center>";
                    }
                }
            ],
            "columns": [
                // {
                //     "data": "id"
                // },
                // {"data": "categoria"},
                // {"data": "ruta"},
                // {"data": "fecha"},
                // {"data": "estado"},
                // {
                //     "data": "nombre"
                // },

                {
                    "data": "idrestaurante"
                },
                {
                    "data": "idproducto"
                },
                {
                    "data": "nombre"
                },
                {
                    "data": "idcategoriap"
                },
                {
                    "data": "precio"
                },
                {
                    "data": "imagen"
                },



                {
                    "data": "acciones"
                }
            ],

            "language": {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ning??n dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "??ltimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colecci??n",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %d fila al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "1": "Mostrar 1 fila",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Rellene todas las celdas con <i>%d<\/i>",
                    "fillHorizontal": "Rellenar celdas horizontalmente",
                    "fillVertical": "Rellenar celdas verticalmentemente"
                },
                "decimal": ",",
                "searchBuilder": {
                    "add": "A??adir condici??n",
                    "button": {
                        "0": "Constructor de b??squeda",
                        "_": "Constructor de b??squeda (%d)"
                    },
                    "clearAll": "Borrar todo",
                    "condition": "Condici??n",
                    "conditions": {
                        "date": {
                            "after": "Despues",
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vac??o",
                            "equals": "Igual a",
                            "notBetween": "No entre",
                            "notEmpty": "No Vacio",
                            "not": "Diferente de"
                        },
                        "number": {
                            "between": "Entre",
                            "empty": "Vacio",
                            "equals": "Igual a",
                            "gt": "Mayor a",
                            "gte": "Mayor o igual a",
                            "lt": "Menor que",
                            "lte": "Menor o igual que",
                            "notBetween": "No entre",
                            "notEmpty": "No vac??o",
                            "not": "Diferente de"
                        },
                        "string": {
                            "contains": "Contiene",
                            "empty": "Vac??o",
                            "endsWith": "Termina en",
                            "equals": "Igual a",
                            "notEmpty": "No Vacio",
                            "startsWith": "Empieza con",
                            "not": "Diferente de"
                        },
                        "array": {
                            "not": "Diferente de",
                            "equals": "Igual",
                            "empty": "Vac??o",
                            "contains": "Contiene",
                            "notEmpty": "No Vac??o",
                            "without": "Sin"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Eliminar regla de filtrado",
                    "leftTitle": "Criterios anulados",
                    "logicAnd": "Y",
                    "logicOr": "O",
                    "rightTitle": "Criterios de sangr??a",
                    "title": {
                        "0": "Constructor de b??squeda",
                        "_": "Constructor de b??squeda (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Borrar todo",
                    "collapse": {
                        "0": "Paneles de b??squeda",
                        "_": "Paneles de b??squeda (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Sin paneles de b??squeda",
                    "loadMessage": "Cargando paneles de b??squeda",
                    "title": "Filtros Activos - %d"
                },
                "select": {
                    "1": "%d fila seleccionada",
                    "_": "%d filas seleccionadas",
                    "cells": {
                        "1": "1 celda seleccionada",
                        "_": "$d celdas seleccionadas"
                    },
                    "columns": {
                        "1": "1 columna seleccionada",
                        "_": "%d columnas seleccionadas"
                    }
                },
                "thousands": ".",
                "datetime": {
                    "previous": "Anterior",
                    "next": "Proximo",
                    "hours": "Horas",
                    "minutes": "Minutos",
                    "seconds": "Segundos",
                    "unknown": "-",
                    "amPm": [
                        "am",
                        "pm"
                    ]
                },
                "editor": {
                    "close": "Cerrar",
                    "create": {
                        "button": "Nuevo",
                        "title": "Crear Nuevo Registro",
                        "submit": "Crear"
                    },
                    "edit": {
                        "button": "Editar",
                        "title": "Editar Registro",
                        "submit": "Actualizar"
                    },
                    "remove": {
                        "button": "Eliminar",
                        "title": "Eliminar Registro",
                        "submit": "Eliminar",
                        "confirm": {
                            "_": "??Est?? seguro que desea eliminar %d filas?",
                            "1": "??Est?? seguro que desea eliminar 1 fila?"
                        }
                    },
                    "error": {
                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">M??s informaci??n&lt;\\\/a&gt;).<\/a>"
                    },
                    "multi": {
                        "title": "M??ltiples Valores",
                        "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aqu??, de lo contrario conservar??n sus valores individuales.",
                        "restore": "Deshacer Cambios",
                        "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                    }
                },
                "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            },
        });

        $(".btn-agregar-categoria").on('click', function() {
            accion = "registrar";
        });

        $('#tablaProductos tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            // alert(data["Id"]);

            // id que esta en naranja se trae de la taba  de a ventana 

            // var Id = data["id"];
            // var nombre = data["nombre"];

            var idrestaurante = data["idrestaurante"];
            var idproducto = data["idproducto"];
            var nombre = data["nombre"];
            var idcategoriap = data["idcategoriap"];
            var precio = data["precio"];
            var imagen = data["imagen"];

            var datos = new FormData();
            datos.append('accion', "eliminar")
            datos.append('idproducto', idproducto);

            // datos.append('Id', Id);

            swal.fire({

                title: "??CONFIRMACION!",
                text: "??Estas de acuerdo en elminar el producto " + nombre + "?" +
                    "??Recuerda! que una vez eliminado no podras recuperarlo",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: "S??, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if (resultado.value) {

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            console.log(respuesta);

                            table.ajax.reload(null, false);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            });

                        }
                    })
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: "cancelaste la eliminacion del producto : " + nombre
                    });
                }

            })
        })

        $('#tablaProductos tbody').on('click', '.btnEditar', function() {

            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            // $("#idCategoria").val(data["id"])

            // $("#txtId").val(data["id"]);
            // $("#txtNombre").val(data["nombre"]);


            $("#txtidrestaurante").val(data["idrestaurante"])
            $("#txtidproducto").val(data["idproducto"]);
            $("#txtnombre").val(data["nombre"]);
            $("#txtidcategoriap").val(data["idcategoriap"]);
            $("#txtprecio").val(data["precio"]);
            $("#txtimagen").val(data["imagen"]);



            // $("#txtFecha").val(data["fecha"]);
            // $("#ddlEstado").val(data["estado"]);

            // alert(data["nombre"]);
        })

        // GUARDAR LA INFORMACION DE CATEGORIA DESDE LA VENTANA MODAL
        $("#btnGuardar").on('click', function() {

            // var Id = $("#txtId").val(),
            // id = $("#txtId").val(),
            // nombre = $("#txtNombre").val();
            // estado = $("#ddlEstado").val(),
            // fecha = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '');

            // var datos = new FormData();


            var idrestaurante = $("#txtidrestaurante").val(),
                // id = $("#txtId").val(),
                // nombre = $("#txtNombre").val();
                // estado = $("#ddlEstado").val(),
                // fecha = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '');

                idproducto = $("#txtidproducto").val(),
                nombre = $("#txtnombre").val(),
                idcategoriap = $("#txtidcategoriap").val();
            precio = $("#txtprecio").val(),
                imagen = $("#txtimagen").val();

            var datos = new FormData();








            // datos.append('id', id)
            // datos.append('Id', Id)
            // datos.append('nombre', nombre)


            datos.append('idrestaurante', idrestaurante)
            datos.append('idproducto', idproducto)
            datos.append('nombre', nombre)
            datos.append('idcategorip', idcategoriap)
            datos.append('precio', precio)
            datos.append('imagen', imagen)



            // datos.append('estado', estado);
            // datos.append('fecha', fecha);
            datos.append('accion', accion);

            swal.fire({
                title: "??CONFIRMAR!",
                text: "??Est?? de acuerdo con registrar el producto?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar"
            }).then(resultado => {
                if (resultado.value) {
                    $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            console.log(respuesta);


                            table.ajax.reload(null, false);
                            // CERRAR VENTANA MODAL 
                            // $("#modal-gestionar-producto").modal('hide');


                            // $("#id").val("");


                            // $("#txtId").val("");
                            // $("#txtNombre").val("");


                            $("#txtidrestaurante").val("");
                            $("#txtidproducto").val("");
                            $("#txtnombre").val("");
                            $("#txtidcategoriap").val("");
                            $("#txtprecio").val("");
                            $("#txtimagen").val("");




                            // $("#ddlEstado").val([1]);
                            // ALERTAS AMIGABLESS 
                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            })


                        }


                    });

                } else {
                    Toast.fire({
                        icon: 'error',
                        title: "cancelaste el registro del producto : " + nombre
                    });
                }
            })




        })


    })
</script>

<!-- 
<script>
    $(document).ready(function() {

        var accion = "";

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var table = $("#tablaCategorias").DataTable({
            "ajax": {
                "url": "ajax/categorias.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [
                // {
                // 	"targets": 4,
                // 	"sortable": false,
                // 	"render": function (data, type, full, meta){

                // 		if(data == 1){
                // 			return "<div class='bg-primary color-palette text-center'>ACTIVO</div> " 
                // 		}else{
                // 			return "<div class='bg-danger color-palette text-center'>INACTIVO</div> " 
                // 		}

                // 	}
                // },
                {
                    "targets": 2,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        return "<center>" +
                            "<button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-gestionar-categoria'> " +
                            "<i class='fas fa-pencil-alt'></i> " +
                            "</button> " +
                            "<button type='button' class='btn btn-danger btn-sm btnEliminar'> " +
                            "<i class='fas fa-trash'> </i> " +
                            "</button>" +
                            "</center>";
                    }
                }
            ],
            "columns": [{
                    "data": "id"
                },
                // {"data": "categoria"},
                // {"data": "ruta"},
                // {"data": "fecha"},
                // {"data": "estado"},
                {
                    "data": "nombre"
                },
                {
                    "data": "acciones"
                }
            ],

            "language": {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ning??n dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "??ltimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colecci??n",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %d fila al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "1": "Mostrar 1 fila",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Rellene todas las celdas con <i>%d<\/i>",
                    "fillHorizontal": "Rellenar celdas horizontalmente",
                    "fillVertical": "Rellenar celdas verticalmentemente"
                },
                "decimal": ",",
                "searchBuilder": {
                    "add": "A??adir condici??n",
                    "button": {
                        "0": "Constructor de b??squeda",
                        "_": "Constructor de b??squeda (%d)"
                    },
                    "clearAll": "Borrar todo",
                    "condition": "Condici??n",
                    "conditions": {
                        "date": {
                            "after": "Despues",
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vac??o",
                            "equals": "Igual a",
                            "notBetween": "No entre",
                            "notEmpty": "No Vacio",
                            "not": "Diferente de"
                        },
                        "number": {
                            "between": "Entre",
                            "empty": "Vacio",
                            "equals": "Igual a",
                            "gt": "Mayor a",
                            "gte": "Mayor o igual a",
                            "lt": "Menor que",
                            "lte": "Menor o igual que",
                            "notBetween": "No entre",
                            "notEmpty": "No vac??o",
                            "not": "Diferente de"
                        },
                        "string": {
                            "contains": "Contiene",
                            "empty": "Vac??o",
                            "endsWith": "Termina en",
                            "equals": "Igual a",
                            "notEmpty": "No Vacio",
                            "startsWith": "Empieza con",
                            "not": "Diferente de"
                        },
                        "array": {
                            "not": "Diferente de",
                            "equals": "Igual",
                            "empty": "Vac??o",
                            "contains": "Contiene",
                            "notEmpty": "No Vac??o",
                            "without": "Sin"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Eliminar regla de filtrado",
                    "leftTitle": "Criterios anulados",
                    "logicAnd": "Y",
                    "logicOr": "O",
                    "rightTitle": "Criterios de sangr??a",
                    "title": {
                        "0": "Constructor de b??squeda",
                        "_": "Constructor de b??squeda (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Borrar todo",
                    "collapse": {
                        "0": "Paneles de b??squeda",
                        "_": "Paneles de b??squeda (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Sin paneles de b??squeda",
                    "loadMessage": "Cargando paneles de b??squeda",
                    "title": "Filtros Activos - %d"
                },
                "select": {
                    "1": "%d fila seleccionada",
                    "_": "%d filas seleccionadas",
                    "cells": {
                        "1": "1 celda seleccionada",
                        "_": "$d celdas seleccionadas"
                    },
                    "columns": {
                        "1": "1 columna seleccionada",
                        "_": "%d columnas seleccionadas"
                    }
                },
                "thousands": ".",
                "datetime": {
                    "previous": "Anterior",
                    "next": "Proximo",
                    "hours": "Horas",
                    "minutes": "Minutos",
                    "seconds": "Segundos",
                    "unknown": "-",
                    "amPm": [
                        "am",
                        "pm"
                    ]
                },
                "editor": {
                    "close": "Cerrar",
                    "create": {
                        "button": "Nuevo",
                        "title": "Crear Nuevo Registro",
                        "submit": "Crear"
                    },
                    "edit": {
                        "button": "Editar",
                        "title": "Editar Registro",
                        "submit": "Actualizar"
                    },
                    "remove": {
                        "button": "Eliminar",
                        "title": "Eliminar Registro",
                        "submit": "Eliminar",
                        "confirm": {
                            "_": "??Est?? seguro que desea eliminar %d filas?",
                            "1": "??Est?? seguro que desea eliminar 1 fila?"
                        }
                    },
                    "error": {
                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">M??s informaci??n&lt;\\\/a&gt;).<\/a>"
                    },
                    "multi": {
                        "title": "M??ltiples Valores",
                        "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, hacer click o tap aqu??, de lo contrario conservar??n sus valores individuales.",
                        "restore": "Deshacer Cambios",
                        "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo."
                    }
                },
                "info": "Mostrando de _START_ a _END_ de _TOTAL_ entradas"
            },
        });

        $(".btn-agregar-categoria").on('click', function() {
            accion = "registrar";
        });

        $('#tablaCategorias tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            var id = data["id"];

            var datos = new FormData();
            datos.append('accion', "eliminar")
            datos.append('id', id);

            swal.fire({

                title: "??CONFIRMACION!",
                text: "Seguro que desea eliminar la categoria?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "S??, Eliminar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if (resultado.value) {

                    //LLAMADO AJAX
                    $.ajax({
                        url: "ajax/categorias.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            console.log(respuesta);

                            table.ajax.reload(null, false);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            });

                        }
                    })
                } else {
                    // alert("no se modifico la categoria");
                }

            })
        })

        $('#tablaCategorias tbody').on('click', '.btnEditar', function() {

            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $("#idProducto").val(data["id"])
            $("#txtProducto").val(data["producto"]);
            $("#txtNombreproducto").val(data["nombreproducto"]);
            $("#txtFecha").val(data["fecha"]);
            $("#ddlEstado").val(data["estado"]);


        })

        // GUARDAR LA INFORMACION DE CATEGORIA DESDE LA VENTANA MODAL
        $("#btnGuardar").on('click', function() {

            var producto = $("#txtProducto").val(),
                nombreproducto = $("#txtNombreproducto").val();


            var datos = new FormData();

            // datos.append('id', id)
            datos.append('producto', producto)
            datos.append('nombreproducto', nombreproducto);
            // datos.append('estado', estado);
            // datos.append('fecha', fecha);
            // datos.append('accion', accion);

            swal.fire({
                title: "??CONFIRMAR!",
                text: "??Est?? seguro que desea registrar la categor??a?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar"

            }).then(resultado => {

                if (resultado.value) {



                    $.ajax({
                        url: "ajax/categorias.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {
                            console.log(respuesta);

                            $("#modal-gestionar-categoria").modal('hide');
                            //  actualizar la tabla 
                            table.ajax.reload(null, false);

                            // $("#idProducto").val("");
                            $("#txtProducto").val("");
                            $("#txtNombreproducto").val("");
                            // $("#ddlEstado").val([1]);

                            Toast.fire({
                                icon: 'success',
                                title: respuesta
                            })

                        }
                    });
                } else {

                }

            })




        })


    })
</script>
 -->