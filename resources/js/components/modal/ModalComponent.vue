<template>
  <BModal @hidden="closeModel()" v-model="isActiveModal" id="modal-center" centered title="BootstrapVue">
    <p class="my-4">Vertically centered modal!</p>
  </BModal>
</template>

<script>
import { BButton, BModal } from 'bootstrap-vue-next'
import GroupSettingsComponent from './templates/GroupSettingsComponent.vue'

export default {
  components: {
    BButton,
    BModal,
    GroupSettingsComponent
  },
  props: {
    params: Object
  },
  data() {
    return {
      isActiveModal: false,
      component: null
    }
  },
  emits: ['close'],
  mounted() {
    switch (this.params.type) {
      case 'group-settings':
        this.component = this.showGroupSettings();
        break
    }

    this.isActiveModal = true;
  },
  methods: {
    showGroupSettings() {
      return true;
    },
    closeModel() {
      this.$emit('close')
    }
  }
}
</script>