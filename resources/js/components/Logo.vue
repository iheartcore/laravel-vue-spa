<template>
    <h1>Full Logo</h1>

    <div>
        <picture>
            <img src="/images/logo.svg" alt="logo" />
        </picture>

        <div class="extra-info">
            <p>Original Logo on <strong>white</strong> background</p>

            <a href="/images/logo.svg" class="button">logo.svg</a>
        </div>
    </div>

    <div>
        <picture class="bg-blue-600">
            <img src="/images/negative-logo.svg" alt="logo" />
        </picture>

        <div class="extra-info">
            <p>Original Logo on <strong>dark</strong> background</p>

            <a href="/images/negative-logo.svg" class="button">negative-logo.svg</a>
        </div>
    </div>

    <div>
        <picture class="bg-black">
            <img src="/images/negative-logo.svg" alt="logo" />
        </picture>

        <div class="extra-info">
            <p>Original Logo on <strong>dark</strong> background</p>

            <a href="/images/pure-negative-logo.svg" class="button">pure-negative-logo.svg</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Logo"
}
</script>

<style scoped>

</style>
