<template lang="html">
  <div class="mt-4">
    <auth-form :form-action-route="loginRoute">
      <el-card slot-scope="slotProps">
        <el-form-item :label="__('Email')"
                      prop="email"
                      :error="slotProps.errors('email')"
                      :rules="{ required: true, message: __('Email is required.') }">
            <el-input v-model="slotProps.form.email"
                      placeholder="josh@educationinventory.com"
                      name="email"
                      class="short_input"
                      id="login_email">
            </el-input>
        </el-form-item>

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

        <a :href="forgottenPasswordRoute">
          <el-button type="text">{{ __("I've forgotten my password.") }}</el-button>
        </a>

        <el-button class="mt-3" :loading="slotProps.loading" native-type="submit" type="primary">{{ __('Login') }} <i class="far fa-lock"></i></el-button>
      </el-card>
    </auth-form>
  </div>
</template>

<script>
export default {
  name: 'B2LoginForm',

  components: {
    AuthForm: () => import(/* webpackChunkName: "auth-form" */'./AuthForm'),
  },

  props: {
    loginRoute: {
      required: true,
      type: String
    },
    forgottenPasswordRoute: {
      required: true,
      type: String
    }
  },
}
</script>

<style lang="css">
</style>
