<template lang="html">
  <div>
    <el-form :model="organisation">
      <b2-errors :errors="errors" />
      <b2-organisations-basic-fields
        :form="organisation"/>

      <el-button
        type="primary">{{ __('Save') }}
      </el-button>

      <div class="school_list mt-4">
        <el-input
          v-model="search"
          :placeholder="__('Search')"
          class="mt-4"/>
        <div
          v-for="school in searchedSchools"
          :key="school.id"
          class="organisation_school mt-4">
          <b2-school-card
            :school="school" />
        </div>
      </div>

    </el-form>
  </div>
</template>

<script>
import api from 'utils/api'

export default {
  name: 'B2OrganisationForm',

  components: {
    B2OrganisationsBasicFields: () => import(/* webpackChunkName: "b2-organisations-basic-fields" */'./fields/B2OrganisationsBasicFields'),
    B2OrganisationsAddressFields: () => import(/* webpackChunkName: "b2-organisations-address-fields" */'./fields/B2OrganisationsAddressFields'),
    B2SchoolCard: () => import(/* webpackChunkName: "b2-school-card" */'../schools/B2SchoolCard'),
    B2Errors: () => import(/* webpackChunkName: "b2-errors" */'components/B2Errors')
  },

  props: {
    organisationId: {
      type: String,
      required: true
    },
    params: {
      type: Object,
      required: false,
      default: () => { return {} }
    }
  },

  data () {
    return {
      search: '',
      errors: {},
      organisation: {
        schools: []
      }
    }
  },

  computed: {
    searchedSchools () {
      return this.search ? this.organisation.schools.data.filter(o => o.name.toUpperCase().includes(this.search.toUpperCase())) : this.organisation.schools.data
    },

    defaultParams () {
      return {
        include: ['organisations.extra'],
        with: ['schools']
      }
    },

    mergedParams () {
      return {
        ...this.params,
        ...this.defaultParams
      }
    }
  },

  mounted () {
    this.getOrganisation()
  },

  methods: {
    getOrganisation () {
      api.get({
        path: `organisations/${this.organisationId}`,
        params: this.mergedParams
      })
        .then((data) => {
          this.organisation = data.data
        })
        .catch((error) => {
          this.errors = error
        })
    }
  }
}
</script>

<style lang="css">
</style>
