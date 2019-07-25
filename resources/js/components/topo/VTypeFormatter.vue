<template>
    <div class="TypeFormatter">
        <sui-label v-for="type in types" color="red" :key="type">
            {{ type }}
        </sui-label>
    </div>
</template>

<script>
    export default {
        props: ['tags'],
        computed: {
            types () {
                let typeString = "";
                typeString = this.tags.find(x => x.k === 'type').v;

                return typeString.split('|')
            }
        }
    };
</script>

<style>
    .TypeFormatter{
        display: flex;
    }
</style>
