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
          name="qty"
          class="form-control"
          v-model="qty">
          <option
            v-for="(op, key) in qtyOptions"
            :key="key"
            :label="op.label"
            :value="op.value" />
        </select>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label for="">Barcode Range Start Number</label>
        <input
          type="number"
          class="form-control short_input"
          name="barcode_start"
          v-model="barcodeStart">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <label for="">Barcode Prefix</label>
        <input
          type="text"
          class="form-control short_input"
          name="barcode_prefix"
          v-model="barcodePrefix">
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h3>Total: £{{ total }}</h3>
        <small class="font-weight-strong">Barcode Range: {{ barcodePrefix }}{{ barcodeStart }} - {{ barcodePrefix }}{{ barcodeEnd }}</small>
      </div>
    </div>

    <!-- <button
      type="button"
      name="button"
      class="btn btn-primary">Buy
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

<style lang="css" scoped>
  .short_input {
    max-width: 100px;
  }
</style>
