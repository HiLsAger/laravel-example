<template>
    <li>
        <a class="d-flex dropdown-item link-dark text-decoration-none">
            <img
                :src="image"
                alt=""
                width="32"
                height="32"
                class="rounded-circle me-2"
            />
            <div class="notification">
                <div class="sender-name">{{ author }}</div>
                <div class="sender-message">{{ message }}</div>
            </div>
        </a>
    </li>
</template>

<script>
export default {
    props: {
        image: String,
        author: String,
        message: String,
    },
};
</script>
