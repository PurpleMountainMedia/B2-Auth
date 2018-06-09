<template lang="html">
    <div class="">
        <el-row :gutter="10">
            <p><strong>Preferences</strong></p>
            <hr>

            <el-row>
                <el-col :span="9" :offset="6">
                    <el-checkbox v-model="form.product_updates_marketing"
                                 label="Product Updates"
                                 border
                                 size="mini"
                                 name="product_updates_marketing"
                                 id="user_form_field_product_updates_marketing">
                    </el-checkbox>
                </el-col>
                <el-col :span="9">
                    <el-checkbox v-model="form.product_notifications_marketing"
                                 label="Product Notifications"
                                 border
                                 size="mini"
                                 name="product_notifications_marketing"
                                 id="user_form_field_product_notifications_marketing">
                    </el-checkbox>
                </el-col>
            </el-row>
        </el-row>
    </div>
</template>

<script>
export default {
    props: {
        form: {
            type: Object,
            required: true,
        }
    }
}
</script>

<style lang="css">
</style>
