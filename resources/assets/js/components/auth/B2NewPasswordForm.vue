<template lang="html">
  <div class="mt-4 w-100">
    <b2-form
      :form-action-route="resetRoute"
      :values="{ email: email }"
      :url-return="urlReturn">
      <template slot-scope="slotProps">

        <el-card>
          <el-form-item :label="__('label-email')"
                        prop="email"
                        :error="slotProps.errors('email')"
                        :rules="{ required: true, message: __('required-email') }">
              <el-input v-model="slotProps.form.email"
                        placeholder="josh@educationinventory.com"
                        :disabled="true"
                        class="short_input">
              </el-input>
          </el-form-item>
          <input
            id="login_email"
            :value="slotProps.form.email"
            type="hidden"
            name="email">

          <el-form-item :label="__('label-password')"
                        prop="password"
                        :error="slotProps.errors('password')"
                        :rules="{ required: true, message: __('required-password') }">
              <el-input v-model="slotProps.form.password"
                        placeholder="*****"
                        name="password"
                        type="password"
                        class="short_input"
                        id="login_password">
              </el-input>
          </el-form-item>

          <el-form-item :label="__('label-confirm-password')"
                        prop="password_confirmation"
                        :error="slotProps.errors('password_confirmation')"
                        :rules="{ required: true, message: __('required-password') }">
              <el-input v-model="slotProps.form.password_confirmation"
                        placeholder="*****"
                        name="password_confirmation"
                        type="password"
                        class="short_input"
                        id="login_password_confirmation">
              </el-input>
          </el-form-item>

          <input
            :value="token"
            type="hidden"
            name="token">

          <el-button class="mt-3" :loading="slotProps.loading" native-type="submit" type="primary">{{ __('button-reset') }} <i class="far fa-lock"></i></el-button>
        </el-card>
      </template>
    </b2-form>
  </div>
</template>

<script>
export default {
  name: 'B2NewPasswordForm',

  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form')
  },

  props: {
    resetRoute: {
      required: true,
      type: String
    },
    token: {
      required: true,
      type: String
    },
    email: {
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
