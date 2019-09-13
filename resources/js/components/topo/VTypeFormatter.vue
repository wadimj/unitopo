<template>
    <div class="TypeFormatter">
        <sui-label v-for="type in types" :color="type.color" :key="type.k"
                   data-toggle="tooltip" :title="type.k">
            {{ type.v }}
        </sui-label>
    </div>
</template>

<script>
    export default {
        props: ['tags', 'allTags'],
        computed: {
            types () {
                let retTags;
                if(this.allTags) {
                    retTags = this.tags;
                }else{
                    retTags = this.tags.filter(x => x.k === 'type');
                }

                return retTags.map(obj => {
                    var rObj = {};
                    rObj.k = obj.k;
                    rObj.v = obj.v;
                    rObj.color = (obj.k === 'type') ? 'red' : 'green';
                    return rObj;
                });
            }
        },
    };
</script>

<style>
    .TypeFormatter{
        display: flex;
    }
</style>
