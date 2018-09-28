<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <el-col>
        <p><strong>{{ __('title-address') }}</strong></p>
        <slot
          :show="show"
          name="belowName" />
        <hr>
      </el-col>
    </el-row>

    <template v-if="show">
      <el-row :gutter="10">
        <el-col :md="12">
          <el-form-item
            :label="__('label-address-line1')"
            :error="errors.address_line_1"
            :rules="{ required: true, message: __('required-address-line1') }"
            prop="address_line_1">
            <el-input
              id="organisation_address_line_1"
              v-model="form.address_line_1"
              size="small"
              name="address_line_1"/>
          </el-form-item>
        </el-col>

        <el-col :md="12">
          <el-form-item
            :label="__('label-address-line2')"
            :error="errors.address_line_2"
            prop="address_line_2">
            <el-input
              id="organisation_address_line_2"
              v-model="form.address_line_2"
              size="small"
              name="address_line_2"/>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :md="12">
          <el-form-item
            :label="__('label-address-line2')"
            :error="errors.address_line_2"
            prop="address_line_2">
            <el-input
              id="organisation_address_line_2"
              v-model="form.address_line_2"
              size="small"
              name="address_line_2"/>
          </el-form-item>
        </el-col>

        <el-row :gutter="10">
          <el-col :md="12">
            <el-form-item
              :label="__('label-address-town')"
              :error="errors.address_town"
              :rules="{ required: true, message: __('required-address-town') }"
              prop="address_town">
              <el-input
                id="organisation_address_town"
                v-model="form.address_town"
                size="small"
                name="address_town"/>
            </el-form-item>
          </el-col>

          <el-col :md="12">
            <el-form-item
              :label="__('label-address-county')"
              :error="errors.address_county"
              :rules="{ required: true, message: __('required-address-county') }"
              prop="address_county">
              <el-input
                id="organisation_address_county"
                v-model="form.address_county"
                size="small"
                name="address_county"/>
            </el-form-item>
          </el-col>
        </el-row>

        <el-col :md="12">
          <el-form-item
            :label="__('label-address-country')"
            :error="errors.address_country"
            :rules="{ required: true, message: __('required-address-country') }"
            prop="address_country">
            <el-select
              id="organisation_address_country"
              v-model="form.address_country"
              size="small"
              name="address_country">
              <el-option
                v-for="(country, key) in countries"
                :key="key"
                :label="country.name"
                :value="country.code"/>
            </el-select>
          </el-form-item>
        </el-col>
      </el-row>

      <el-col :md="12">
        <el-form-item
          :label="__('label-address-country')"
          :error="errors.address_country"
          :rules="{ required: true, message: __('required-address-country') }"
          prop="address_country">
          <el-select
            v-model="form.address_country"
            filterable
            placeholder="Select">
            <el-option
              v-for="c in countries"
              :key="c.code"
              :label="c.name"
              :value="c.code"
              name="address_country"
              size="small"/>
          </el-select>
        </el-form-item>
      </el-col>
  </template></div>
</template>

<script>
// import countries from '../../../utils/countries.json'

export default {
  name: 'B2OrganisationsAddressFields',

  props: {
    form: {
      type: Object,
      required: true
    }
  },

  data () {
    return {
      errors: {},
      show: true
    }
  },

  computed: {
    countries () {
      return [
        {
          name: 'United Kingdom',
          code: 'GB'
        }
      ]
    }
  }
}
</script>

<style lang="css">
</style>
