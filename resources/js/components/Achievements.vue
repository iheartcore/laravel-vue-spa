<template>
    <h1>Achievements</h1>
    <input v-model="token" placeholder="Your Laracasts API Token" @keyup.enter="fetchAchievements"/>

    <p>{{ error }}</p>
    <ul>
        <li v-for="achievement in achievements" v-text="achievement.name"></li>
    </ul>
</template>

<script>
export default {
    name: "Achievements",
    data() {
        return {achievements: [], token: '', message: ''};
    },
    methods: {
        fetchAchievements() {
            axios.get('http://localhost:8000/api/achievements?api_token=' + this.token) //?api_token=sdfasf => add to be more secure
                .then(response => {
                    this.achievements = response.data;
                    this.messsage = '';
                })
                .catch(error => {
                    this.message = error.response.data.error;
                    this.achievements = [];
                });
        }
    },
}
</script>

<style scoped>

</style>
