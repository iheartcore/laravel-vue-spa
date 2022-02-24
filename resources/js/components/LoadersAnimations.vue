<template>
    <div>
        <h1>Loaders and Animations</h1>

        <p class="mb-10 text-grey-darker leading-normal">
            This spinner uses AirBnb's
            <a href="http://airbnb.io/lottie/#/web" class="text-blue font-bold"
            >Lottie</a
            >
            library to render its animation. You may download the necessary
            assets below.
        </p>

        <div
            class="border border-grey-lighter rounded-lg flex items-center justify-center mb-8"
        >
            <div ref="lottie" id="lottie" class="w-64" style="height: 457px"></div>
        </div>

        <a href="/laracasts-spinner.zip" class="button">spinner.zip</a>
    </div>
</template>

<script>
export default {
    name: "LoadersAnimations",
    mounted() {
        var animation = bodymovin.loadAnimation({
            container: document.getElementById('lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '/animations/spinner.json'
        });
    }
}
</script>

<style scoped>

</style>
