<script setup lang="ts">
defineProps<{
  error: Record<string, string[]>;
}>();
</script>
<template>
  <p v-if="error" class="mt-1 text-xs text-red-500">
    {{ error[0] }}
  </p>
</template>
