<template>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | Dashboard</title>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">
            <AdminNavbar />
            <div class="content-wrapper">
                <AdminSidebar />
                <section class="content">
                    <slot />
                </section>
            </div>
        </div>
    </body>
</template>

<script>
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";

export default {
    name: "Layout",
    components: { Navbar, Sidebar }
}
</script>

<style scoped></style>
