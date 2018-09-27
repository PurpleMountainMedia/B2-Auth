<template lang="html">
  <div v-loading="loading">

    <el-tooltip
      v-if="userCannot('create organisations')"
      content="You don't have permission to create organisations"
      placement="top"
      effect="light">
      <i class="el-icon-info"/>
    </el-tooltip>

    <el-button
      v-show="showBtn"
      :disabled="userCannot('create organisations')"
      type="primary"
      plain
      autofocus
      size="small"
      @click="showModal = true">Create Organisation <i class="far fa-plus-circle"/>
    </el-button>

    <el-dialog
      :visible.sync="showModal"
      :before-close="clearModal"
      title="Create Organisation">

      <el-form
        ref="organisationForm"
        :model="organisationForm"
        label-position="top"
        label-width="100px"
        status-icon>
        <b2-organisations-basic-fields :form="organisationForm" />
      </el-form>

      <b2-errors :errors="formErrors" />

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
          @click="createOrganisation">Create</el-button>
      </span>

    </el-dialog>

  </div>
</template>

<script>
import api from '../../../utils/api'
import validation from '../../../utils/validation'

export default {
  name: 'B2CreateOrganisationModal',

  components: {
    B2OrganisationsBasicFields: () => import(/* webpackChunkName: "b2-organisations-basic-fields" */'../fields/B2OrganisationsBasicFields.vue'),
    B2Errors: () => import(/* webpackChunkName: "b2-errors" */'../../B2Errors')
  },

  props: {
    showBtn: {
      type: Boolean,
      required: false,
      default () {
        return true
      }
    },

    onCreate: {
      type: Function,
      required: false,
      default () {
        return function (organisation) {}
      }
    }
  },

  data () {
    return {
      showModal: false,
      organisationForm: {},
      loading: false,
      formErrors: {}
    }
  },

  methods: {

    /**
       * Handle the closure of the modal
       *
       * @return Void
       */
    clearModal () {
      this.showModal = false
      this.$refs.organisationForm.resetFields()
      this.organisationForm = {}
      this.formErrors = {}
    },

    /**
       * Handle the form submission and create the org
       *
       * @return Void
       */
    createOrganisation () {
      this.loading = true
      this.formErrors = {}

      this.$refs.organisationForm.validate((valid, errors) => {
        if (valid) {
          api.persist('post', {
            path: 'organisations',
            object: this.organisationForm
          })
            .then((data) => {
              this.loading = false
              this.onCreate(data.data)
              this.clearModal()
              this.$message({
                message: validation.getSuccessMessage(),
                type: 'success'
              })
            })
            .catch((error) => {
              this.formErrors = error
              this.loading = false
              this.$message.error(validation.getErrorMessage())
            })
        } else {
          this.loading = false
          this.formErrors = {
            message: validation.getValidationErrorMessage(),
            errors: validation.getValidationMessages(errors)
          }
          return false
        }
      })
    }

  }
}
</script>

<style lang="css">
</style>
