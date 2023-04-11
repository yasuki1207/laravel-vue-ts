<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { League } from '../../../Types/Guest/Soccer';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import { BreadcrumbType } from '../../../Types/Guest/Breadcrumb';

defineProps<{
  league: League,
  breadcrumbs: BreadcrumbType[],
}>()

</script>

<template>
  <Head title="順位表" />

  <GuestLayout>
    <template #breadcrumbs>
      <Breadcrumb :breadcrumbs="breadcrumbs" :currentPage="`${league.name}順位表`"/>
    </template>
    <template #heading1>
      <h1 class="pl-2 border-l-8 border-blue-700 text-xl font-bold mb-4">{{ league.name }}順位表</h1>
    </template>
  </GuestLayout>
</template>