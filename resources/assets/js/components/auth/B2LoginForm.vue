<template lang="html">
  <div class="mt-4">
    <b2-form
      :form-action-route="loginRoute"
      :url-return="urlReturn">
      <el-card slot-scope="slotProps">
        <h3>{{__('title-login')}}</h3>
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

        <div class="justify-between">
            <a :href="forgottenPasswordRoute">
                <el-button type="text">{{ __("forgot-password") }}</el-button>
            </a>

            <el-button :loading="slotProps.loading" native-type="submit" type="primary">{{ __('login') }} <i class="far fa-lock"></i></el-button>
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
