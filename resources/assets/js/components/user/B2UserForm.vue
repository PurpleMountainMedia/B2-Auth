<template lang="html">

<div v-loading="loading">

<el-form ref="userForm" :model="userForm" label-position="top" label-width="100px" status-icon>
    <b2-user-basic-fields :form="userForm" />
    <b2-user-security-fields :form="userForm" />
    <b2-user-preferences-fields :form="userForm" />
    <b2-user-privacy-fields :form="userForm" />
    <b2-errors :errors="formErrors" />


    <el-row :gutter="10" style="margin-top: 40px;">
        <el-button type="primary" plain size="small" id="user_form_reset" :loading="loading" @click="reset">Reset</el-button>
        <el-button type="success" size="small" id="user_form_submit" :loading="loading" @click="submitForm">Save</el-button>
    </el-row>
</el-form>

</div>

</template>

<script>
import api from '../../utils/api'
import validation from '../../utils/validation'
import B2UserBasicFields from './fields/B2UserBasicFields'
import B2UserSecurityFields from './fields/B2UserSecurityFields'
import B2UserPreferencesFields from './fields/B2UserPreferencesFields'
import B2UserPrivacyFields from './fields/B2UserPrivacyFields'
import B2Errors from '../B2Errors'

export default {
    name: 'B2UserForm',

    components: {
        B2UserBasicFields,
        B2UserSecurityFields,
        B2UserPreferencesFields,
        B2UserPrivacyFields,
        B2Errors
    },

    props: {
        user: {
            type: Object,
            required: true,
        }
    },

    data() {
        return {
            loading: false,
            userForm: {},
            formErrors: {},
        }
    },

    mounted() {
        this.userForm = Object.assign({}, this.user);
    },

    methods: {

      /**
       * Reset the form to its original state
       *
       * @return Void
       */
      reset()
      {
          this.userForm = Object.assign({}, this.user);
      },

      /**
       * Submit the form to the server
       *
       * @return Void
       */
      submitForm()
      {
          this.loading = true;
          this.formErrors = {};

          this.$refs.userForm.validate((valid, errors) => {

              if (valid) {
                  api.persist('put', {
                      path: 'users/' + this.user.id,
                      object: this.userForm
                  })
                  .then((data) => {
                      this.loading = false;
                      this.userForm = data.data;
                      this.$message({
                        message: validation.getSuccessMessage(),
                        type: 'success'
                      });
                  })
                  .catch((error) => {
                      this.formErrors = error;
                      this.loading = false;
                      this.$message.error(validation.getErrorMessage());
                  });
              } else {
                  this.loading = false;
                  this.formErrors = {
                      message: validation.getValidationErrorMessage(),
                      errors: validation.getValidationMessages(errors)
                  };
                  return false;
              }
          });
      }
    }
}
</script>

<style lang="css">
</style>
