<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <p><strong>Basic Information</strong></p>
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
          Photo
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
          :error="errors.first_name"
          :rules="{ required: true, message: 'First name is required.' }"
          label="First Name"
          prop="first_name">
          <el-input
            id="user_form_field_first_name"
            v-model="form.first_name"
            size="small"
            placeholder="First Name"
            name="first_name"/>
        </el-form-item>
      </el-col>
      <el-col :span="9">
        <el-form-item
          :error="errors.last_name"
          :rules="{ required: true, message: 'Last name is required.' }"
          label="Last Name"
          prop="last_name">
          <el-input
            id="user_form_field_last_name"
            v-model="form.last_name"
            size="small"
            placeholder="Last Name"
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
          :error="errors.email"
          :rules="{ required: true, message: 'Email address is required.' }"
          label="Email Address"
          prop="email">
          <el-input
            id="user_form_field_email"
            v-model="form.email"
            size="small"
            placeholder="Email Address"
            name="email"/>
        </el-form-item>
      </el-col>
      <el-col :span="9">
        <el-form-item
          :error="errors.phone"
          :rules="{ required: true, message: 'Phone number is required.' }"
          label="Phone Number"
          prop="phone">
          <el-input
            id="user_form_field_phone"
            v-model="form.phone"
            size="small"
            placeholder="Phone Number"
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
