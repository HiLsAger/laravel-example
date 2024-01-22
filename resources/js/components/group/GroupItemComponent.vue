<template>
    <div class="card mt-2 mb-2">
        <div>
            <div
                class="card-header d-flex justify-content-between align-items-center"
            >
                <div>
                    Групп №{{ group.id }}
                    <i
                        class="bi bi-diamond-half text-warning"
                        v-tooltip="'You have new messages.'"
                        v-if="group.isOwner"
                    ></i>
                </div>
                <div class="d-flex">
                    <button
                        class="btn btn-primary me-2"
                        title="Добавить пользователя"
                    >
                        <i class="fs-5 bi bi-person-add"></i>
                    </button>
                    <button
                        class="btn btn-primary me-2"
                        title="Скопировать ссылку на группу"
                    >
                        <i class="fs-5 bi bi-copy"></i>
                    </button>
                    <button class="btn btn-primary" title="Настроить группу">
                        <i class="fs-5 bi bi-gear"></i>
                    </button>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li
                    v-for="(member, index) in group.members"
                    :key="index"
                    class="list-group-item"
                >
                    <span>
                        <div>
                            {{ member.name }}
                            <i
                                class="bi bi-diamond-half text-warning"
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Владелец группы"
                                v-if="group.isOwner"
                            ></i>
                        </div>
                        <span class="badge rounded-pill bg-primary">
                            {{ member.role }}
                        </span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        group: Object,
    },
};
</script>
