<script setup>
const props = defineProps({
  title: {
    type: String,
    default: 'Header Title'
  },
});
</script>

<template>
    <head title="tests"></head>
    <div class="bg-white shadow">
        <div class="max-w-full mx-auto py-3 px-2 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800">
                {{ title }}
            </h2>
        </div>
    </div>
    
</template>
