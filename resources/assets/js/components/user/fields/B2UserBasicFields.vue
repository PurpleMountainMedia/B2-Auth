<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <p><strong>{{ __('title-basic-info') }}</strong></p>
      <hr>
    </el-row>

    <!-- Name -->
    <el-row :gutter="10">
      <el-col
        :span="6"
        class="profile-photo-container">
        <label
          for="user_form_field_profile_photo"
          class="el-form-item__label">
          {{ __('label-photo') }}
        </label>
        <div
          id="user_form_field_profile_photo"
          class="profile-photo"
          style="background-image: url('https://via.placeholder.com/500x500')"/>
      </el-col>
      <el-col
        :span="9"
        :offset="6">
        <el-form-item
          :label="__('label-fname')"
          :error="errors.first_name"
          :rules="{ required: true, message: __('required-fname') }"
          prop="first_name">
          <el-input
            id="user_form_field_first_name"
            v-model="form.first_name"
            :placeholder="__('label-fname')"
            size="small"
            name="first_name"/>
        </el-form-item>
      </el-col>
      <el-col :span="9">
        <el-form-item
          :label="__('label-lname')"
          :error="errors.last_name"
          :rules="{ required: true, message: __('required-lname') }"
          prop="last_name">
          <el-input
            id="user_form_field_last_name"
            v-model="form.last_name"
            :placeholder="__('label-lname')"
            size="small"
            name="last_name"/>
        </el-form-item>
      </el-col>
    </el-row>

    <!-- Contact  -->
    <el-row :gutter="10">
      <el-col
        :span="9"
        :offset="6">
        <el-form-item
          :label="__('label-email')"
          :error="errors.email"
          :rules="{ required: true, message: __('required-email') }"
          prop="email">
          <el-input
            id="user_form_field_email"
            v-model="form.email"
            :placeholder="__('label-email')"
            size="small"
            name="email"/>
        </el-form-item>
      </el-col>
      <el-col :span="9">
        <el-form-item
          :label="__('label-phone')"
          :error="errors.phone"
          :rules="{ required: true, message: __('required-phone') }"
          prop="phone">
          <el-input
            id="user_form_field_phone"
            v-model="form.phone"
            :placeholder="__('label-phone')"
            size="small"
            name="phone"/>
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
