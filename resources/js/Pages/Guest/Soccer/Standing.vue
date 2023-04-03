<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { PropType } from 'vue';
import { League } from '../../../Types/Guest/Soccer';

const props = defineProps({
  league: Object as PropType<League>
})
</script>

<template>
  <Head title="順位表" />

  <GuestLayout>
    <template #heading1>
      <h1 class="pl-2 border-l-8 border-blue-700 text-xl font-bold mb-4">{{ (league as League).name }}順位表</h1>
    </template>
  </GuestLayout>
</template>