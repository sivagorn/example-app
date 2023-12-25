<template>
    <div>
<h1>Staff Only</h1>
<h2>{{ message }}</h2>

    </div>
</template>
<style>
h1 {
    font-size: 100px; 
    text-align: center; 
}
</style>
<script>
defineProps ({ message: String});
//import { Link } from "@inertiajs/inertia-vue3";
</script>

