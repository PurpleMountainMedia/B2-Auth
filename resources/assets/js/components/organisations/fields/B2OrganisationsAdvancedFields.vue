<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <el-col :md="12">
        <el-form-item
          :label="__('Number of Pupils')"
          :error="errors.pupil_count"
          :rules="{ required: true, message: __('Number of Pupils is required.') }"
          prop="pupil_count">
          <el-input-number
            id="organisation_pupil_count"
            v-model="form.pupil_count"
            size="small"
            name="pupil_count"
            controls-position="right"/>
        </el-form-item>
      </el-col>

      <el-col :md="12">
        <el-form-item
          :label="__('Number of Classrooms')"
          :error="errors.room_count"
          :rules="{ required: true, message: __('Number of Classrooms is required.') }"
          prop="pupil_count">
          <el-input-number
            id="organisation_room_count"
            v-model="form.room_count"
            size="small"
            name="room_count"
            controls-position="right"/>
        </el-form-item>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  name: 'B2OrganisationsAdvancedFields',

  props: {
    form: {
      type: Object,
      required: true
    }
  },

  data () {
    return {
      errors: {}
    }
  }
}
</script>

<style lang="css">
</style>
