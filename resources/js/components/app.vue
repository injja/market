<template>
    <v-app>
        <v-btn>przycisk</v-btn>
    </v-app>
</template>
<script>
import axios from 'axios'
export default {
    created() {
        axios.get('/ok?test=12', { test: '1' })
            .then(response => {
                console.log(response.data)
            })
        this.$store.dispatch("...", this)


    }
}
</script>
