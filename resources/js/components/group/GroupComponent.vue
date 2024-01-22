<template>
    <div class="d-flex justify-content-end mb-4">
        <button v-on:click="createGroup" class="btn btn-primary">
            Создать группу
        </button>
    </div>
    <div class="d-flex mb-4">
        <span class="badge bg-primary me-2"
            >Вы владелец {{ ownerCount }} в группах</span
        >
        <span class="badge bg-primary me-2"
            >Вы состоите в {{ groups.length }} группах</span
        >
    </div>
    <div class="groups">
        <group-item-component
            v-for="(item, index) in groups"
            :key="index"
            :group="item"
        />
    </div>
</template>

<script>
import axios from "axios";
import GroupItemComponent from "./GroupItemComponent.vue";
export default {
    components: {
        GroupItemComponent,
    },
    data() {
        return {
            groups: [],
        };
    },
    mounted() {
        console.log("Component mounted.");
        this.loadData().then((data) => {
            this.groups = data;
        });
    },
    computed: {
        ownerCount() {
            let count = 0;
            this.groups.forEach((item) => {
                count += Number(item.isOwner);
            });
            return count;
        },
    },
    methods: {
        value: function () {
            axios;
        },
        createGroup() {
            const csrfToken = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            axios
                .post("/group/create", undefined, {
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": csrfToken,
                    },
                })
                .then((data) => {
                    console.log(data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        async loadData() {
            try {
                console.log("get groups");
                const response = await axios.get("/group/groups/get");
                return response.data.json;
            } catch (error) {
                console.error(error);
                return false;
            }
        },
    },
};
</script>
