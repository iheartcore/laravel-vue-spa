<template>
    <div>
        <h1>Laracasts Stats</h1>
        <ul>
            <li><strong>Total Series:</strong> {{ series }}</li>
            <li><strong>Total Lessons:</strong> {{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "SiteStats",
    data() {
        return {
            series: 0,
            lessons: 0,
        }
    },
    created() {
        axios.get('http://localhost:8000/api/stats')
            .then(({data}) => {
                this.series = data.series;
                this.lessons = data.lessons;
            });
    },
}
</script>

<style scoped>

</style>
