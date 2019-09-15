<!--suppress ALL -->
<template>
    <div class="TheMenuBar">
        <sui-menu fixed inverted>
            <sui-menu-menu position="left">
                <a
                    is="sui-menu-item"
                    content="Filters"
                    @click="toggleFilters()"
                />
            </sui-menu-menu>

            <sui-container>
                <router-link :to="{ name: 'home' }" is="sui-menu-item" class="header">
                    UNITOPO
                </router-link>

                <router-link :to="{ name: 'route.index' }" is="sui-menu-item" class="header">
                    Route Explorer
                </router-link>

                <router-link :to="{ name: 'hello' }" is="sui-menu-item" class="header">
                    Hello World
                </router-link>

                <router-link is="sui-menu-item" :to="{ name: 'route.drag' }" >Drag</router-link>

                <sui-dropdown text="Dropdown" item class="simple">
                    <sui-dropdown-menu>
                        <a is="sui-dropdown-item" href="#">Link Item</a>
                        <a is="sui-dropdown-item" href="#">Link Item</a>

                        <sui-dropdown-divider />
                        <sui-dropdown-header>Header Item</sui-dropdown-header>

                        <sui-dropdown-item>
                            <sui-icon name="dropdown" /> Submenu

                            <sui-dropdown-menu class="simple">
                                <a is="sui-dropdown-item" href="#">Link Item</a>
                                <a is="sui-dropdown-item" href="#">Link Item</a>
                            </sui-dropdown-menu>
                        </sui-dropdown-item>

                        <a is="sui-dropdown-item" href="#">Link Item</a>
                    </sui-dropdown-menu>
                </sui-dropdown>

            </sui-container>

            <sui-menu-menu position="right">
                <sui-menu-item right>
                    <sui-input transparent icon="search" placeholder="Search..." />
                </sui-menu-item>
            </sui-menu-menu>
        </sui-menu>
    </div>
</template>
<script>
    export default {
        methods: {
            toggleFilters() {
                $('#filterSidebar')
                    .sidebar('toggle');
            },
        },
    }
</script>
<style>
    .TheMenuBar{
        z-index: 200;
    }
</style>
