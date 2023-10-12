<link rel="stylesheet" href="{{asset('css/pedidoadmin.css')}}">

<x-app-layout></x-app-layout>
<section>
    <h1 class="custom-title">
        Datos del Pedido
    </h1>
    <div>
        <div>
            <form action="">
                @csrf
                <fieldset class="custom-fieldset">
                    <div class="custom-input-container">
                        <label for="nombre" class="custom-label">Nombre Del Cliente</label>
                        <input type="text" name="nombre" value="Samuel Hernesto Perez" readonly class="custom-input">
                    </div>
                    <div class="custom-textarea-container">
                        <label for="datospedido" class="custom-label">Datos Del Pedido</label>
                        <textarea name="datospedido" id="" readonly class="custom-textarea"> Docena de Manzanas Verdes </textarea>
                    </div>
                    <div class="custom-textarea-container">
                        <label for="descripcion" class="custom-label">Especificaciones Del Pedido</label>
                        <textarea name="descripcion" id="" readonly class="custom-textarea">Esto Puede Ser Opcional</textarea>
                    </div>
                    <div class="custom-input-container">
                        <label for="direccion" class="custom-label">Dirección</label>
                        <input type="text" name="direccion" value="kra 9 # 11-11" readonly class="custom-input">
                    </div>
                    <div class="custom-input-container">
                        <label for="telefono" class="custom-label">Numero De Telefono</label>
                        <input type="text" name="telefono" value="3208730722" readonly class="custom-input">
                    </div>
                <button type="submit" class="btn-tomarpedido">Tomar Pedido <i class="fas fa-save"></i></button>
    
                </fieldset>
            </form>
        </div>
    </div>
</section>
