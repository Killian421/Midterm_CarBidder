<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-gradient-to-br from-purple-600 to-blue-600 text-white">
        <!-- Header -->
        <header class="bg-white/10 backdrop-blur-md shadow-lg py-4 px-8 flex justify-between items-center sticky top-0 z-50">
            <h1 class="text-2xl font-bold text-white">Midterm Project</h1>
            <nav class="space-x-6">
                <Link href="/" class="text-white/80 hover:text-white font-medium transition duration-300">Home</Link>
                <Link href="/bidders" class="text-white/80 hover:text-white font-medium transition duration-300">Bidders</Link>
                <Link href="/cars" class="text-white/80 hover:text-white font-medium transition duration-300">Cars</Link>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="max-w-4xl mx-auto mt-12 p-8 bg-white/10 backdrop-blur-md shadow-xl rounded-lg border border-white/20">
            <h2 class="text-3xl font-bold text-white">Midterms Project</h2>
            <p class="text-white/80 mt-2">Developed by:</p>
            <h3 class="text-xl font-bold mt-1 text-white">Sedric Lian F. Deloy</h3>
            <p class="text-white/80">BSIT-3</p>
        </main>
    </div>
</template>