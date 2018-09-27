<template lang="html">
  <div class="mt-4 w-100">
    <b2-form
      :form-action-route="resetRoute"
      :url-return="urlReturn">
      <template slot-scope="slotProps">

        <el-alert
          v-if="successMessage"
          :title="successMessage"
          :closable="false"
          type="success"
          class="my-2"
          show-icon/>

        <el-card>
          <el-form-item :label="__('label-email')"
                        prop="email"
                        :error="slotProps.errors('email')"
                        :rules="{ required: true, message: __('required-email') }">
              <el-input v-model="slotProps.form.email"
                        placeholder="josh@educationinventory.com"
                        name="email"
                        class="short_input"
                        id="login_email">
              </el-input>
          </el-form-item>

          <el-button class="mt-3" :loading="slotProps.loading" native-type="submit" type="primary">{{ __('button-reset') }} <i class="far fa-lock"></i></el-button>
        </el-card>
      </template>
    </b2-form>
  </div>
</template>

<script>
export default {
  name: 'B2PasswordResetForm',

  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form')
  },

  props: {
    resetRoute: {
      required: true,
      type: String
    },
    successMessage: {
      required: false,
      type: String,
      default: () => { return '' }
    },
    urlReturn: {
      required: false,
      type: String,
      default: () => { return null }
    }
  }
}
</script>

<style lang="css">
</style>
