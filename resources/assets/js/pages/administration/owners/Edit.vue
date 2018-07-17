<template>

    <div class="columns is-centered">
        <div class="column is-three-quarters animated fadeIn">
            <vue-form-ss class="box animated fadeIn"
                :route-params="[$route.name, $route.params.id, false]"
                @loaded="initialised = true"
                ref="form"/>
            <div v-if="initialised">
                <discussions class="has-margin-top-large"
                    :discussable-id="$refs.form.data.params.owner_id"
                    discussable-type="owner"/>
                <comments-card class="has-margin-top-large"
                    :id="$refs.form.data.params.owner_id"
                    type="owner"/>
                <contacts :id="$refs.form.data.params.owner_id"
                    type="owner"/>
                <documents-card :id="$refs.form.data.params.owner_id"
                    type="owner"/>
                <addresses :id="$refs.form.data.params.owner_id"
                    type="owner"/>
            </div>
        </div>
    </div>

</template>

<script>

import DocumentsCard from '../../../components/enso/documents/DocumentsCard.vue';
import Discussions from '../../../components/enso/discussions/Discussions.vue';
import CommentsCard from '../../../components/enso/comments/CommentsCard.vue';
import Contacts from '../../../components/enso/contacts/Contacts.vue';
import Addresses from '../../../components/enso/addresses/Addresses.vue';
import VueFormSs from '../../../components/enso/vueforms/VueFormSs.vue';

export default {
    components: {
        Discussions, CommentsCard, Contacts, DocumentsCard, Addresses, VueFormSs,
    },

    data() {
        return {
            initialised: false,
        };
    },
};

</script>
