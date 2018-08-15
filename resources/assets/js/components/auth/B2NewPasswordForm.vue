<template lang="html">
  <div class="mt-4">
    <auth-form :form-action-route="resetRoute" :values="{ email: email }">
      <template slot-scope="slotProps">

        <el-card>
          <el-form-item :label="__('Email')"
                        prop="email"
                        :error="slotProps.errors('email')"
                        :rules="{ required: true, message: __('Email is required.') }">
              <el-input v-model="slotProps.form.email"
                        placeholder="josh@educationinventory.com"
                        :disabled="true"
                        class="short_input">
              </el-input>
          </el-form-item>
          <input type="hidden" name="email" id="login_email" :value="slotProps.form.email">

          <el-form-item :label="__('Password')"
                        prop="password"
                        :error="slotProps.errors('password')"
                        :rules="{ required: true, message: __('Password is required.') }">
              <el-input v-model="slotProps.form.password"
                        placeholder="*****"
                        name="password"
                        type="password"
                        class="short_input"
                        id="login_password">
              </el-input>
          </el-form-item>

          <el-form-item :label="__('Password Confirmation')"
                        prop="password_confirmation"
                        :error="slotProps.errors('password_confirmation')"
                        :rules="{ required: true, message: __('Password is required.') }">
              <el-input v-model="slotProps.form.password_confirmation"
                        placeholder="*****"
                        name="password_confirmation"
                        type="password"
                        class="short_input"
                        id="login_password_confirmation">
              </el-input>
          </el-form-item>

          <input type="hidden" name="token" :value="token">

          <el-button class="mt-3" :loading="slotProps.loading" native-type="submit" type="primary">{{ __('Reset') }} <i class="far fa-lock"></i></el-button>
        </el-card>
      </template>
    </auth-form>
  </div>
</template>

<script>
export default {
  name: 'B2NewPasswordForm',

  components: {
    AuthForm: () => import(/* webpackChunkName: "auth-form" */'./AuthForm'),
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
  },

}
</script>

<style lang="css">

</style>
