@extends('index')

@section('contenido')
<div class="fotodomi">
    <img class="fotoprincipal" src="{{ asset('img/imagenprueba.jpg') }}" alt="Foto Domi">
</div>

<section class="hero">
    <div class="hero-content">
        <h1>Bienvenido a Abici Domicilios</h1>
        <p>Tu solución rápida para recibir tus platillos favoritos desde los mejores restaurantes y lugares asociados.</p>
        <a href="#" class="btn">Ver Servicios</a>
    </div>
</section>

<section class="services">
    <h2>Nuestros Servicios</h2>
    <div class="service">
        <img src="{{ asset('img/imagenprueba.jpg') }}" alt="Entrega a Domicilio">
        <h3>Entrega a Domicilio</h3>
        <p>Recibe tus platillos favoritos directamente en la puerta de tu casa.</p>
    </div>
    <div class="service">
        <img src="{{ asset('img/imagenprueba.jpg') }}" alt="Mensajeria">
        <h3>Trabajos de Mensajeria</h3>
        <p>Pagamos tus recibos y te ayudamos con el traslado de objetos.</p>
    </div>
    <!-- Agrega más servicios aquí -->
</section>

<section class="gallery">
    <h2>Nuestros Asociados</h2>
    <div class="restaurant">
        <img src="{{ asset('img/imagenprueba.jpg') }}" alt="Restaurante 1">
    </div>
    <div class="restaurant">
        <img src="{{ asset('img/imagenprueba.jpg') }}" alt="Restaurante 2">
    </div>
    <!-- Agrega más imágenes de lugares asociados aquí -->
</section>

@endsection