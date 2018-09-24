<template lang="html">
  <div>
    {{ title }}


    <select
      name="qty"
      v-model="qty">
      <option
        v-for="(op, key) in qtyOptions"
        :key="key"
        :label="op.label"
        :value="op.value" />
    </select>

    <input
      type="number"
      name="barcode_start"
      v-model="barcodeStart">

    <input
      type="text"
      name="barcode_prefix"
      v-model="barcodePrefix">

    <button
      type="button"
      name="button"
      class="btn btn-primary">Buy
    </button>


    Range: {{ barcodePrefix }}{{ barcodeStart }} - {{ barcodePrefix }}{{ barcodeEnd }}

    Total: £{{ total }}

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
    }
  },
  data () {
    return {
      qty: 100,
      barcodeStart: 1,
      barcodePrefix: 'b2_',
    }
  },
  computed: {
    qtyOptions () {
      return [
        {
          label: `Pack of 100 (£${this.qtyToCost[100]} per label)`,
          value: 100
        },
        {
          label: `Pack of 250 (£${this.qtyToCost[250]} per label)`,
          value: 250
        },
        {
          label: `Pack of 500 (£${this.qtyToCost[500]} per label)`,
          value: 500
        },
        {
          label: `Pack of 750 (£${this.qtyToCost[750]} per label)`,
          value: 750
        },
        {
          label: `Pack of 1000 (£${this.qtyToCost[1000]} per label)`,
          value: 1000
        },
        {
          label: `Pack of 1500 (£${this.qtyToCost[1500]} per label)`,
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
        1500: 0.45,
      }
    },
    total () {
      return this.qtyToCost[this.qty] * this.qty
    },
    barcodeEnd () {
      return this.barcodeStart ? parseInt(this.barcodeStart)+this.qty : this.qty
    }
  }
}
</script>

<style lang="css">
</style>
