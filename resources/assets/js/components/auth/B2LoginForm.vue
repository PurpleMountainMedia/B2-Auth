<template lang="html">
  <div class="mt-4">
    <auth-form :form-action-route="loginRoute" :home-route="homeRoute" :logo="logo">
      <el-card slot-scope="slotProps">
        <el-form-item :label="__('Email')"
                      prop="email"
                      :error="errors.email ? errors.email[0] : ''"
                      :rules="{ required: true, message: __('Email is required.') }">
            <el-input v-model="slotProps.form.email"
                      placeholder="josh@educationinventory.com"
                      name="email"
                      id="login_email">
            </el-input>
        </el-form-item>

        <el-form-item :label="__('Password')"
                      prop="password"
                      :error="errors.password"
                      :rules="{ required: true, message: __('Password is required.') }">
            <el-input v-model="slotProps.form.password"
                      placeholder="*****"
                      name="password"
                      type="password"
                      id="login_password">
            </el-input>
        </el-form-item>

        <a :href="forgottenPasswordRoute">{{ __("I've forgotten my password.") }}</a>

        <input type="hidden" name="_token" :value="csrfToken">

        <el-button class="mt-3" :loading="loading" native-type="submit" type="primary">{{ __('Login') }} <i class="far fa-lock"></i></el-button>
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
    homeRoute: {
      required: true,
      type: String
    },
    forgottenPasswordRoute: {
      required: true,
      type: String
    },
    csrfToken: {
      required: true,
      type: String
    },
    oldInput: {
      required: false,
      type: [Object, Array],
      default: () => { return [] }
    },
    formErrors: {
      required: false,
      type: [Object, Array],
      default: () => { return [] }
    },
    logo: {
      required: false,
      type: [String],
      default: () => { return '' }
    }
  },

  data () {
    return {
      form: {},
      errors: {},
      loading: false,
    }
  },

  mounted () {
    Object.keys(this.oldInput).map((key) => {
        this.$set(this.form, key, this.oldInput[key])
    });

    this.$nextTick(() => {
      this.errors = this.formErrors
    })
  },

  methods: {

  }
}
</script>

<style lang="css">
</style>
