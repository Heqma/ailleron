<template>
  <div ref="target">
    <VueJsCounter v-if="targetIsVisible" duration="5000" :end="end"></VueJsCounter>
  </div>
</template>

<script setup>
import VueJsCounter from 'vue-js-counter'
import { ref, watch } from 'vue'
import { useElementVisibility } from '@vueuse/core'
const target = ref(null)
let targetIsVisible = useElementVisibility(target)

const prop = defineProps({
  end: {
    type: Number,
    default: null
  }
})

watch(() => targetIsVisible, () => console.log(targetIsVisible))
</script>

<style>
.stats__item__counter div {
  display: inline;
}
</style>