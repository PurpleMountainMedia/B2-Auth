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
          <el-form-item
            :label="__('Email')"
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

          <!-- <a :href="forgottenPasswordRoute">
            <el-button type="text">{{ __("I've forgotten my password.") }}</el-button>
          </a> -->

          <el-button
            :loading="slotProps.loading"
            class="mt-3"
            native-type="submit"
            type="primary">{{ __('Reset') }} <i class="far fa-lock"/></el-button>
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
