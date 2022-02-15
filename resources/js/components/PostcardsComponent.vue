<template>
    <div class="container-postcards">

        <div v-for="postcard, i in postcards" :key="i" class="postcards">
            <p>Mittente: {{postcard.sender}}</p>
            <p>Indirizzo: {{postcard.address}}</p>
            <p>Corpo del testo: {{postcard.text}}</p>
            <img v-if="postcard.image" :src="'/storage/images/' + postcard.image">
            <p v-else>No image</p>
        </div>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                postcards: []
            }
        },
        mounted() {
            axios.get('/api/postcard/list')
                 .then(r => this.postcards = r.data)
                 .catch(e => console.error(e));
        }
    }
</script>