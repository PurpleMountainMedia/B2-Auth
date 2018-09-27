<template lang="html">
  <div class="">
    <el-form
      ref="authForm"
      :model="form"
      :action="formActionRoute"
      label-position="top"
      label-width="100px"
      method="POST"
      @submit.native.prevent="onSubmit($event)">
      <el-card class="bg-app mb-4">
        <div class="justify-between">
          <a :href="b2Config.site_url"><img
            v-if="b2Config.logo"
            :src="b2Config.logo"
            :alt="b2Config.name"
            class="site_logo"></a>
          <div class="site_product text-white">
            <h3 class="m-0">{{__('title-education')}}</h3>
            <p class="m-0">{{__('title-product-of')}}</p>
          </div>
        </div>
      </el-card>
      <slot
        :form="form"
        :loading="loading"
        :errors="(field) => getError(field)"
        :errorBag="errors"/>

      <input
        :value="csrfToken"
        type="hidden"
        name="_token">
    </el-form>

    <el-card class="mt-4">
      <div class="justify-around">
        <a :href="urlReturn">{{__('return')}}</a>
      </div>
    </el-card>
  </div>
</template>

<script>
export default {
  name: 'B2Form',

  props: {
    formActionRoute: {
      required: true,
      type: String
    },

    urlReturn: {
      required: false,
      type: String,
      default: () => { return null }
    },

    form: {
      required: false,
      type: Object,
      default: () => { return {} }
    },

    values: {
      required: false,
      type: Object,
      default: () => { return {} }
    }
  },

  data () {
    return {
      errors: {},
      loading: false
    }
  },

  computed: {
    csrfToken () {
      return this.b2FormData.csrfToken
    }
  },

  mounted () {
    Object.keys(this.values).map((key) => {
      this.$set(this.form, key, this.values[key])
    })

    Object.keys(this.b2FormData.old).map((key) => {
      this.$set(this.form, key, this.b2FormData.old[key])
    })

    this.$nextTick(() => {
      this.errors = this.b2FormData.errors
    })
  },

  methods: {
    onSubmit ($event) {
      this.loading = true
      this.$refs.authForm.validate((valid, errors) => {
        this.errors = errors
        if (valid) {
          $event.target.submit()
        } else {
          this.loading = false
        }
      })
    },

    getError (field) {
      return this.errors[field] ? this.errors[field][0] : ''
    }
  }
}
</script>

<style lang="css">
</style>
