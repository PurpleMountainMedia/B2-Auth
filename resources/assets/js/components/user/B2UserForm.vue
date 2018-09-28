<template lang="html">

<div v-loading="loading">

<el-form ref="userForm" :model="userForm" label-position="top" label-width="100px" status-icon id="user_form_dashboard">
    <b2-user-basic-fields :form="userForm" />
    <b2-user-security-fields :form="userForm" />
    <b2-user-preferences-fields :form="userForm" />
    <b2-user-privacy-fields :form="userForm" />
    <b2-errors :errors="formErrors" />


    <el-row :gutter="10" style="margin-top: 40px;">
        <el-button plain type="primary" plain size="small" id="user_form_reset" :loading="loading" @click="reset">{{__('reset')}}</el-button>
        <el-button plain type="success" size="small" id="user_form_submit" :loading="loading" @click="submitForm">{{__('save')}} <i class="fal fa-save"></i></el-button>
    </el-row>
</el-form>

</div>

</template>

<script>
import api from 'utils/api'
import validation from 'utils/validation'

export default {
  name: 'B2UserForm',

  components: {
    B2UserBasicFields: () => import(/* webpackChunkName: "b2-user-basic" */'./fields/B2UserBasicFields'),
    B2UserSecurityFields: () => import(/* webpackChunkName: "b2-user-security" */'./fields/B2UserSecurityFields'),
    B2UserPreferencesFields: () => import(/* webpackChunkName: "b2-user-preferces" */'./fields/B2UserPreferencesFields'),
    B2UserPrivacyFields: () => import(/* webpackChunkName: "b2-user-privacy" */'./fields/B2UserPrivacyFields'),
    B2Errors: () => import(/* webpackChunkName: "b2-errors" */'../B2Errors')
  },

  props: {
    user: {
      type: Object,
      required: true
    }
  },

  data () {
    return {
      loading: false,
      userForm: {},
      formErrors: {}
    }
  },

  mounted () {
    this.userForm = Object.assign({}, this.user)
  },

  methods: {

    /**
       * Reset the form to its original state
       *
       * @return Void
       */
    reset () {
      this.userForm = Object.assign({}, this.user)
    },

    /**
       * Submit the form to the server
       *
       * @return Void
       */
    submitForm () {
      this.loading = true
      this.formErrors = {}

      this.$refs.userForm.validate((valid, errors) => {
        if (valid) {
          api.persist('put', {
            path: 'users/' + this.user.id,
            object: this.userForm
          })
            .then((data) => {
              this.loading = false
              this.userForm = data.data
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
