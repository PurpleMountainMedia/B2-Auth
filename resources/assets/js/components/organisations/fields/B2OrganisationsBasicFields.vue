<template lang="html">
  <div>
    <el-row :gutter="10">
      <el-col>
        <p><strong>Basic Information</strong></p>
        <hr>
      </el-col>
    </el-row>

    <!-- Name -->
    <el-row :gutter="10">
      <el-col :md="14">
        <el-form-item
          :error="errors.name"
          :rules="{ required: true, message: 'Name is required.' }"
          label="Organisation Name"
          prop="name">
          <el-input
            id="organisation_form_field_name"
            v-model="form.name"
            size="small"
            placeholder="Organisation Name"
            name="name"/>
        </el-form-item>
      </el-col>

      <el-col :md="10">
        <el-form-item
          :error="errors.type"
          :rules="{ required: true, message: 'Type is required.' }"
          label="Organisation Type"
          prop="type">
          <el-select
            v-model="form.type"
            placeholder="Organisation Type"
            size="small"
            name="type">
            <el-option
              v-for="(type, key) in organisationTypes"
              :key="key"
              :value="type"/>
          </el-select>
        </el-form-item>
      </el-col>
    </el-row>

    <!-- Default -->
    <el-row
      v-show="showDefault"
      :gutter="10">
      <el-col :span="9">
        <el-form-item
          :error="errors.is_default"
          label="Default"
          prop="default">
          <el-checkbox
            v-model="form.is_default"
            size="small">Default Organisation</el-checkbox>
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
      required: true
    },
    showDefault: {
      type: Boolean,
      required: false,
      default: () => { return true }
    }
  },

  data () {
    return {
      errors: {}
    }
  },

  computed: {
    organisationTypes () {
      return ['School', 'Multi Academy Trust', 'Council', 'Other']
    }
  }
}
</script>

<style lang="css">
</style>
