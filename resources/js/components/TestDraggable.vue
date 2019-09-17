<template>
    <div class="row">
        <div class="col-3">
            <h3>Draggable 1</h3>
            <draggable
                class="dragArea list-group"
                :list="list1"
                :group="{ name: 'people', pull: 'clone', put: false }"
                :clone="cloneDog"
                @change="log"
            >
                <div class="list-group-item" v-for="element in list1" :key="element.id">
                    {{ element.name }}
                </div>
            </draggable>
        </div>

        <div class="col-3">

        </div>
    </div>
</template>

<script>
    let idGlobal = 8;
    import draggable from "../libraries/vuedraggable.umd"

    export default {
        name: "custom-clone",
        display: "Custom Clone",
        order: 3,
        components: {
            draggable
        },
        data() {
            return {
                list1: [
                    { name: "dog 1", id: 1 },
                    { name: "dog 2", id: 2 },
                    { name: "dog 3", id: 3 },
                    { name: "dog 4", id: 4 }
                ],
            };
        },
        methods: {
            log: function(evt) {
                window.console.log(evt);
            },
            cloneDog({ id }) {
                return {
                    id: idGlobal++,
                    name: `cat ${id}`
                };
            }
        }
    };
</script>
<style scoped></style>
