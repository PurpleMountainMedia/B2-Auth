<template lang="html">

    <div>
        <el-row :gutter="10">
          <el-col>
            <p><strong>{{__('title-basic-info')}}</strong></p>
            <hr>
          </el-col>
        </el-row>

        <!-- Name -->
        <el-row :gutter="10">
            <el-col :md="14">
                <el-form-item :label="__('label-org-name')"
                              prop="name"
                              :error="errors.name"
                              :rules="{ required: true, message: __('required-org-name') }">
                    <el-input v-model="form.name"
                              size="small"
                              :placeholder="__('label-org-name')"
                              name="name"
                              id="organisation_form_field_name">
                    </el-input>
                </el-form-item>
            </el-col>

            <el-col :md="10">
                <el-form-item :label="__('label-org-type')"
                              prop="type"
                              :error="errors.type"
                              :rules="{ required: true, message: __('required-org-type') }">
                    <el-select v-model="form.type"
                               :placeholder="__('label-org-type')"
                               size="small"
                               name="type">
                        <el-option v-for="(type, key) in organisationTypes"
                                   :key="key"
                                   :value="type"></el-option>
                    </el-select>
                </el-form-item>
            </el-col>
        </el-row>

        <!-- Default -->
        <el-row :gutter="10" v-show="showDefault">
            <el-col :span="9">
                <el-form-item :label="__('default')"
                              prop="default"
                              :error="errors.is_default">
                    <el-checkbox v-model="form.is_default" size="small">{{_('label-org-default')}}</el-checkbox>
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
    organisationTypes()
    {
      return ['School', 'Multi Academy Trust', 'Council', 'Other']
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
