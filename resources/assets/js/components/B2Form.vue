<template lang="html">
  <div class="">
    <el-form :model="form" label-position="top" label-width="100px" ref="authForm" method="POST" :action="formActionRoute" @submit.native.prevent="onSubmit($event)">
      <el-card class="bg-app mb-4">
        <div class="justify-between">
          <a :href="b2Config.site_url"><img v-if="b2Config.logo" :src="b2Config.logo" class="site_logo" :alt="b2Config.name"></a>
          <div class="site_product text-white">
            <h3 class="m-0"># app name #</h3>
            <p class="m-0">{{__('A product of B2 Systems')}}</p>
          </div>
        </div>
      </el-card>
      <slot v-bind:form="form" v-bind:loading="loading" v-bind:errors="(field) => getError(field)" v-bind:errorBag="errors"/>

      <input type="hidden" name="_token" :value="csrfToken">
    </el-form>

    <el-card class="mt-4">
      <div class="justify-around">
        <a href="">{{__('Education')}}</a>
        <a href="">{{__('Finance')}}</a>
        <a href="">{{__('People')}}</a>
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

    form: {
      required: false,
      type: Object,
      default: () => {
        return {}
      }
    },

    values: {
      required: false,
      type: Object,
      default: () => { return {} }
    },
  },

  data () {
    return {
      errors: {},
      loading: false
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

  computed: {
    csrfToken () {
      return this.b2FormData.csrfToken
    }
  },

  methods: {
    onSubmit ($event) {
      this.loading = true;
      this.$refs.authForm.validate((valid, errors) => {
        this.errors = errors
        if (valid) {
          $event.target.submit()
        } else {
          this.loading = false
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
