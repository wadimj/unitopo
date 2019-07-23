<template>
    <div>
        <sui-menu fixed inverted>
            <sui-container>
                <router-link :to="{ name: 'home' }" is="sui-menu-item" class="header">
                    UNITOPO
                </router-link>

                <router-link :to="{ name: 'hello' }" is="sui-menu-item" class="header">
                    Hello World
                </router-link>

                <router-link :to="{ name: 'players.index' }" is="sui-menu-item" class="header">
                    Users
                </router-link>

                <a is="sui-menu-item" href="#">Home</a>

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
        </sui-menu>
    </div>
</template>
<script>
    export default {}
</script>
