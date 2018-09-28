<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <p><strong>{{ __('title-privacy') }}</strong></p>
      <hr>

      <!-- Privacy  -->
      <el-row :gutter="10">
        <el-col
          :span="9"
          :offset="6">
          <el-button
            id="user_form_field_request_user_data"
            type="danger"
            size="mini"
            plain>{{ __('label-privacy-request') }}</el-button>
        </el-col>
      </el-row>
    </el-row>
  </div>
</template>

<script>
export default {
  props: {
    form: {
      type: Object,
      required: true
    }
  }
}
</script>

<style lang="css">
</style>
