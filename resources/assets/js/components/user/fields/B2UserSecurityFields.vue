<template lang="html">
    <div class="">
        <el-row :gutter="10">
            <p><strong>{{__('title-security')}}</strong></p>
            <hr>
        </el-row>

        <!-- Password Reset -->
        <el-row :gutter="10">
            <el-col :span="9" :offset="6">
                <el-form-item :label="__('label-password')"
                              prop="password"
                              :error="passwordError">
                    <el-input v-model="form.password"
                              size="small"
                              type="password"
                              :placeholder="__('label-password')"
                              name="password"
                              id="user_form_field_password">
                    </el-input>
                </el-form-item>
            </el-col>
            <el-col :span="9">
                <el-form-item :label="__('label-confirm-password')"
                              prop="password_confirmation"
                              :error="passwordError">
                    <el-input v-model="form.password_confirmation"
                              size="small"
                              type="password"
                              ref="passwordConfirm"
                              :placeholder="__('label-confirm-password')"
                              @change="changed = true"
                              name="password_confirmation"
                              id="user_form_field_password_confirmation">
                    </el-input>
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
