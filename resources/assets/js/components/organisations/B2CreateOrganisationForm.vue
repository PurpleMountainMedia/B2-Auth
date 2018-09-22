<template lang="html">
  <div class="mt-4">
    <b2-form :form-action-route="createOrganisationRoute" :form="form">
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
            @click="slot.show = !slot.show"
            type="text">{{ show ? __('hide') : __('expand') }}
          </el-button>
        </b2-organisations-address-fields>

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
      }
    }
  },


  components: {
    B2Form: () => import(/* webpackChunkName: "b2-form" */'../B2Form'),
    B2OrganisationsBasicFields: () => import(/* webpackChunkName: "b2-organisations-basic-fields" */'./fields/B2OrganisationsBasicFields'),
    B2OrganisationsAddressFields: () => import(/* webpackChunkName: "b2-organisations-address-fields" */'./fields/B2OrganisationsAddressFields'),
  }
}
</script>

<style lang="css">
</style>
