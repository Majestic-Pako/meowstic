<x-layout>
    <x-slot:title> Inicio </x-slot:title>
    
    <h1>Bienvenido a Meowstic</h1>
    <p class="text-Index">Un sitio web dedicado a Stardew Valley, donde podés encontrar todo lo relacionado con el juego.</p>
    <div>
        <img src="{{ asset('img/portadaValley.png') }}" alt="Logo" class="portadaIndex">
    </div>
    <div class="cards-container">
        <div class="card">
            <i class="fas fa-leaf"></i>
            <h3>Sobre Nosotros</h3>
            <p>Una plataforma creativa inspirada en Stardew Valley, hecha por y para fans del juego.</p>
        </div>
        <div class="card">
            <i class="fas fa-book-open"></i>
            <h3>Blog de Novedades</h3>
            <p>Explorá artículos, guías y curiosidades sobre tu granja, eventos y personajes favoritos.</p>
        </div>
        <div class="card">
            <i class="fas fa-store"></i>
            <h3>Visita la Tienda</h3>
            <p>Encontrá productos adorables: peluches, accesorios y más inspirados en el juego.</p>
        </div>
    </div>
    <div class="game-description">
        Stardew Valley es un encantador simulador de granja donde podés cultivar, criar animales, explorar minas y construir una vida pacífica. ¡Ideal para desconectar!
    </div>

    <div style="text-align: center;">
        <a href="https://store.steampowered.com/app/413150/Stardew_Valley/" target="_blank" class="steam-link">
            <i class="fab fa-steam"></i> Ver Stardew Valley en Steam
        </a>
    </div>
    <section style="max-width: 800px; margin: auto; padding: 20px; font-family: Arial, sans-serif;">
        <h2 style="color: #4e342e;">🆕 Actualización 1.6 de Stardew Valley</h2>
        <p>La esperada versión 1.6 de <strong>Stardew Valley</strong> ya está disponible, y trae consigo una gran cantidad de mejoras, contenido nuevo y ajustes que enriquecen aún más la experiencia en la granja.</p>
        <hr>

        <h3 style="color: #4e342e;">🌾 Nuevas Funciones y Contenido</h3>
        <ul>
            <li><strong>Nueva granja "Pradera del Bosque"</strong>: ideal para forrajeo y recolección natural.</li>
            <li><strong>Multijugador para hasta 8 jugadores (PC)</strong>: ¡más amigos, más diversión!</li>
            <li><strong>Objetos nuevos</strong>: cultivos, herramientas, decoraciones y recetas por descubrir.</li>
            <li><strong>Eventos y diálogos adicionales</strong>: más profundidad en las historias con los NPC.</li>
        </ul>

        <h3 style="color: #4e342e;">🐔 Mejoras en la Calidad de Vida</h3>
        <ul>
            <li>Menú de organización de inventario mejorado.</li>
            <li>Opciones de configuración ampliadas (velocidad del día, modo difícil, etc.).</li>
            <li>Más personalización inicial de la granja.</li>
            <li>Nuevas interacciones con mascotas y personajes.</li>
        </ul>

        <h3 style="color: #4e342e;">🧩 Soporte para Mods</h3>
        <p>Se ha reestructurado el código del juego para facilitar la creación y compatibilidad de <strong>mods</strong>, especialmente pensado para la comunidad de PC.</p>

        <h3 style="color: #f44336;">⚠️ Importante</h3>
        <p>La actualización 1.6 está disponible en <strong>PC</strong>. Para consolas y móviles, se espera en los próximos meses.</p>

        <blockquote style="border-left: 4px solid #4CAF50; padding-left: 10px; color: #555;">
            <strong>¿Vale la pena?</strong><br>
            ¡Definitivamente! La versión 1.6 es una carta de amor a la comunidad: más contenido, más personalización, y más razones para volver a la vida en la granja.
        </blockquote>
    </section>
    <p style="text-align:center; font-size: 0.8rem; color:#777; margin-top:2rem;">
    Proyecto prototipo – Meowstic v4.0
    </p>
</x-layout>