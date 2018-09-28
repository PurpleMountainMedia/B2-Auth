<template lang="html">
  <div>
    {{ title }}

    <img
      v-for="(img, key) in images"
      :key="key"
      :src="img.src"
      :class="{ 'img-fluid': true }"
      :alt="img.alt"
      :title="img.title">

    <div class="row mt-4">
      <div class="col-md-12">
        <select
          v-model="qty"
          name="qty"
          class="form-control">
          <option
            v-for="(op, key) in qtyOptions"
            :key="key"
            :label="`${__('label-pack-of')} ${op.value} (${op.label} ${__('label-per-label')})`"
            :value="op.value" />
        </select>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label for="barcode_start">{{ __('label-barcode-range-start') }}</label>
        <input
          v-model="barcodeStart"
          type="number"
          class="form-control short_input"
          name="barcode_start">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label for="barcode_prefix">{{ __('label-barcode-prefix') }}</label>
        <input
          v-model="barcodePrefix"
          type="text"
          class="form-control short_input"
          name="barcode_prefix">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h3>{{ __('label-total') }}: £{{ total }}</h3>
        <small class="font-weight-strong">{{ __('label-barcode-range') }}: {{ barcodePrefix }}{{ barcodeStart }} - {{ barcodePrefix }}{{ barcodeEnd }}</small>
      </div>
    </div>

    <!-- <button
      type="button"
      name="button"
      class="btn btn-primary">{{__('button-buy')}}
    </button> -->

  </div>
</template>

<script>
export default {
  name: 'LabelChooserComponent',
  props: {
    title: {
      type: String,
      required: false,
      default: () => { return null }
    },
    images: {
      type: Array,
      required: false,
      default: () => { return [] }
    }
  },
  data () {
    return {
      qty: 100,
      barcodeStart: 1,
      barcodePrefix: 'b2_'
    }
  },
  computed: {
    qtyOptions () {
      return [
        {
          label: `£${this.qtyToCost[100]}`,
          value: 100
        },
        {
          label: `£${this.qtyToCost[250]}`,
          value: 250
        },
        {
          label: `£${this.qtyToCost[500]}`,
          value: 500
        },
        {
          label: `£${this.qtyToCost[750]}`,
          value: 750
        },
        {
          label: `£${this.qtyToCost[1000]}`,
          value: 1000
        },
        {
          label: `£${this.qtyToCost[1500]}`,
          value: 1500
        }
      ]
    },
    qtyToCost () {
      return {
        100: 0.89,
        250: 0.89,
        500: 0.69,
        750: 0.69,
        1000: 0.59,
        1500: 0.45
      }
    },
    total () {
      return this.qtyToCost[this.qty] * this.qty
    },
    barcodeEnd () {
      return this.barcodeStart ? parseInt(this.barcodeStart) + this.qty : this.qty
    }
  }
}
</script>

<style lang="css" scoped>
  .short_input {
    max-width: 100px;
  }
</style>
