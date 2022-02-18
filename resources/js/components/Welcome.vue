<template>
    <div>
        <h1>{{ title }}</h1>
    </div>

    <!-- <div class="container-fluid"> -->
    <div class="d-flex w-15 flex-column bg-secondary bd-highlight">
        <div class="p-2 bd-highlight text-gray-200">Product</div>
        <div class="p-2 bd-highlight">Categories</div>
        <div class="p-2 bd-highlight">Flex item 3</div>
    </div>
    <!-- </div> -->
</template>

<script>
export default {
    setup() {
        return {
            title: "What should the title be? Let me see the speed of change. V2",
        };
    },
};
</script>
