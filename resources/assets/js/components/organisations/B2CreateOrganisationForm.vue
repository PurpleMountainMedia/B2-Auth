<template lang="html">
  <div class="mt-4">
    <b2-form :form-action-route="createOrganisationRoute" :form="form" ref="organisationForm">
      <template slot-scope="slotProps">
        <b2-organisations-basic-fields :form="slotProps.form"/>


        <el-row :gutter="10">
          <el-col>
            <p><strong>{{ __('Address') }}</strong></p>
            <el-button @click="show.address = !show.address" type="text">{{ show.address ? __('hide') : __('show') }} <i :class="'el-icon-arrow-' + (show.address ? 'up' : 'down')"></i></el-button>
            <hr>
          </el-col>
        </el-row>
        <b2-organisations-address-fields v-show="show.address || addressSectionHasErrors" :form="slotProps.form"/>

        <el-button class="mt-3" :loading="slotProps.loading" native-type="submit" type="primary">{{ __('Create') }} <i class="far fa-lock"></i></el-button>
      </template>
    </b2-form>
  </div>
</template>

<script>
export default {
  name: 'B2CreateOrganisationForm',

  props: {
    createOrganisationRoute: {
      required: true,
      type: String
    }
  },

  data () {
    return {
      form: {
        is_default: true,
        address_country: 'GB'
      },
      show: {
        address: true
      }
    }
  },

  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form'),
    B2OrganisationsBasicFields: () => import(/* webpackChunkName: "b2-organisations-basic-fields" */'./fields/B2OrganisationsBasicFields'),
    B2OrganisationsAddressFields: () => import(/* webpackChunkName: "b2-organisations-address-fields" */'./fields/B2OrganisationsAddressFields'),
  },

  computed: {
    addressSectionHasErrors () {
      var addressErrorKeys = ['address_line_1', 'address_town', 'address_county', 'address_postcode', 'address_country']
      var errors = this.$refs.organisationForm.errors

      var hasErrors = false
      addressErrorKeys.forEach((key) => {
        if (errors[key]) {
          hasErrors = true
        }
      })

      return hasErrors
    }
  },

  methods: {

  }
}
</script>

<style lang="css">
</style>
