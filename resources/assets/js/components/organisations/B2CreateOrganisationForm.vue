<template lang="html">
  <div class="mt-4">
    <b2-form
      ref="organisationForm"
      :form-action-route="createOrganisationRoute"
      :form="form">
      <template slot-scope="slotProps">
        <b2-organisations-basic-fields
          :form="slotProps.form"
          :show-default="false"/>

        <b2-organisations-address-fields
          v-if="slotProps.form.type === 'School'"
          :form="slotProps.form">
          <el-button
            slot="belowName"
            slot-scope="slot"
            type="text"
            @click="slot.show = !slot.show">{{ show ? __('hide') : __('expand') }}
          </el-button>
        </b2-organisations-address-fields>

        <el-button
          :loading="slotProps.loading"
          class="mt-3"
          native-type="submit"
          type="primary">{{ __('create') }} <i class="far fa-lock"/></el-button>
      </template>
    </b2-form>
  </div>
</template>

<script>
export default {
  name: 'B2CreateOrganisationForm',

  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form'),
    B2OrganisationsBasicFields: () => import(/* webpackChunkName: "b2-organisations-basic-fields" */'./fields/B2OrganisationsBasicFields'),
    B2OrganisationsAddressFields: () => import(/* webpackChunkName: "b2-organisations-address-fields" */'./fields/B2OrganisationsAddressFields'),
    B2OrganisationsAdvancedFields: () => import(/* webpackChunkName: "b2-organisations-advanced-fields" */'./fields/B2OrganisationsAdvancedFields')
  },

  props: {
    createOrganisationRoute: {
      required: true,
      type: String
    },

    hideDefaultOrganisation: {
      required: true,
      type: Boolean,
      default: () => { return false }
    }
  },

  data () {
    return {
      form: {
        is_default: true,
        address_country: 'GB'
      }
    }
  },

  computed: {
    addressSectionHasErrors () {
      var addressErrorKeys = ['address_line_1', 'address_town', 'address_county', 'address_postcode', 'address_country']
      return this.hasErrors(addressErrorKeys)
    },

    advancedSectionHasErrors () {
      var advancedSectionKeys = ['pupil_count', 'room_count']
      return this.hasErrors(advancedSectionKeys)
    }
  },

  methods: {
    hasErrors (keys) {
      var errors = this.$refs.organisationForm ? this.$refs.organisationForm.errors : {}

      var hasErrors = false
      keys.forEach((key) => {
        console.log(key)
        if (errors[key]) {
          hasErrors = true
        }
      })

      return hasErrors
    }
  }
}
</script>

<style lang="css">
</style>
