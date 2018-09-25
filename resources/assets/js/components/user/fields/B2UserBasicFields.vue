<template lang="html">
    <div class="">
        <el-row :gutter="10">
            <p><strong>Basic Information</strong></p>
            <hr>
        </el-row>

        <!-- Name -->
        <el-row :gutter="10">
            <el-col class="profile-photo-container" :span="6">
              <label for="user_form_field_profile_photo"
                     class="el-form-item__label">
                     Photo
              </label>
              <div class="profile-photo"
                   style="background-image: url('https://via.placeholder.com/500x500')"
                   id="user_form_field_profile_photo">
              </div>
            </el-col>
            <el-col :span="9" :offset="6">
                <el-form-item label="First Name"
                              prop="first_name"
                              :error="errors.first_name"
                              :rules="{ required: true, message: 'First name is required.' }">
                    <el-input v-model="form.first_name"
                              size="small"
                              placeholder="First Name"
                              name="first_name"
                              id="user_form_field_first_name">
                    </el-input>
                </el-form-item>
            </el-col>
            <el-col :span="9">
                <el-form-item label="Last Name"
                              prop="last_name"
                              :error="errors.last_name"
                              :rules="{ required: true, message: 'Last name is required.' }">
                    <el-input v-model="form.last_name"
                              size="small"
                              placeholder="Last Name"
                              name="last_name"
                              id="user_form_field_last_name">
                    </el-input>
                </el-form-item>
            </el-col>
        </el-row>

        <!-- Contact  -->
        <el-row :gutter="10">
            <el-col :span="9" :offset="6">
                <el-form-item label="Email Address"
                              prop="email"
                              :error="errors.email"
                              :rules="{ required: true, message: 'Email address is required.' }">
                    <el-input v-model="form.email"
                              size="small"
                              placeholder="Email Address"
                              name="email"
                              id="user_form_field_email">
                    </el-input>
                </el-form-item>
            </el-col>
            <el-col :span="9">
                <el-form-item label="Phone Number"
                              prop="phone"
                              :error="errors.phone"
                              :rules="{ required: true, message: 'Phone number is required.' }">
                    <el-input v-model="form.phone"
                              size="small"
                              placeholder="Phone Number"
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
            required: true,
        },
        errors: {
            type: Object,
            required: false,
            default () {
                return {}
            }
        }
    },
}
</script>

<style lang="css">
</style>
