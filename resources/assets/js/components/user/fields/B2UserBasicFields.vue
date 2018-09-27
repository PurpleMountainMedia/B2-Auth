<template lang="html">
    <div class="">
        <el-row :gutter="10">
            <p><strong>{{__('title-basic-info')}}</strong></p>
            <hr>
        </el-row>

        <!-- Name -->
        <el-row :gutter="10">
            <el-col class="profile-photo-container" :span="6">
              <label for="user_form_field_profile_photo"
                     class="el-form-item__label">
                     {{__('label-photo')}}
              </label>
              <div class="profile-photo"
                   style="background-image: url('https://via.placeholder.com/500x500')"
                   id="user_form_field_profile_photo">
              </div>
            </el-col>
            <el-col :span="9" :offset="6">
                <el-form-item :label="__('label-fname')"
                              prop="first_name"
                              :error="errors.first_name"
                              :rules="{ required: true, message: __('required-fname') }">
                    <el-input v-model="form.first_name"
                              size="small"
                              :placeholder="__('label-fname')"
                              name="first_name"
                              id="user_form_field_first_name">
                    </el-input>
                </el-form-item>
            </el-col>
            <el-col :span="9">
                <el-form-item :label="__('label-lname')"
                              prop="last_name"
                              :error="errors.last_name"
                              :rules="{ required: true, message: __('required-lname') }">
                    <el-input v-model="form.last_name"
                              size="small"
                              :placeholder="__('label-lname')"
                              name="last_name"
                              id="user_form_field_last_name">
                    </el-input>
                </el-form-item>
            </el-col>
        </el-row>

        <!-- Contact  -->
        <el-row :gutter="10">
            <el-col :span="9" :offset="6">
                <el-form-item :label="__('label-email')"
                              prop="email"
                              :error="errors.email"
                              :rules="{ required: true, message: __('required-email') }">
                    <el-input v-model="form.email"
                              size="small"
                              :placeholder="__('label-email')"
                              name="email"
                              id="user_form_field_email">
                    </el-input>
                </el-form-item>
            </el-col>
            <el-col :span="9">
                <el-form-item :label="__('label-phone')"
                              prop="phone"
                              :error="errors.phone"
                              :rules="{ required: true, message: __('required-phone') }">
                    <el-input v-model="form.phone"
                              size="small"
                              :placeholder="__('label-phone')"
                              name="phone"
                              id="user_form_field_phone">
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
    },
    errors: {
      type: Object,
      required: false,
      default () {
        return {}
      }
    }
  }
}
</script>

<style lang="css">
</style>
