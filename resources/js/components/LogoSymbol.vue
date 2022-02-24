<template>
    <div>
        <h1>Logo Symbol</h1>

        <!-- Original Symbol -->
        <div>
            <picture
                style="height: 382px;"
                class="block shadow rounded-lg flex items-center justify-center mb-6"
            >
                <img src="/images/symbol-original.svg" alt="logo" />
            </picture>

            <div class="extra-info">
                <p>Original symbol on <strong>white</strong> background</p>

                <a href="/images/logo.svg" class="button">
                    symbol-original.svg
                </a>
            </div>
        </div>

        <!-- Negative Symbol -->
        <div>
            <picture
                style="height: 382px;"
                class="block shadow rounded-lg flex items-center justify-center mb-6 bg-blue"
            >
                <img src="/images/symbol-negative.svg" alt="logo" />
            </picture>

            <div class="extra-info">
                <p>
                    Negative symbol with accent on
                    <strong>dark</strong> background
                </p>

                <a href="/images/symbol-negative.svg" class="button">
                    symbol-negative.svg
                </a>
            </div>
        </div>

        <!-- Pure Negative Symbol -->
        <div>
            <picture
                style="height: 382px;"
                class="block shadow rounded-lg flex items-center justify-center mb-6 bg-black"
            >
                <img src="/images/symbol-pure-negative.svg" alt="logo" />
            </picture>

            <div class="extra-info">
                <p>Pure negative symbol on <strong>dark</strong> background</p>

                <a href="/images/symbol-pure-negative.svg" class="button">
                    symbol-pure-negative.svg
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LogoSymbol"
}
</script>

<style scoped>

</style>
