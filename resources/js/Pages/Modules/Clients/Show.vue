<template>

    <UserProfile
        :user="props.user"
        :image="props.image"
        :showUrl="props.show_url"
        :errors="props.errors"
        :users="props.users"
    />

</template>

<script setup>
import VueLink from '../../../components/ViewLink'
import UserProfile from "../../../components/UserProfile";
let props = defineProps({
    user:[],
    users:[],
    image:'',
    show_url:String,
    errors:Object,
})
</script>
