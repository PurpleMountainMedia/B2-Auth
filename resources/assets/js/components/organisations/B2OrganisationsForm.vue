<template lang="html">

<div v-loading="loading">

<b2-create-organisation :on-create="(org) => this.clonedOrganisations.push(org)" />

</div>

</template>

<script>
export default {
    name: 'B2OrganisationsForm',

    components: {
        B2CreateOrganisation: () => import(/* webpackChunkName: "b2-create-organisation" */'./components/B2CreateOrganisation'),
    },

    props: {
        organisations: {
            type: Array,
            required: true,
        }
    },

    data () {
        return {
            loading: false,
            clonedOrganisations: [],
        }
    }
}
</script>

<style lang="css">
</style>
