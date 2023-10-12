<link rel="stylesheet" href="{{asset('css/crearpedido.css')}}">
<x-app-layout></x-app-layout>

<main>
    <div class="content-form">
        <h1>Verifica Tus Datos</h1>
        <form class="form-crearpedido" action="{{route('domicilio.create')}}" method="POST">
            <fieldset>
                <legend>Por favor, ingrese su tipo de documento y su número de identificación:</legend>
                @csrf <!-- Agrega esto si estás utilizando Laravel para proteger contra CSRF -->
                <div>
                    <label for="tipoDocumento">Tipo de Documento:</label>
                    <select id="tipoDocumento" name="tipoDocumento">
                        <option value="cc">Cédula de Ciudadania</option>
                        <option value="pasaporte">Targeta Identidad</option>
                    </select>
                </div>
                <div>
                    <label for="numero_identificacion">Número de Identificación:</label>
                    <input type="number" id="numero_identificacion" name="numero_identificacion" required>
                </div>
                <button  type="submit">Verificar</button>
            </fieldset>
        </form>
    </div>
</main>