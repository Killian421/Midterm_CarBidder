<script setup>
import { ref, computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    bidders: Array
});

const search = ref('');

const filteredBidders = computed(() => {
    return props.bidders.filter(bidder =>
        bidder.first_name.toLowerCase().includes(search.value.toLowerCase()) ||
        bidder.last_name.toLowerCase().includes(search.value.toLowerCase())
    );
});
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
        <main class="max-w-4xl mx-auto mt-8 p-8 bg-white/10 backdrop-blur-md shadow-xl rounded-lg border border-white/20">
            <h2 class="text-3xl font-bold text-white">Bidders List</h2>
            <p class="text-white/80 mt-2">Search and view registered bidders.</p>

            <!-- Search Bar -->
            <div class="mt-6">
                <input
                    v-model="search"
                    placeholder="Search bidders..."
                    class="w-full p-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent transition duration-300 placeholder:text-white/70 text-white"
                />
            </div>

            <!-- Bidders List -->
            <ul class="mt-6 space-y-3">
                <li
                    v-for="bidder in filteredBidders"
                    :key="bidder.id"
                    class="p-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-lg shadow-sm hover:shadow-md transition duration-300"
                >
                    <span class="font-medium text-white">{{ bidder.first_name }} {{ bidder.last_name }}</span>
                    <span class="text-white/80">- {{ bidder.address }}</span>
                </li>
            </ul>

            <!-- No Results -->
            <p v-if="filteredBidders.length === 0" class="text-white/80 mt-4">
                No bidders found.
            </p>
        </main>
    </div>
</template>