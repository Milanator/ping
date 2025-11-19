<script setup lang="ts">
import { usePing } from "@/composables/usePing.ts";
import InputError from "@/components/partials/InputError.vue";

const { onSubmit, form, errors, flashMessage } = usePing();
</script>
<template>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form @submit="onSubmit" class="space-y-6">
        <div>
          <div class="mt-2">
            <input
              placeholder="UUID"
              class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
              v-model="form.uuid"
            />
            <InputError :error="errors.uuid" />
          </div>
        </div>

        <div>
          <div class="mt-2">
            <input
              type="number"
              min="0"
              max="100"
              placeholder="Battery percent"
              class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
              v-model="form.battery_percent"
            />
            <InputError :error="errors.battery_percent" />
          </div>
        </div>

        <div>
          <button
            type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm/6 font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
          >
            Send
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Flash message -->
  <div
    v-if="flashMessage"
    class="fixed bottom-4 right-4 px-4 py-2 rounded shadow text-white bg-green-500"
  >
    {{ flashMessage }}
  </div>
</template>
<style>
html,
body,
#app {
  height: 100%;
}
</style>
