<template lang="html">
  <div class="mt-4">
    <b2-form :form-action-route="resetRoute">
      <template slot-scope="slotProps">

        <el-alert v-if="successMessage"
                  :title="successMessage"
                  type="success"
                  :closable="false"
                  class="my-2"
                  show-icon>
        </el-alert>

        <el-card>
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

          <!-- <a :href="forgottenPasswordRoute">
            <el-button type="text">{{ __("I've forgotten my password.") }}</el-button>
          </a> -->

          <el-button class="mt-3" :loading="slotProps.loading" native-type="submit" type="primary">{{ __('Reset') }} <i class="far fa-lock"></i></el-button>
        </el-card>
      </template>
    </b2-form>
  </div>
</template>

<script>
export default {
  name: 'B2PasswordResetForm',

  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form'),
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
  },
}
</script>

<style lang="css">
</style>
