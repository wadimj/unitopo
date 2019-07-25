<template>
    <div class="RouteView">
        Route {{ id }}
    </div>
</template>

<script>
    export default {
        props: {
            id: Object,
            route: Object
        },
    };
</script>
