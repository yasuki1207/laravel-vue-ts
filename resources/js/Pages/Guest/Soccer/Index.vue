<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { League } from '../../../Types/Guest/Soccer';
import Breadcrumb from '@/Components/Breadcrumb.vue';
import { BreadcrumbType } from '../../../Types/Guest/Breadcrumb';

defineProps<{
  leagues: League[],
  breadcrumbs: BreadcrumbType[],
}>()
</script>

<template>
  <Head title="サッカー" />

  <GuestLayout>
    <template #breadcrumbs>
      <Breadcrumb :breadcrumbs="breadcrumbs" currentPage="リーグ一覧"/>
    </template>
    <template #heading1>
      <h1 class="pl-2 border-l-8 border-blue-700 text-xl font-bold mb-4">リーグ一覧</h1>
    </template>
    <ul>
      <li
        v-for="league, index in leagues"
        :key="league.id"
        class="border-t hover:opacity-50"
        :class="{'border-b': index + 1 === leagues.length}"
      >
        <Link
          :href="route('guest.soccer.standing', { prefix: league.prefix })"
          class="flex justify-between items-center px-3 py-2">
          <span>{{ league.name }}</span>
          <span class="text-blue-700 font-bold">＞</span>
        </Link>
      </li>
    </ul>
  </GuestLayout>
</template>