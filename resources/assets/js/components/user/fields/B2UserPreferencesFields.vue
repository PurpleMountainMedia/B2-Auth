<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <p><strong>{{ __('title-prefs') }}</strong></p>
      <hr>

      <el-row>
        <el-col
          :span="9"
          :offset="6">
          <el-checkbox
            id="user_form_field_product_updates_marketing"
            v-model="form.product_updates_marketing"
            :label="__('label-product-updates')"
            border
            size="mini"
            name="product_updates_marketing"/>
        </el-col>
        <el-col :span="9">
          <el-checkbox
            id="user_form_field_product_notifications_marketing"
            v-model="form.product_notifications_marketing"
            :label="__('label-product-notifications')"
            border
            size="mini"
            name="product_notifications_marketing"/>
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
