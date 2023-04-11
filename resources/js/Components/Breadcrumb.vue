<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { BreadcrumbType } from '../Types/Guest/Breadcrumb';

const props = defineProps<{
  breadcrumbs: BreadcrumbType[],
  currentPage: string,
}>()

onMounted(() => {
  props.breadcrumbs.push({
    position: props.breadcrumbs.length + 1,
    name: props.currentPage,
    route: ''
  })
})
</script>

<template>
  <div class="flex items-center">
    <div>
      <Link :href="route('guest.top')" class="text-blue-700 text-sm sm:text-base">
        <svg
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
          class="w-4 h-4 sm:w-5 sm:h-5">
          <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
        </svg>
      </Link>
    </div>
    <div class="flex items-center text-sm sm:text-base" v-for="breadcrumb in breadcrumbs" :key="breadcrumb.position">
      <span class="mx-1">></span>
      <template v-if="breadcrumbs.length !== breadcrumb.position">
        <Link :href="breadcrumb.route" class="text-blue-700">{{ breadcrumb.name }}</Link>
      </template>
      <template v-else>
        <div>{{ currentPage }}</div>
      </template>
    </div>
  </div>
</template>