<template lang="html">
  <el-card>
    <div slot="header" class="clearfix">
      <span>{{ school.name }}</span>
      <el-button style="float: right; padding: 3px 0" type="text">{{ __('Edit') }}</el-button>
    </div>

    <p><strong>Created At:</strong> {{ school.created_at }}</p>

  </el-card>
</template>

<script>
export default {
  name: 'B2SchoolCard',

  props: {
    school: {
      type: Object,
      required: true
    }
  }
}
</script>

<style lang="css">
</style>
