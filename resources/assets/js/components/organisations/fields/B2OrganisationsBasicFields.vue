<template lang="html">

  <div>
    <el-row :gutter="10">
      <el-col>
        <p><strong>{{ __('title-basic-info') }}</strong></p>
        <hr>
      </el-col>
    </el-row>

    <!-- Name -->
    <el-row :gutter="10">
      <el-col :md="14">
        <el-form-item
          :label="__('label-org-name')"
          :error="errors.name"
          :rules="{ required: true, message: __('required-org-name') }"
          prop="name">
          <el-input
            id="organisation_form_field_name"
            v-model="form.name"
            :placeholder="__('label-org-name')"
            size="small"
            name="name"/>
        </el-form-item>
      </el-col>

      <el-col :md="10">
        <el-form-item
          :label="__('label-org-type')"
          :error="errors.type"
          :rules="{ required: true, message: __('required-org-type') }"
          prop="type">
          <el-select
            v-model="form.type"
            :placeholder="__('label-org-type')"
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
          :label="__('default')"
          :error="errors.is_default"
          prop="default">
          <el-checkbox
            v-model="form.is_default"
            size="small">{{ _('label-org-default') }}</el-checkbox>
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

  computed: {
    organisationTypes () {
      return ['School', 'Multi Academy Trust', 'Council', 'Other']
    }
  }
}
</script>

<style lang="css">
</style>
