<template lang="html">

  <div v-loading="loading">
    <b2-create-organisation-modal :on-create="(org) => clonedOrganisations.push(org)" />

    <el-input
      v-model="search"
      :placeholder="__('Search')"
      class="mt-4"/>

    <el-row
      v-for="(row, key) in groupedOrganisations"
      :gutter="40"
      :key="key"
      class="mt-5">
      <el-col
        v-for="organisation in row"
        :span="24"
        :key="organisation.id">
        <el-card shadow="hover">
          <div
            slot="header"
            class="clearfix">
            <span><strong>{{ organisation.name }}</strong></span>
            <a
              :href="`/dashboard/organisations/${organisation.id}`">
              <el-button
                style="float: right; padding: 3px 0"
                type="text">{{ __('Edit') }}</el-button>
            </a>
          </div>
          <ul class="organisation_card_list">
            <li><strong>Type:</strong> {{ organisation.type }}</li>
          </ul>
        </el-card>
      </el-col>
    </el-row>
  </div>

</template>

<script>
var chunk = require('lodash.chunk')

export default {
  name: 'B2OrganisationsForm',

  components: {
    B2CreateOrganisationModal: () => import(/* webpackChunkName: "b2-create-organisation-modal" */'./components/B2CreateOrganisationModal')
  },

  props: {
    organisations: {
      type: Array,
      required: true
    }
  },

  data () {
    return {
      loading: false,
      clonedOrganisations: [],
      search: ''
    }
  },

  computed: {

    searchedOrganisations () {
      return this.search ? this.clonedOrganisations.filter(o => o.name.toUpperCase().includes(this.search.toUpperCase())) : this.clonedOrganisations
    },

    groupedOrganisations () {
      return chunk(this.searchedOrganisations, 1)
    }
  },

  mounted () {
    this.clonedOrganisations = this.organisations.slice(0)
  }
}
</script>

<style lang="css" scoped>
    .organisation_card_list {
        list-style: none;
        -webkit-margin-before: 0px;
        -webkit-margin-after: 0px;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        -webkit-padding-start: 10px;
    }
</style>
