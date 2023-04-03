<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
  <Head title="TOP" />

  <GuestLayout>
    <template #heading1>
      <h1 class="pl-2 border-l-8 border-blue-700 text-xl font-bold mb-4">TOP</h1>
    </template>
    <ul>
      <li>
        <Link
          :href="route('guest.soccer.index')"
          class="flex justify-between items-center px-3 py-2">
          <span>サッカー</span>
          <span class="text-blue-700 font-bold">＞</span>
        </Link>
      </li>
    </ul>
  </GuestLayout>
</template>