<template lang="html">
  <b2-add-licence-button />
</template>

<script>
export default {
  name: 'B2ListLicences',

  components: {
    B2AddLicenceButton: () => import(/* webpackChunkName: "b2-add-licence-button" */'components/licences/B2AddLicenceButton')
  }
}
</script>

<style lang="css">
</style>
