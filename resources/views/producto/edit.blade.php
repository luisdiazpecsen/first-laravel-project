<form id="form">
    <div id="modalBody" class="modal-body">
        <div id="filaError">
        </div>
        <div class="form-row" hidden>
            <div class="form-group col-md-12">
                <input type="text" class="form-control" id="txtCodigo" name="txtCodigo"
                    value="{{ $producto->codigo }}" readOnly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="txtDescripcion">Descripción</label>
                <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion"
                    placeholder="Descripción" value="{{ $producto->descripcion }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtPrecioCompra">Precio de compra</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">S/.</span>
                    </div>
                    <input type="number" min="0" step="0.01" class="form-control" id="txtPrecioCompra"
                        name="txtPrecioCompra" placeholder="0.00" value="{{ $producto->precio_compra }}">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="txtPrecioVenta">Precio de venta</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">S/.</span>
                    </div>
                    <input type="number" min="0" step="0.01" class="form-control" id="txtPrecioVenta"
                        name="txtPrecioVenta" placeholder="0.00" value="{{ $producto->precio_venta }}">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="txtStock">Stock</label>
                <input type="number" min="0" step="0.01" class="form-control" id="txtStock" name="txtStock"
                    placeholder="0.0" value="{{ $producto->stock }}">
            </div>
            <div class="form-group col-md-3">
                <label for="txtStockMinimo">Stock mínimo</label>
                <input type="number" min="0" step="0.01" class="form-control" id="txtStockMinimo"
                    name="txtStockMinimo" placeholder="0.0" value="{{ $producto->stock_minimo }}">
            </div>
            <div class="form-group col-md-6">
                <label for="txtUnidadMedida">Unidad de medida</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="txtUnidadMedida" name="txtUnidadMedida"
                        placeholder="Buscar..."
                        value="{{ $foraneo->unidad_medida_codigo . ' - ' . $foraneo->unidad_medida_descripcion }}"
                        readOnly>
                    <div class="input-group-append">
                        <button id="btnCambiarUnidadMedida" class="btn btn-outline-secondary" type="button"><i
                                class='fas fa-edit'></i></button>
                    </div>
                </div>
                <span id="unidadMedidaList"></span>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="txtMarca">Marca</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="txtMarca" name="txtMarca" placeholder="Buscar..."
                        value="{{ $foraneo->marca_codigo . ' - ' . $foraneo->marca_descripcion }}" readOnly>
                    <div class="input-group-append">
                        <button id="btnCambiarMarca" class="btn btn-outline-secondary" type="button"><i
                                class='fas fa-edit'></i></button>
                    </div>
                </div>
                <span id="marcaList"></span>
            </div>
            <div class="form-group col-md-6">
                <label for="txtCategoria">Categoría</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="txtCategoria" name="txtCategoria"
                        placeholder="Buscar..."
                        value="{{ $foraneo->categoria_codigo . ' - ' . $foraneo->categoria_descripcion }}" readOnly>
                    <div class="input-group-append">
                        <button id="btnCambiarCategoria" class="btn btn-outline-secondary" type="button"><i
                                class='fas fa-edit'></i></button>
                    </div>
                </div>
                <span id="categoriaList"></span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="btnAceptar" type="button" class="btn btn-primary">Actualizar</button>
    </div>
</form>
