<template lang="html">
  <el-card>
    <span slot="header">
      {{ plan.name }}
    </span>
    <p>{{ plan.currency }}{{ plan.cost }} every {{ plan.payment_every }}</p>
  </el-card>
</template>

<script>
export default {
  name: 'B2LicencePlanCard',

  props: {
    plan: {
      type: Object,
      required: true
    }
  }
}
</script>

<style lang="css">
</style>
