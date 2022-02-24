<template>
    <div>
        <h1>Colors</h1>

        <div class="mb-16">
            <p class="mb-8">Primary - Blue, White, Dark Grey</p>

            <div class="flex">
                <div class="text-center mr-8">
                    <div class="color-circle bg-blue-500"></div>
                    <p class="text-xs">#328AF1</p>
                </div>

                <div class="text-center mr-8">
                    <div class="color-circle bg-white"></div>
                    <p class="text-xs">#FFF</p>
                </div>

                <div class="text-center">
                    <div class="color-circle bg-black"></div>
                    <p class="text-xs">#222222</p>
                </div>
            </div>
        </div>

        <div class="mb-16">
            <p class="mb-8">Secondary - Category Colors & Accents</p>

            <div class="flex">
                <color-range
                    to="#EC454F"
                    from="#F44881"
                    name="Laravel"
                ></color-range>

                <color-range
                    to="#637BFF"
                    from="#21C8F6"
                    name="PHP"
                ></color-range>

                <color-range
                    to="#50A88D"
                    from="#6EDCC4"
                    name="Testing"
                ></color-range>
            </div>

            <div class="flex">
                <color-range
                    to="#E59D3E"
                    from="#F19A1A"
                    name="JavaScript"
                ></color-range>

                <color-range
                    to="#8465E5"
                    from="#AA76B9"
                    name="Tooling"
                ></color-range>
            </div>
        </div>

        <div>
            <p class="mb-8">Icons</p>

            <div class="flex">
                <div class="text-center mr-8">
                    <div class="color-circle bg-gray-800"></div>
                    <p class="text-xs">#78909C</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Colors"
}
</script>

<style scoped>

</style>
