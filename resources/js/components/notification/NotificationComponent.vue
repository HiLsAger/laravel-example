<template>
    <notification-item-component
        v-for="(item, index) in notifications"
        :key="index"
        :image="item.image"
        :author="item.author"
        :message="item.message"
    />
</template>

<script>
import NotificationItemComponent from "./NotificationItemComponent.vue";

export default {
    components: {
        NotificationItemComponent,
    },
    data() {
        return {
            notifications: [
                {
                    image: "https://github.com/mdo.png",
                    author: "Система",
                    message: "Вы вошли в систему",
                },
                {
                    image: "https://github.com/mdo.png",
                    author: "Система",
                    message: "Вы вошли в систему",
                },
            ],
        };
    },
};
</script>
