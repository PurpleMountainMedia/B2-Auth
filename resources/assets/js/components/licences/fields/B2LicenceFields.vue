<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <el-col>
        <p><strong>{{ __('Choose School') }}</strong></p>
        <hr>
      </el-col>
    </el-row>

    <el-row
      v-if="needsSchool"
      :gutter="10">
      <el-col :md="12">
        <el-form-item
          :label="__('School')">
          <el-select
            v-model="form.school"
            value-key="id">
            <el-option
              v-for="school in schools"
              :value="school"
              :label="school.name"
              :key="school.id">
              {{ school.name }} | {{ school.pupil_count }} pupils
            </el-option>
          </el-select>
        </el-form-item>
      </el-col>
    </el-row>

    <el-row
      v-if="licencePlans.length > 0"
      :gutter="10">
      <el-col>
        <p><strong>{{ __('Choose Plan') }}</strong></p>
        <hr>
      </el-col>
    </el-row>

    <el-row
      v-if="licencePlans.length > 0"
      :gutter="10">
      <el-col :md="24">
        <p>{{ __('Showing plans for schools with pupil counts over') }}: <strong>{{ form.school.pupil_count }}</strong></p>
      </el-col>

      <el-col
        v-for="plan in licencePlans"
        :key="plan.id"
        :md="12">
        <b2-licence-plan-card :plan="plan"/>
      </el-col>
    </el-row>

  </div>
</template>

<script>
import api from 'utils/api'

export default {
  name: 'B2LicenceFields',

  components: {
    B2LicencePlanCard: () => import(/* webpackChunkName: "b2-licence-plan-card" */'components/licences/components/B2LicencePlanCard')
  },

  props: {
    form: {
      type: Object,
      required: true
    },
    needsSchool: {
      type: Boolean,
      required: false,
      default: () => { return true }
    }
  },

  data () {
    return {
      errors: {},
      schools: {},
      licencePlans: {}
    }
  },

  watch: {
    'form.school': function () {
      this.getLicencePlans()
    }
  },

  mounted () {
    this.getSchools()
  },

  methods: {
    getSchools () {
      api.get({
        path: 'schools',
        params: {
          limit: 1000 * 1000,
          include: ['schools.extra']
        }
      })
        .then((data) => {
          this.schools = data.data
        })
        .catch((error) => {
          this.errors = error
        })
    },

    getLicencePlans () {
      var pupils = this.form.school.pupil_count
      var schools = 1
      api.get({
        path: 'licence-plans',
        params: {
          limit: 1000 * 1000,
          minPupils: pupils,
          maxPupils: pupils,
          minSchools: schools,
          maxSchools: schools,
          include: ['licencePlans.extra']
        }
      })
        .then((data) => {
          this.licencePlans = data.data
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
