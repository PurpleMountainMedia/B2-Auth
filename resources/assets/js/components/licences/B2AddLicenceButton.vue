<template lang="html">
  <div>
    <el-button
      type="primary"
      @click="openModal">{{ __('Add Licence') }}
    </el-button>

    <el-dialog
      :title="__('Add Licence')"
      :visible.sync="showDialog">
      <el-form
        :model="form"
        label-position="top">
        <b2-licence-fields
          :form="form"/>
      </el-form>

      <span
        slot="footer"
        class="dialog-footer">
        <el-button
          :disabled="loading"
          type="danger"
          size="small"
          @click="clearModal">Cancel</el-button>
        <el-button
          :disabled="loading"
          type="success"
          size="small"
          plain
          @click="createLicence">Create</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
export default {
  name: 'B2AddLicenceButton',

  components: {
    B2LicenceFields: () => import(/* webpackChunkName: "b2-licence-fields" */'components/licences/fields/B2LicenceFields')
  },

  data () {
    return {
      showDialog: false,
      form: {},
      loading: false
    }
  },

  methods: {
    openModal () {
      this.showDialog = true
    },

    clearModal () {
      this.showDialog = false
    },

    createLicence () {
      //
    }
  }
}
</script>

<style lang="css">
</style>
