<template lang="html">
  <div class="">
    <template>
      <el-row :gutter="10">
          <el-col :md="12">
              <el-form-item :label="__('Address Line 1')"
                            prop="address_line_1"
                            :error="errors.address_line_1"
                            :rules="{ required: true, message: __('Address line 1 is required.') }">
                  <el-input v-model="form.address_line_1"
                            size="small"
                            name="address_line_1"
                            id="organisation_address_line_1">
                  </el-input>
              </el-form-item>
          </el-col>

          <el-col :md="12">
              <el-form-item :label="__('Address Line 2')"
                            prop="address_line_2"
                            :error="errors.address_line_2">
                  <el-input v-model="form.address_line_2"
                            size="small"
                            name="address_line_2"
                            id="organisation_address_line_2">
                  </el-input>
              </el-form-item>
          </el-col>
      </el-row>

      <el-row :gutter="10">
          <el-col :md="12">
              <el-form-item :label="__('Address Town')"
                            prop="address_town"
                            :error="errors.address_town"
                            :rules="{ required: true, message: __('Address town is required.') }">
                  <el-input v-model="form.address_town"
                            size="small"
                            name="address_town"
                            id="organisation_address_town">
                  </el-input>
              </el-form-item>
          </el-col>

          <el-col :md="12">
              <el-form-item :label="__('Address County')"
                            prop="address_county"
                            :error="errors.address_county"
                            :rules="{ required: true, message: __('Address county is required.') }">
                  <el-input v-model="form.address_county"
                            size="small"
                            name="address_county"
                            id="organisation_address_county">
                  </el-input>
              </el-form-item>
          </el-col>
      </el-row>

      <el-row :gutter="10">
          <el-col :md="12">
              <el-form-item :label="__('Address Postcode')"
                            prop="address_postcode"
                            :error="errors.address_postcode"
                            :rules="{ required: true, message: __('Address postcode is required.') }">
                  <el-input v-model="form.address_postcode"
                            size="small"
                            name="address_postcode"
                            id="organisation_address_postcode">
                  </el-input>
              </el-form-item>
          </el-col>

          <el-col :md="12">
              <el-form-item :label="__('Address Country')"
                            prop="address_country"
                            :error="errors.address_country"
                            :rules="{ required: true, message: __('Address country is required.') }">
                <el-select v-model="form.address_country" filterable placeholder="Select">
                  <el-option v-for="c in countries"
                             :key="c.code"
                             :label="c.name"
                             name="address_country"
                             size="small"
                             :value="c.code">
                  </el-option>
                </el-select>
              </el-form-item>
          </el-col>
      </el-row>
    </template>

  </div>
</template>

<script>
import countries from '../../../utils/countries.json'

export default {
  name: 'B2OrganisationsAddressFields',

  props: {
      form: {
        type: Object,
        required: true,
      },
  },

  data () {
      return {
          errors: {},
      }
  },

  computed: {
    countries () {
      return countries
    }
  }
}
</script>

<style lang="css">
</style>
