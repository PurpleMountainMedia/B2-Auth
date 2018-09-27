<template lang="html">
  <div class="">
    <el-row :gutter="10">
      <el-col>
        <p><strong>{{ __('Address') }}</strong></p>
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
            :label="__('Address Line 1')"
            :error="errors.address_line_1"
            :rules="{ required: true, message: __('Address line 1 is required.') }"
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
            :label="__('Address Line 2')"
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
            :label="__('Address Town')"
            :error="errors.address_town"
            :rules="{ required: true, message: __('Address town is required.') }"
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
            :label="__('Address County')"
            :error="errors.address_county"
            :rules="{ required: true, message: __('Address county is required.') }"
            prop="address_county">
            <el-input
              id="organisation_address_county"
              v-model="form.address_county"
              size="small"
              name="address_county"/>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="10">
        <el-col :md="12">
          <el-form-item
            :label="__('Address Postcode')"
            :error="errors.address_postcode"
            :rules="{ required: true, message: __('Address postcode is required.') }"
            prop="address_postcode">
            <el-input
              id="organisation_address_postcode"
              v-model="form.address_postcode"
              size="small"
              name="address_postcode"/>
          </el-form-item>
        </el-col>

        <el-col :md="12">
          <el-form-item
            :label="__('Address Country')"
            :error="errors.address_country"
            :rules="{ required: true, message: __('Address country is required.') }"
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

    </template>
  </div>
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
