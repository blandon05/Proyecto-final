<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div
    class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 bg-dots-lighter selection:bg-red-500 selection:text-white">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard</Link>

            <template v-else>
                <Link :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Iniciar sesión</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Nuevo Cliente</Link>
            </template>
        </div>

        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>  Hidden Paradise</title>
            <!-- Agrega aquí tus enlaces a hojas de estilo CSS y otros recursos -->
        </head>

        <body>
            <header>
                <nav>
                    <!-- Agrega aquí tu barra de navegación si es necesario -->
                </nav>
            </header>

            <main>
                <section class="hero">
                    <div class="max-w-7xl mx-auto p-6 lg:p-8">
                        <div class="flex justify-center">
                            <!-- Aquí puedes colocar tu logotipo o imagen principal -->
                        </div>
                        <h1 class="text-4xl font-semibold text-center mt-6 text-gray-900 dark:text-white">Bienvenido a
                            Hidden Paradise</h1>
                            <p class="text-lg text-center mt-4 text-gray-500 dark:text-gray-400">
    ¡Bienvenido a nuestro Paraíso de Domos y Cabañas!
</p>

<p class="text-center mt-4 text-gray-500 dark:text-gray-400">
    En nuestro rincón de la naturaleza, te esperan experiencias inolvidables. ¿Estás listo para explorar y sumergirte en la belleza de la vida al aire libre? Regístrate ahora para descubrir todo lo que tenemos para ofrecerte:
</p>

<ul class="list-disc list-inside mt-4 text-gray-500 dark:text-gray-400 pl-6">
    <li><strong>✨ Visualiza Paquetes Exclusivos:</strong> Explora nuestros paquetes de domos y cabañas de lujo, diseñados para satisfacer todos tus deseos de escapada.</li>
    <li><strong>🏞️ Reserva tu Escape Perfecto:</strong> Aprovecha la comodidad de hacer reservas en línea para garantizar tu lugar en nuestro paraíso natural.</li>
    <li><strong>🌟 Ofertas Especiales:</strong> Obtén acceso anticipado a ofertas y promociones exclusivas solo para miembros registrados.</li>
    <li><strong>💬 Comunicación Personalizada:</strong> Mantente informado sobre eventos especiales y noticias relacionadas con nuestros domos y cabañas.</li>
</ul>

<p class="text-center mt-4 text-gray-500 dark:text-gray-400">
    ¡No pierdas la oportunidad de ser parte de esta comunidad de amantes de la naturaleza y las experiencias únicas! <a :href="route('register')" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Regístrate ahora</a> y comienza tu viaje hacia la tranquilidad y la aventura.
</p>

                    </div>
                </section>

                <section class="features">
                    <h2 class="text-4xl font-semibold text-center mt-6 text-gray-900 dark:text-white">Servicios</h2>
                    <div class="max-w-7xl mx-auto mt-16">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                            <!-- Aquí puedes agregar las características de tus cabañas y domos -->
                            <div
                            class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="text-center">
                                    <img src="./../imagenes/glamping4.png" alt="Descripción de la imagen"
                                        class="mx-auto bg-red-50 dark:bg-red-800/20 rounded-full">
                                </div>
                                <div class="mt-4">
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Cabañas de lujo
                                    </h2>
                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Disfruta de una estancia de lujo en nuestras cabañas completamente equipadas con
                                        todas las comodidades que necesitas para una escapada inolvidable.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div class="text-center">
                                    <img src="./../imagenes/glamping2.png" alt="Descripción de la imagen"
                                        class="mx-auto bg-red-50 dark:bg-red-800/20 rounded-full">
                                </div>
                                <div>
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Domos de lujo
                                    </h2>
                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Escapa a la naturaleza: Experimenta la comodidad de nuestras cabañas y domos enclavados en entornos naturales únicos.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div class="text-center">
                                    <img src="./../imagenes/glamping3.png" alt="Descripción de la imagen"
                                        class="mx-auto bg-red-50 dark:bg-red-800/20 rounded-full">
                                </div>
                                <div>
                                    <!-- Aquí puedes colocar iconos o imágenes representativas -->
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Domos acogedores
                                    </h2>
                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Vive una experiencia única en nuestros domos acogedores rodeados de naturaleza.
                                        Descubre la magia de dormir bajo las estrellas.
                                    </p>
                                </div>
                            </div>

                            <div
                                class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                <div class="text-center">
                                    <img src="./../imagenes/glamping1.png" alt="Descripción de la imagen"
                                        class="mx-auto bg-red-50 dark:bg-red-800/20 rounded-full">
                                </div>
                                <div>
                                    <!-- Aquí puedes colocar iconos o imágenes representativas -->
                                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Cabañas en la naturaleza
                                    </h2>
                                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                        Descubre la magia de la vida al aire libre: Nuestras cabañas y domos te ofrecen una experiencia única de contacto con la naturaleza.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer>
                <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">

                            <!-- Agrega aquí enlaces a tus redes sociales o información de contacto -->
                        </div>
                    </div>


                </div>
            </footer>
        </body>

        </html>

    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("../imagenes/glamping1.png"); /* Reemplaza "ruta_de_la_imagen_de_fondo.jpg" con la ruta de tu imagen de fondo */
    background-size: cover; /* Para que la imagen de fondo cubra todo el contenedor */
    background-position: center; /* Para centrar la imagen de fondo */
}


    .dark\:bg-dots-lighter {
        background-image: url("../imagenes/glamping3.png"); /* Reemplaza "ruta_de_la_imagen_de_fondo_oscuro.jpg" con la ruta de tu imagen de fondo en modo oscuro */
        background-size: cover;
        background-position: center;
    }

.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}


    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
</style>
