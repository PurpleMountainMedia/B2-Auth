<template lang="html">
  <div class="">
    <el-form :model="form" label-position="top" label-width="100px" ref="authForm" method="POST" :action="formActionRoute" @submit.native.prevent="onSubmit($event)">
      <el-card class="bg-primary mb-2" >
        <a :href="b2Config.site_url"><img v-if="b2Config.logo" :src="b2Config.logo" class="site_logo"></a>
      </el-card>
      <slot v-bind:form="form"/>
    </el-form>
  </div>
</template>

<script>
export default {
  name: 'AuthForm',

  props: {
    formActionRoute: {
      required: true,
      type: String
    },

    logo: {
      required: false,
      type: [String],
      default: () => { return '' }
    }
  },

  data () {
    return {
      form: {},
      errors: {},
      loading: false,
    }
  },

  mounted () {
    Object.keys(this.oldInput).map((key) => {
        this.$set(this.form, key, this.oldInput[key])
    });

    this.$nextTick(() => {
      this.errors = this.formErrors
    })
  },

  methods: {
    onSubmit ($event) {
      this.loading = true;
      this.$refs.authForm.validate((valid, errors) => {
          if (valid) {
            $event.target.submit()
          } else {
            this.loading = false;
          }
      });
    }
  }
}
</script>

<style lang="css">
</style>
