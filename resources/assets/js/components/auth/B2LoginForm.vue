<template lang="html">
  <div class="mt-4">
    <b2-form
      :form-action-route="loginRoute"
      :url-return="urlReturn">
      <el-card slot-scope="slotProps">
        <h3>{{ __('Please login to continue:') }}</h3>
        <el-form-item
          :label="__('Email Address')"
          :error="slotProps.errors('email')"
          :rules="{ required: true, message: __('Email is required.') }"
          prop="email">
          <el-input
            id="login_email"
            v-model="slotProps.form.email"
            placeholder="josh@educationinventory.com"
            name="email"
            class="short_input"/>
        </el-form-item>

        <el-form-item
          :label="__('Password')"
          :error="slotProps.errors('password')"
          :rules="{ required: true, message: __('Password is required.') }"
          prop="password">
          <el-input
            id="login_password"
            v-model="slotProps.form.password"
            placeholder="*****"
            name="password"
            type="password"
            class="short_input"/>
        </el-form-item>

        <div class="justify-between">
          <a :href="forgottenPasswordRoute">
            <el-button type="text">{{ __("I've forgotten my password.") }}</el-button>
          </a>

          <el-button
            :loading="slotProps.loading"
            native-type="submit"
            type="primary">{{ __('Login') }} <i class="far fa-lock"/></el-button>
        </div>
      </el-card>
    </b2-form>
  </div>
</template>

<script>
export default {
  name: 'B2LoginForm',

  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form')
  },

  props: {
    loginRoute: {
      required: true,
      type: String
    },
    forgottenPasswordRoute: {
      required: true,
      type: String
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
