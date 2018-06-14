<template lang="html">
    <div>
        <el-row :gutter="10">
            <p><strong>Basic Information</strong></p>
            <hr>
        </el-row>

        <!-- Name -->
        <el-row :gutter="10">
            <el-col :span="9" :offset="6">
                <el-form-item label="Organisation Name"
                              prop="name"
                              :error="errors.name"
                              :rules="{ required: true, message: 'Name is required.' }">
                    <el-input v-model="form.name"
                              size="small"
                              placeholder="Organisation Name"
                              name="name"
                              id="organisation_form_field_name">
                    </el-input>
                </el-form-item>
            </el-col>
        </el-row>

        <!-- Type -->
        <el-row :gutter="10">
            <el-col :span="9" :offset="6">
                <el-form-item label="Organisation Type"
                              prop="type"
                              :error="errors.type"
                              :rules="{ required: true, message: 'Type is required.' }">
                    <el-select v-model="form.type"
                               placeholder="Organisation Type"
                               size="small">
                        <el-option v-for="(type, key) in organisationTypes"
                                   :key="key"
                                   :value="type"></el-option>
                    </el-select>
                </el-form-item>
            </el-col>
        </el-row>

    </div>
</template>

<script>
export default {
    name: 'B2OrganisationsBasicFields',

    props: {
        form: {
            type: Object,
            required: true,
        }
    },

    computed: {
        organisationTypes()
        {
            return ['School', 'Multi Academy Trust', 'Council', 'Other']
        }
    },

    data () {
        return {
            errors: {},
        }
    }
}
</script>

<style lang="css">
</style>
