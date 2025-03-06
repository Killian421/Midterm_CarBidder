<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="p-4 bg-gray-200">
        <Link href="/" class="mr-4">Home</Link>
        <Link href="/Bidders" class="mr-4">Bidders</Link>
        <Link href="/Cars">Cars</Link>
    </nav>

    <div class="p-4">
        <slot />
    </div>
</template>
