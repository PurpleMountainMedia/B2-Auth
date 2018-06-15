<template lang="html">

<div v-loading="loading">
    <b2-create-organisation :on-create="(org) => this.clonedOrganisations.push(org)" />

    <el-row class="mt-5" :gutter="40" v-for="(row, key) in groupedOrganisations" :key="key">
        <el-col :span="12" v-for="organisation in row" :key="organisation.id">
            <el-card shadow="hover">
                <div slot="header" class="clearfix">
                  <span><strong>{{ organisation.name }}</strong></span>
                  <el-tag v-if="organisation.pivot.default" size="mini">Default</el-tag>
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
var chunk = require('lodash.chunk');

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

    computed: {

        groupedOrganisations()
        {
            return chunk(this.clonedOrganisations, 2);
        }
    },

    data () {
        return {
            loading: false,
            clonedOrganisations: [],
        }
    },

    mounted () {
        this.clonedOrganisations = this.organisations.slice(0);
    },
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
