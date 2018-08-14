<template lang="html">
  <div class="">
    <el-form :model="form" label-position="top" label-width="100px" ref="authForm" method="POST" :action="formActionRoute" @submit.native.prevent="onSubmit($event)">
      <el-card class="bg-primary mb-2" >
        <a :href="b2Config.site_url"><img v-if="b2Config.logo" :src="b2Config.logo" class="site_logo" :alt="b2Config.name"></a>
      </el-card>
      <slot v-bind:form="form" v-bind:loading="loading" v-bind:errors="(field) => getError(field)"/>

      <input type="hidden" name="_token" :value="csrfToken">
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
  },

  data () {
    return {
      form: {},
      errors: {},
      loading: false
    }
  },

  mounted () {
    Object.keys(this.b2FormData.old).map((key) => {
        this.$set(this.form, key, this.b2FormData.old[key])
    })

    this.$nextTick(() => {
      this.errors = this.b2FormData.errors
    })
  },

  computed: {
    csrfToken () {
      return this.b2FormData.csrfToken
    }
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
    },

    getError (field) {
      return this.errors[field] ? this.errors[field][0] : ''
    }
  }
}
</script>

<style lang="css">
</style>
