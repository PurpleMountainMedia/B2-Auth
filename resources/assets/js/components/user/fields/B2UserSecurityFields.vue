<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <p><strong>{{ __('title-security') }}</strong></p>
      <hr>
    </el-row>

    <!-- Password Reset -->
    <el-row :gutter="10">
      <el-col
        :span="9"
        :offset="6">
        <el-form-item
          :label="__('label-password')"
          :error="passwordError"
          prop="password">
          <el-input
            id="user_form_field_password"
            v-model="form.password"
            :placeholder="__('label-password')"
            size="small"
            type="password"
            name="password"/>
        </el-form-item>
      </el-col>
      <el-col :span="9">
        <el-form-item
          :label="__('label-confirm-password')"
          :error="passwordError"
          prop="password_confirmation">
          <el-input
            id="user_form_field_password_confirmation"
            ref="passwordConfirm"
            v-model="form.password_confirmation"
            :placeholder="__('label-confirm-password')"
            size="small"
            type="password"
            name="password_confirmation"
            @change="changed = true"/>
        </el-form-item>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  props: {
    form: {
      type: Object,
      required: true
    }
  },

  data () {
    return {
      changed: false
    }
  },

  computed: {

    passwordError () {
      var password = this.form.password
      var passwordConf = this.form.password_confirmation
      if (password && passwordConf && this.changed) {
        if (password !== passwordConf) {
          return "Passwords don't match."
        }
      }
    }
  }
}
</script>

<style lang="css">
</style>
