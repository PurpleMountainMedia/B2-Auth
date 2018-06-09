<template lang="html">
    <div class="">
        <el-row :gutter="10">
            <p><strong>Security</strong></p>
            <hr>
        </el-row>

        <!-- Password Reset -->
        <el-row :gutter="10">
            <el-col :span="9" :offset="6">
                <el-form-item label="Password" prop="password">
                    <el-input v-model="form.password"
                              size="small"
                              type="password"
                              placeholder="New Password"
                              name="password"
                              id="user_form_field_password">
                    </el-input>
                </el-form-item>
            </el-col>
            <el-col :span="9">
                <el-form-item label="Confirm Password" prop="password_confirmation">
                    <el-input v-model="form.password_confirmation"
                              size="small"
                              type="password"
                              placeholder="Confirm Password"
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
            required: true,
        }
    }
}
</script>

<style lang="css">
</style>
