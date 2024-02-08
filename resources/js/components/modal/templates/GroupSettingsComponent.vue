<template>
    <div>

    </div>
</template>

<script>
import axios from 'axios'

export default {
    props: {
        id: Number
    },
    data() {
        return {
            
        }
    },
    methods: {
        async loadData(){
            try {
                const response = await axios.get("/group/groups/get-settings");
                return response.data.json;
            } catch (error) {
                console.error(error);
                return false;
            }
        }
    }
}
</script>