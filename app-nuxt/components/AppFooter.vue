<template>
    <div class="container mx-auto p-4">
        <footer>
            <p>&copy; {{ new Date().getFullYear() }} My Nuxt App</p>
            <nav>
                <ul>
                    <li><NuxtLink to="/privacy">Privacy Policy</NuxtLink></li>
                    <li><NuxtLink to="/terms">Terms of Service</NuxtLink></li>
                </ul>
            </nav>
        </footer>
    </div>
</template>
