<template lang="html">
  <div class="mt-4">
    <b2-form
      :form-action-route="registerRoute"
      :url-return="urlReturn">
      <el-card slot-scope="slotProps">
        <h3>{{ __('title-register') }}</h3>
        <el-form-item
          :label="__('label-fname')"
          :error="slotProps.errors('first_name')"
          :rules="{ required: true, message: __('required-fname') }"
          prop="first_name">
          <el-input
            id="register_firstName"
            v-model="slotProps.form.first_name"
            placeholder="John"
            name="first_name"
            class="short_input"/>
        </el-form-item>

        <el-form-item
          :label="__('label-lname')"
          :error="slotProps.errors('last_name')"
          :rules="{ required: true, message: __('required-lname') }"
          prop="last_name">
          <el-input
            id="register_lastName"
            v-model="slotProps.form.last_name"
            placeholder="Smith"
            name="last_name"
            class="short_input"/>
        </el-form-item>

        <el-form-item
          :label="__('label-email')"
          :error="slotProps.errors('email')"
          :rules="{ required: true, message: __('required-email') }"
          prop="email">
          <el-input
            id="register_email"
            v-model="slotProps.form.email"
            placeholder="jsmith@b2.com"
            name="email"
            class="short_input"/>
        </el-form-item>

        <el-form-item
          :label="__('label-password')"
          :error="slotProps.errors('password')"
          :rules="{ required: true, message: __('required-password') }"
          prop="password">
          <el-input
            id="register_password"
            v-model="slotProps.form.password"
            placeholder="****"
            type="password"
            name="password"
            class="short_input"/>
        </el-form-item>

        <el-form-item
          :label="__('label-confirm-password')"
          :error="slotProps.errors('password_confirmation')"
          :rules="{ required: true, message: __('required-confirm-password') }"
          prop="password_confirmation">
          <el-input
            id="register_passwordConfirmation"
            v-model="slotProps.form.password_confirmation"
            placeholder="****"
            type="password"
            name="password_confirmation"
            class="short_input"/>
        </el-form-item>

        <div class="justify-between">
          <a
            v-if="loginRoute"
            :href="loginRoute">
            <el-button type="text">{{ __("account-login") }}</el-button>
          </a>

          <el-button
            :loading="slotProps.loading"
            native-type="submit"
            type="primary">{{ __('button-register') }} <i class="far fa-lock"/></el-button>
        </div>
      </el-card>
    </b2-form>
  </div>
</template>

<script>
export default {
  name: 'B2RegisterForm',

  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form')
  },

  props: {
    registerRoute: {
      required: true,
      type: String
    },
    loginRoute: {
      required: false,
      type: String,
      default: () => { return null }
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
